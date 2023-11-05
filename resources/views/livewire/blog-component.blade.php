<div>
    <div class="breadcrumb-area breadcrumb-area-padding-2 bg-gray-2">
        <div class="custom-container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li class="active">Blog</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="blog-area pt-75 pb-75">
        <div class="custom-container">
            <div class="row grid">
                @foreach($blogs as $blog)
                <div class="col-xl-3 col-lg-4 col-md-6 col-12 col-sm-6 grid-item wow tmFadeInUp">
                    <div class="blog-wrap-2 mb-30">
                        <div class="blog-img-2">
                            <a href="{{route('blogdetail',['blog_id'=>$blog->id])}}"><img src="{{asset('images/blog')}}/{{$blog->image}}" alt=""></a>
                            <div class="blog-tag-2">
                                <a href="{{route('blogdetail',['blog_id'=>$blog->id])}}">{{$blog->title}}</a>
                            </div>
                        </div>
                        <div class="blog-content-2">
                            <div class="blog-meta-2">
                                <ul>
                                    <li><i class="fa fa-calendar"></i>{{$blog->created_at}}</li>
                                </ul>
                            </div>
                            <h3><a href="{{route('blogdetail',['blog_id'=>$blog->id])}}">{{$blog->subtitle}}</a></h3>
                            <div class="blog-btn">
                                <a href="{{route('blogdetail',['blog_id'=>$blog->id])}}">Read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            {{$blogs->links('pagination::bootstrap-4')}}
        </div>
    </div>
</div>
