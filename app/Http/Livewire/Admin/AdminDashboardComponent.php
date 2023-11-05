<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Order;
use Livewire\WithPaginate;
use Carbon\Carbon;
use App\Models\Appointment;
use App\Models\Transaction1;
use App\Models\Transaction;
use App\Models\PhramacyOrder;
use Auth;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        $orders= Order::orderBy('created_at','DESC')->get()->take(10);
        $totalSale=Order::where('status','delivered')->count();
        $process=Order::where('status','process')->count();
        $dispatch=Order::where('status','dispatch')->count();
        $onaway=Order::where('status','onaway')->count();
        $totalRevenue=Order::where('status', 'delivered')->sum('total');
        $cancelorders=Order::where('status', 'delivered')->count();
        $pendingorders=Transaction::where('status', 'pending')->count();
        $tpendingorders=Order::where('status', 'ordered')->count();
        $totalorders=Order::count();
        $todaySale=Order::where('status','delivered')->whereDate('created_at',Carbon::today())->count();
        $todayRevenue=Order::where('status', 'delivered')->whereDate('created_at',Carbon::today())->sum('total');
        $appointments= Appointment::orderBy('created_at','DESC')->get()->take(10);
        $totalAppointmentBooking=Appointment::count();
        $totalAppointmentRevenue=Appointment::sum('subtotal');
        $ptotalTransaction=Transaction::where('mode', 'card')->sum('total');
        $ptotalCashondelivery=Transaction::where('mode', 'cod')->sum('total');
        $totalTransaction=Transaction1::where('mode', 'card')->sum('total');
        $totalCheckup=Transaction1::where('mode', 'cod')->sum('total');
        $todayAppointmentBooking=Appointment::where('meeting_status','held')->whereDate('created_at',Carbon::today())->count();
        $todayAppointmentRevenue=Appointment::where('meeting_status', 'held')->whereDate('created_at',Carbon::today())->sum('subtotal');
        $onlineAppointmentBooking=Appointment::where('meeting_type','online')->count();
        $clinicAppointmentBooking=Appointment::where('meeting_type','physical')->count();
        $phramacyorders=PhramacyOrder::where('pharmacist_id',Auth::user()->id)->count();
        $phramacytotalAmount=PhramacyOrder::where('pharmacist_id',Auth::user()->id)->sum('total');
        return view('livewire.admin.admin-dashboard-component',[
            'orders'=>$orders,
            'totalSale'=>$totalSale,
            'totalorders'=>$totalorders,
            'cancelorders'=>$cancelorders,
            'pendingorders'=>$pendingorders,
            'totalRevenue'=>$totalRevenue,
            'todaySale'=>$todaySale,
            'todayRevenue'=>$todayRevenue,
            'appointments'=>$appointments,
            'totalAppointmentBooking'=>$totalAppointmentBooking,
            'totalAppointmentRevenue'=>$totalAppointmentRevenue,
            'todayAppointmentBooking'=>$todayAppointmentBooking,
            'todayAppointmentRevenue'=>$todayAppointmentRevenue,
            'onlineAppointmentBooking'=>$onlineAppointmentBooking,
            'clinicAppointmentBooking'=>$clinicAppointmentBooking,
            'totalTransaction'=>$totalTransaction,
            'totalCheckup'=>$totalCheckup,
            'ptotalCashondelivery'=>$ptotalCashondelivery,
            'ptotalTransaction'=>$ptotalTransaction,
            'tpendingorders'=>$tpendingorders,
            'onaway'=>$onaway,
            'process'=>$process,
            'dispatch'=>$dispatch,
            'phramacyorders'=>$phramacyorders,
            'phramacytotalAmount'=>$phramacytotalAmount])->layout('layouts.admin.base');
    }
}