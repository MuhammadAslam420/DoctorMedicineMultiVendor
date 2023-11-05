<?php

namespace App\Http\Livewire\Supplier;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Order;
use Livewire\WithPaginate;
use Carbon\Carbon;
use App\Models\Appointment;
use App\Models\Transaction1;
use App\Models\Transaction;
use App\Models\OrderItem;
use Auth;

class SupplierDashboardComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $orderitems= OrderItem::where('supplier_id',Auth::user()->id)->orderBy('created_at','DESC')->paginate(10);
        $totalSale=OrderItem::where('supplier_id',Auth::user()->id)->count();
        $totalRevenue=OrderItem::where('supplier_id',Auth::user()->id)->sum('price');
        $totalquantity=OrderItem::where('supplier_id',Auth::user()->id)->sum('quantity');
        $cancelorders=OrderItem::where('supplier_id',Auth::user()->id)->count();
        $todaySale=OrderItem::where('supplier_id',Auth::user()->id)->whereDate('created_at',Carbon::today())->count();
        $todayRevenue=OrderItem::where('supplier_id',Auth::user()->id)->whereDate('created_at',Carbon::today())->sum('price');
       
        return view('livewire.supplier.supplier-dashboard-component',[
            'orderitems'=>$orderitems,
            'totalSale'=>$totalSale,
            'cancelorders'=>$cancelorders,
            'totalRevenue'=>$totalRevenue,
            'todaySale'=>$todaySale,
            'todayRevenue'=>$todayRevenue,'totalquantity'=>$totalquantity])->layout('layouts.supplier.base');
        
    }
}
