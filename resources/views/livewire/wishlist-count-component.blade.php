<div class="header-action-icon-2">
    <a href="/wishlist">
        <img class="svgInject" alt="Nest" src="{{asset('assets/images/icon-heart.svg')}}" />
        @if(Cart::instance('wishlist')->count() > 0)
        <span class="pro-count blue">{{Cart::instance('wishlist')->count()}}</span>
        @else
        <span class="pro-count blue">0</span>
        @endif
    </a>
    <a href="/wishlist"><span class="lable">Wishlist</span></a>
</div>
