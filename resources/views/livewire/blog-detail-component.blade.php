<div class="breadcrumb-area breadcrumb-area-padding-2 bg-gray-2">
    <div class="custom-container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li class="active">{{ $blog->title }}</li>
            </ul>
        </div>
    </div>
</div>
<div class="blog-details-area padding-30-row-col pt-75 pb-75">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ml-auto mr-auto">
                <div class="blog-details-wrapper">
                    <div class="blog-details-top-content">
                        <div class="post-categories">
                            <a href="/blog">Healthcare 5.0</a>
                        </div>
                        <h1>{{ $blog->title }}</h1>
                        <div class="blog-meta-3">
                            @php
                                            $auther=DB::table('blogs')->where('user_id',$blog->blog_id)->first();
                                            $user=DB::table('users')->where('id',$blog->blog_id)->first();
                                            @endphp
                            <ul>
                                <li><a href="#"><img src="{{asset('images/users')}}/{{$auther->image}}" alt=""> {{ $user->name }}</a> </li>
                                <li><i class="fa fa-calendar"></i> {{ $blog->created_at }}</li>
                                <li><a href="#"><i class="fa fa-comment-alt-lines"></i> 0 comments</a> </li>
                            </ul>
                        </div>
                    </div>
                    <img src="{{asset('images/blog')}}/{{$blog->image}}" alt="">
                    <p>{!! $blog->blog !!}.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
