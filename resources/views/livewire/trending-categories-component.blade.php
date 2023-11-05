<div class="main-categori-wrap d-none d-lg-block">
    <a class="categories-button-active" href="#">
        <span class="fa fa-th-list"></span> <span class="et">Trending</span> Categories
        <i class="fa fa-angle-down "></i>
    </a>
    <div class="categories-dropdown-wrap categories-dropdown-active-large font-heading">
        <div class="d-flex categori-dropdown-inner">
            <ul>
               @foreach ($categories as $category)
               <li>
                <a href="{{ route('product.category',['category_slug'=>$category->slug])  }}">  <img src="{{ asset('images') }}/{{ $category->logo }}" alt="" />{{ $category->name }}</a>
               </li>

               @endforeach

            </ul>
            <ul class="end">
                @foreach($endCategories as $end)
                <li>
                    <a href="{{ route('product.category',['category_slug'=>$end->slug])  }}"> <img src="{{asset('images')}}/{{ $end->logo }}" alt="" />{{ $end->name }}</a>
                </li>
                @endforeach

            </ul>
        </div>

        <div class="more_categories"><span class="icon"></span> <a href="/shop"><span class="heading-sm-1">Shop Now...</span></a></div>
    </div>
</div>
