<li class="menu-item-has-children" ><a href="#">Collection</a>
    <ul class="dropdown" style="background: #f1b24a;">
        @foreach($categories as $cat)
        <li class="{{count($cat->subcategories) > 0 ? 'menu-item-has-children':''}}"><a href="{{route('product.category',['category_slug'=>$cat->slug])}}">{{$cat->name}}</a>
            @if(count($cat->subcategories)>0)
            <ul class="dropdown">
                @foreach($cat->subcategories as $scategory)
                <li><a href="{{route('product.category',['category_slug'=>$cat->slug,'scategory_slug'=>$scategory->slug])}}">{{$scategory->name}}</a></li>
                @endforeach
            </ul>
            @endif
        </li>
        @endforeach
    </ul>
</li>
