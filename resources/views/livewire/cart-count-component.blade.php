<div class="header-action-icon-2">
    <a class="mini-cart-icon" href="/cart">
        <img alt="Nest" src="{{asset('assets/images/icon-cart.svg')}}" />
        @if(Cart::instance('cart')->count()>0)
        <span class="pro-count blue">{{Cart::instance('cart')->count()}}</span>
        @else
        <span class="pro-count blue">0</span>
        @endif
    </a>
    <a href="/cart"><span class="lable">Cart</span></a>
    @if(Cart::instance('cart')->count() > 0)
    <div class="cart-dropdown-wrap cart-dropdown-hm2">
        <ul>
            @foreach(Cart::instance('cart')->content() as $item)
            <li>
                <div class="shopping-cart-img">
                    <a href="{{route('product.details',['slug'=>$item->model->slug])}}"><img alt="Nest" src="{{asset('images/product')}}/{{$item->model->image}}" /></a>
                </div>
                <div class="shopping-cart-title">
                    <h4><a href="{{route('product.details',['slug'=>$item->model->slug])}}">{{$item->model->name}}</a></h4>
                    <h4><span>{{$item->qty}} × </span>${{$item->model->price}}</h4>
                </div>

            </li>
            @endforeach

        </ul>

        <div class="shopping-cart-footer">
            <div class="shopping-cart-total">
                <h4>Total <span>${{Cart::total()}}</span></h4>
            </div>
            <div class="shopping-cart-button">
                <a href="/cart" class="outline">View cart</a>
                <a href="/checkout">Checkout</a>
            </div>
        </div>
    </div>
    @endif
</div>
