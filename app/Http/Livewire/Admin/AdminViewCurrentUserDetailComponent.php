<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Livewire\WithPagination;
use Asantibanez\LivewireCharts\Models\AreaChartModel;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\LineChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Illuminate\Support\Facades\DB;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class AdminViewCurrentUserDetailComponent extends Component
{
    use WithPagination;
    public $types = ['USR', 'ADM', 'DOC','PHR','SUP','DELBOY','DELMAN'];
public $colors = [
'USR' => '#f6ad55',
'ADM' => '#fc8181',
'DOC' => '#bb0ddd',
'PHR' => '#89cdf4',
'SUP' => '#2d7699',
'DELBOY' => '#0ddd5d',
'DELMAN' => '#0d25dd',

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
public function render()
{
$users = User::whereIn('utype', $this->types)->get();
$columnChartModel = $users->groupBy('utype')
->reduce(function (ColumnChartModel $columnChartModel, $data) {
$type = $data->first()->utype;
$value = $data->count();
return $columnChartModel->addColumn($type, $value, $this->colors[$type]);
}, (new ColumnChartModel())
->setTitle('User by Type')
->setAnimated($this->firstRun)
->withOnColumnClickEventName('onColumnClick')
);
$pieChartModel = $users->groupBy('utype')
->reduce(function (PieChartModel $pieChartModel, $data) {
$type = $data->first()->utype;
$value = $data->count();
return $pieChartModel->addSlice($type, $value, $this->colors[$type]);
}, (new PieChartModel())
->setTitle('User by Type')
->setAnimated($this->firstRun)
->withOnSliceClickEvent('onSliceClick')
);


$this->firstRun = false;
   
        
        $number_blocks = [
            [
                'title' => 'Users Logged In Today',
                'number' => User::whereDate('current_login_at',today())->count()
            ],
            [
                'title' => 'Users Logged In Last 7 Days',
                'number' => User::whereDate('last_login_at', '>', today()->subDays(7))->count()
            ],
            [
                'title' => 'Users Logged In Last 30 Days',
                'number' => User::whereDate('last_login_at', '>', today()->subDays(30))->count()
            ],
        ];
        

        $list_blocks = [
            [
                'title' => 'Last Logged In Users',
                'entries' => User::orderBy('last_login_at', 'desc')
                    ->paginate(10),
            ],
        ];

        
          $userslogged=User::orderBy('last_login_at', 'desc')->paginate(10);

        $users=User::where('last_login_at', '<', today()->subDays(30))
        ->orwhere('last_login_at', null)
        ->orderBy('last_login_at', 'desc')->paginate(8);
        // $userdata =  User::select(DB::raw("COUNT(id) as count"))
        // ->whereYear('created_at', date('Y'))
        // ->groupBy(DB::raw("Month(created_at)"))
        // ->pluck('count');
        
        
        return view('livewire.admin.admin-view-current-user-detail-component',['users'=>$users,'number_blocks'=>$number_blocks,'userslogged'=>$userslogged,
        'columnChartModel' => $columnChartModel,
        'pieChartModel' => $pieChartModel])->layout('layouts.admin.base');
    }
}