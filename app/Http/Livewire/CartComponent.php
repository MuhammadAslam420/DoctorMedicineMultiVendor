<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use App\Models\Coupon;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Sale;

class CartComponent extends Component
{
    public $havecouponCode;
    public $couponCode;
    public $discount;
    public $subtotalAfterDiscount;
    public $totalAfterDiscount;
    public $taxAfetrDiscount;

    public function increaseQuantity($rowId){
        $product =Cart::instance('cart')->get($rowId);
        $qty =$product->qty + 1;
        Cart::instance('cart')->update($rowId,$qty);
        $this->emitTo('cart-count-component','refreshComponent');
         $this->emitTo('cart-component','refreshComponent');


    }
    public function decreaseQuantity($rowId){
        $product =Cart::instance('cart')->get($rowId);
        $qty =$product->qty - 1;
        Cart::instance('cart')->update($rowId,$qty);
        $this->emitTo('cart-count-component','refreshComponent');
         $this->emitTo('cart-component','refreshComponent');


    }
    public function destroy($rowId){
        Cart::instance('cart')->remove($rowId);
        $this->emitTo('cart-count-component','refreshComponent');
         $this->emitTo('cart-component','refreshComponent');

        session()->flash('warning_msg','Product has been removed from Cart successfully');


    }
    public function deleted(){
        Cart::destroy();
        $this->emitTo('cart-count-component','refreshComponent');
        session()->flash('success_message','Cart Has Been Cleared');

    }
    public function switchToSaveForLater($rowId)
    {
        $item=Cart::instance('cart')->get($rowId);
        Cart::instance('cart')->remove($rowId);
        Cart::instance('saveForLater')->add($item->id,$item->name,1,$item->price)->associate('App\Models\Product');
        $this->emitTo('cart-count-component','refreshComponent');
        session()->flash('message','Item is save for later!');
    }
    public function moveToCart($rowId)
    {
        $item=Cart::instance('saveForLater')->get($rowId);
        Cart::instance('saveForLater')->remove($rowId);
        Cart::instance('cart')->add($item->id,$item->name,1,$item->price)->associate('App\Models\Product');
        $this->emitTo('cart-count-component','refreshComponent');
        session()->flash('message','Item move into Cart!');

    }
    public function removeFromSave($rowId)
    {
        Cart::instance('saveForLater')->remove($rowId);
      session()->flash('message','Save For Later item has been deleted');
    }
    public function applyCouponCode()
    {
        $coupon = Coupon::where('code',$this->couponCode)->where('expirey_date','>=',Carbon::today())->where('cart_value','<=',Cart::instance('cart')->subtotal())->first();
        if(!$coupon)
        {
            session()->flash('message','Coupon Code is not Valid!');
            return;
        }
        session()->put('coupon',[
            'code'=>$coupon->code,
            'type'=>$coupon->type,
            'value'=>$coupon->value,
            'cart_value'=>$coupon->cart_value
        ]);
    }
public function calculateDiscount()
{
    if(session()->has('coupon'))
    {
        if(session()->get('coupon')['type']=='fixed')
        {
            $this->discount=session()->get('coupon')['value'];
        }
        else
        {
            $this->discount=(Cart::instance('cart')->subtotal() * session()->get('coupon')['value'])/100;
        }
        $this->subtotalAfterDiscount =Cart::instance('cart')->subtotal()-$this->discount;
        $this->taxAfetrDiscount =($this->subtotalAfterDiscount * config('cart.tax'))/100;
        $this->totalAfterDiscount=$this->subtotalAfterDiscount + $this->taxAfetrDiscount;
    }
}
public function removeCoupon()
{
    session()->forget('coupon');
}
public function checkout()
{
    if(Auth::check())
    {
        return redirect()->route('checkout');
    }
    else{
        return redirect()->route('login');
    }
}
public function setAmountForCheckout()
{
    if(!Cart::instance('cart')->count() > 0)
    {
        session()->forget('checkout');
        return;
    }
    if(session()->has('coupon'))
    {
        session()->put('checkout',[
            'discount'=>$this->discount,
            'subtotal'=>$this->subtotalAfterDiscount,
            'tax'=>$this->taxAfetrDiscount,
            'total'=>$this->totalAfterDiscount
        ]);
    }
    else{
        session()->put('checkout',[
            'discount'=>0,
            'subtotal'=>Cart::instance('cart')->subtotal(),
            'tax'=>Cart::instance('cart')->tax(),
            'total'=>Cart::instance('cart')->total()
        ]);

    }
}
    public function render()
    {
        if(session()->has('coupon'))
        {
            if(Cart::instance('cart')->subtotal() < session()->get('coupon')['cart_value'])
            {
                session()->forget('coupon');
            }
            else{
                $this->calculateDiscount();
            }
        }
        $sale=Sale::find(1);
        $this->setAmountForCheckout();
        if(Auth::check()){
            Cart::instance('cart')->store(Auth::user()->email);

        }

        return view('livewire.cart-component',['sale'=>$sale])->layout('layouts.base');
    }
}
