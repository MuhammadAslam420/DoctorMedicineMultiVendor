<?php

namespace App\Http\Livewire\Pharmacist;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use Cart;
use App\Models\PharmacyOrderItem;
use App\Models\PhramacyOrder;
use App\Models\Pharmacist;
use App\Models\User;
use App\Models\PharmacistTable;

class PharamacistCartComponent extends Component
{
    public $thankyou;
    public function increaseQuantity($rowId){
        $product =Cart::instance('cart')->get($rowId);
        $qty =$product->qty + 1;
        Cart::instance('cart')->update($rowId,$qty);
        $this->emitTo('cart-count-component','refreshComponent');


    }
    public function decreaseQuantity($rowId){
        $product =Cart::instance('cart')->get($rowId);
        $qty =$product->qty - 1;
        Cart::instance('cart')->update($rowId,$qty);
        $this->emitTo('cart-count-component','refreshComponent');


    }
    public function destroy($rowId){
        Cart::instance('cart')->remove($rowId);
        $this->emitTo('cart-count-component','refreshComponent');

        session()->flash('warning_msg','Product has been removed from Cart successfully');


    }
    public function destroyAll(){
        Cart::destroy();
        $this->emitTo('cart-count-component','refreshComponent');
        session()->flash('success_message','Cart Has Been Cleared');

    }

    public function placeOrder()
    {
        $order=new PhramacyOrder();
        $user=Pharmacist::where('user_id','=',Auth::user()->id)->first();
        $order->pharmacist_id=$user->id;
        $order->subtotal=Cart::instance('cart')->subtotal();
        $order->dsicount=0;
        $order->tax=Cart::instance('cart')->tax();
        $order->total=Cart::instance('cart')->total();
        $order->status='COS';
        $order->save();
        
        foreach(Cart::instance('cart')->content() as $item)
        {
            $orderItem=new PharmacyOrderItem();
           
            $orderItem->product_id=$item->id;
            $orderItem->pharmacist_id=$user->id;
            $orderItem->phramacy_order_id=$order->id;
            $orderItem->price=$item->price;
            $orderItem->quantity=$item->qty;
            $orderItem->save();
            $this->resetcart();
        }
    }
    public function resetcart()
    {
        $this->thankyou = 1;
        Cart::instance('cart')->destroy();
        session()->forget('checkout');
    }
  


    public function verifiyForCheckout()
    {
        
         
        if(!Auth::check())
        {
        return redirect()->route('login');
    }
    else if($this-> thankyou)
    {
        return redirect()->route('pharmacist.shop');
    }
   
    // else if(!session()->get('checkout'))
    // {
    //  return redirect()->route('pharmacist.cart');
    // }
       
    }
//     public function checkout()
// {
//     if(Auth::check())
//     {
//         return redirect()->route('pharmacist.cart');
//     }
//     else{
//         return redirect()->route('login');
//     }
// }
// public function setAmountForCheckout()
// {
//     if(!Cart::instance('cart')->count() > 0)
//     {
//         session()->forget('checkout');
//         return;
//     }
//     if(session()->has('coupon'))
//     {
//         session()->put('checkout',[
//             'discount'=>$this->discount,
//             'subtotal'=>$this->subtotalAfterDiscount,
//             'tax'=>$this->taxAfetrDiscount,
//             'total'=>$this->totalAfterDiscount
//         ]);
//     }
//     else{
//         session()->put('checkout',[
//             'discount'=>0,
//             'subtotal'=>Cart::instance('cart')->subtotal(),
//             'tax'=>Cart::instance('cart')->tax(),
//             'total'=>Cart::instance('cart')->total()
//         ]);

//     }
// }
    public function render()
    {
        $this->verifiyForCheckout();
        return view('livewire.pharmacist.pharamacist-cart-component')->layout('layouts.pharmacist.base');
    }
}
