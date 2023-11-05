<div class="search-style-2" wire:ignore>
    <form method="get" action="{{ route('product.search') }}">


        <select class="from-control" name="category_id">
            <option value=''>All Categories</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" data-id="{{$category->id}}">{{ $category->name }}</option>
            @endforeach

        </select>
        <input type="text" name="search" placeholder="Search for items..." />
        <button type="submit"><i class="fa fa-search"></i></button>
        <input type="hidden" name="product_cat" value="{{ $product_cat }}" id="product-cate">
        <input type="hidden" name="product_cat_id" value="{{ $product_cat_id }}" id="product-cate-id">
        <a href="#" class="link-control" style="display:none;">{{Str_split($product_cat,12)[0]}}</a>
    </form>
</div>
