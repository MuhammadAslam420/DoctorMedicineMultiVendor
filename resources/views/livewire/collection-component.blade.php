<li class="position-static"><a href="#">Collection <i
    class="fa fa-chevron-down"></i></a>

<ul class="mega-menu">
@foreach($categories as $cat)
<li class="sub-mega-menu sub-mega-menu-width-22 {{count($cat->subcategories) > 0 ? 'has-child-cate':''}}">
    <a class="menu-title" href="{{route('product.category',['category_slug'=>$cat->slug])}}">{{$cat->name}}</a>
    @if(count($cat->subcategories)>0)
    <ul>
        @foreach($cat->subcategories as $scategory)
        <li><a href="{{route('product.category',['category_slug'=>$cat->slug,'scategory_slug'=>$scategory->slug])}}">{{$scategory->name}}</a></li>
        @endforeach
    </ul>
    @endif
</li>
@endforeach
</ul>
</li>
