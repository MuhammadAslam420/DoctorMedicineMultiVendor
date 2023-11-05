<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Order;
use DB;
use App\Models\User;
use Livewire\WithPagination;
use Asantibanez\LivewireCharts\Models\AreaChartModel;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\LineChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Auth;
use App\Models\OrderItem;
use App\Models\Product;

class AdminOrderByAreaComponent extends Component
{
    public $types=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45];
    public $colors=[
        '1' => '#f6ad55',
'2' => '#fc8181',
'3' => '#bb0ddd',
'4' => '#89cdf4',
'5' => '#2d7699',
'6' => '#0ddd5d',
'7' => '#0d25dd',
'8' => '#f6ad55',
'9' => '#fc8181',
'10' => '#bb0ddd',
'11' => '#89cdf4',
'12' => '#2d7699',
'13' => '#0ddd5d',
'14' => '#0d25dd',
'15' => '#f6ad55',
'16' => '#fc8181',
'17' => '#bb0ddd',
'18' => '#89cdf4',
'19' => '#2d7699',
'20' => '#0ddd5d',
'21' => '#f6ad55',
'22' => '#fc8181',
'23' => '#bb0ddd',
'24' => '#89cdf4',
'25' => '#2d7699',
'26' => '#0ddd5d',
'27' => '#0d25dd',
'28' => '#0d25dd',
'29' => '#f6ad55',
'30' => '#fc8181',
'31' => '#bb0ddd',
'32' => '#89cdf4',
'33' => '#2d7699',
'34' => '#0ddd5d',
'35' => '#0d25dd',
'36' => '#0ddd5d',
'37' => '#0d25dd',
'38' => '#0d25dd',
'39' => '#f6ad55',
'40' => '#fc8181',
'41' => '#f6ad55',
'42' => '#fc8181',
'43' => '#bb0ddd',
'44' => '#89cdf4',
'45' => '#2d7699',
    ];
    public $firstRun = true;
    protected $listeners = [
    'onPointClick' => 'handleOnPointClick',
    'onSliceClick' => 'handleOnSliceClick',
    'onColumnClick' => 'handleOnColumnClick',
    ];
    public function handleOnPointClick($point)
    {
    dd($point);
    }
    public function handleOnSliceClick($slice)
    {
    dd($slice);
    }
    public function handleOnColumnClick($column)
    {
    dd($column);
    }
    public $filter = 'Multan';

    public $chartData;

    public function mount()
    {
        $this->chartData = $this->getCollection();
    }


    public function updatedFilter($value)
    {
        $this->loadChartData();
    }



    public function loadChartData()
    {
        $this->dispatchBrowserEvent('renderChart', [
            'data' => $this->getCollection()
        ]);
    }


    private function getCollection()
    {
        return DB::table('orders')
            ->selectRaw('count(*) as count, DATE_FORMAT(created_at, "%Y-%m-%d") as year')
            ->groupBy('year')
            ->orderBy('year')
            ->where('city', $this->filter)
            ->get();
    }
    public function render()
    {
        $users = OrderItem::whereIn('product_id', $this->types)->get();
$columnChartModel = $users->groupBy('product_id')
->reduce(function (ColumnChartModel $columnChartModel, $data) {
$type = $data->first()->product_id;
$value = $data->count();
return $columnChartModel->addColumn($type, $value, $this->colors[$type]);
}, (new ColumnChartModel())
->setTitle('Number Of Sales By Product')
->setAnimated($this->firstRun)
->withOnColumnClickEventName('onColumnClick')
);
$pieChartModel = $users->groupBy('product_id')
->reduce(function (PieChartModel $pieChartModel, $data) {
$type = $data->first()->product_id;
$value = $data->count();
return $pieChartModel->addSlice($type, $value, $this->colors[$type]);
}, (new PieChartModel())
->setTitle('Number Of Sales By Product')
->setAnimated($this->firstRun)
->withOnSliceClickEvent('onSliceClick')
);


$this->firstRun = false;
        $report = [];
$cards = Order::select([
        'city',
        \DB::raw("DATE_FORMAT(created_at, '%Y-%m') as month"),
        \DB::raw('COUNT(id) as invoices'),
        \DB::raw('SUM(total) as amount')
    ])
    ->groupBy('city')
    ->groupBy('month')
    ->get();

$cards->each(function($item) use (&$report) {
        $report[$item->month][$item->city] = [
            'count' => $item->invoices,
            'amount' => $item->amount
        ];
    });

$citys = $cards->pluck('city')->sortBy('city')->unique();
$products=Product::all();
        return view('livewire.admin.admin-order-by-area-component',['report'=>$report,'citys'=>$citys,'columnChartModel' => $columnChartModel,
        'pieChartModel' => $pieChartModel,'products'=>$products,'filters' => DB::table('orders')
        ->distinct('created_at')
        ->pluck('city')])->layout('layouts.admin.base');
    }
}
