<div class="header-action-icon-2">
    <a href="/compare">
        <img class="svgInject" alt="Nest" src="{{asset('assets/images/icon-compare.svg')}}" />
       @if(Cart::instance('compare')->count() > 0)
       <span class="pro-count blue">{{Cart::instance('compare')->count()}}</span>
       @else
       <span class="pro-count blue">0</span>
       @endif
    </a>
    <a href="/compare"><span class="lable ml-0">Compare</span></a>
</div>
