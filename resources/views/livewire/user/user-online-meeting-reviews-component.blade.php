<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-2" style="background: #daded4;">
                    <div id="review_form_wrapper">

                        <div id="comments">
                            <h2 class="woocommerce-Reviews-title">Add review for </h2>
                            <ol class="commentlist">
                                <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1"
                                    id="li-comment-20">
                                    <div id="comment-20" class="comment_container">
                                        <img alt="" src="{{asset('images/doctors')}}/{{$online->doctor->profileImage}}"
                                            alt="80" width="120">
                                        <div class="comment-text">

                                            <p class="meta">
                                                <strong
                                                    class="woocommerce-review__author">{{$online->doctor->firstname}}</strong>

                                            </p>

                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div id="review_form">
                            @if(Session::has('re_msg'))
                            <div class="alert alert-success">{{Session::get('re_msg')}}</div>
                            @endif
                            <div id="respond" class="comment-respond">

                                <form wire:submit.prevent="addReview" id="commentform" class="comment-form" novalidate="">

                                    <div class="comment-form-skill" style="dispaly:flex;flex-direction:row;">
                                        <span>Your rating For Skill</span>
                                        <p class="stars" >

                                            <label for="rated-1">1 Star</label>
                                            <input type="radio" id="rated-1" name="rating" value="1" checked="checked"
                                                wire:model="rating" style="width:16px;">
                                            <label for="rated-2">2 Star</label>
                                            <input type="radio" id="rated-2" name="rating" value="2" checked="checked"
                                                wire:model="rating" style="width:16px;">
                                            <label for="rated-3">3 Star</label>
                                            <input type="radio" id="rated-3" name="rating" value="3" checked="checked"
                                                wire:model="rating" style="width:16px;">
                                            <label for="rated-4">4 Star</label>
                                            <input type="radio" id="rated-4" name="rating" value="4" checked="checked"
                                                wire:model="rating" style="width:16px;">
                                            <label for="rated-5">5 Star</label>
                                            <input type="radio" id="rated-5" name="rating" value="5" checked="checked"
                                                wire:model="rating" style="width:16px;">
                                            @error('rating')
                                        <p class="alert alert-danger">{{$message}}</p>@enderror
                                        </p>
                                    </div>
                                    <br>
                                    <div class="comment-form-behavior">
                                        <span>Your Rating For Behaviour</span>
                                        <p class="stars d-flex inline">

                                            <label for="rated-1">1 Star</label>
                                            <input type="radio" id="rated-1" name="behaviour" value="1" checked="checked"
                                                wire:model="behaviour" style="width:18px;">
                                            <label for="rated-2">2 Star</label>
                                            <input type="radio" id="rated-2" name="behaviour" value="2" checked="checked"
                                                wire:model="behaviour" style="width:18px;">
                                            <label for="rated-3">3 Star</label>
                                            <input type="radio" id="rated-3" name="behaviour" value="3" checked="checked"
                                                wire:model="behaviour" style="width:18px;">
                                            <label for="rated-4">4 Star</label>
                                            <input type="radio" id="rated-4" name="behaviour" value="4" checked="checked"
                                                wire:model="behaviour" style="width:18px;">
                                            <label for="rated-5">5 Star</label>
                                            <input type="radio" id="rated-5" name="behaviour" value="5" checked="checked"
                                                wire:model="behaviour" style="width:18px;">
                                            @error('behaviour')
                                        <p class="alert alert-danger">{{$message}}</p>@enderror
                                        </p>
                                    </div>
                                    <div class="comment-form-waiting">
                                        <span>Your Rating For Waiting Time</span>
                                        <p class="stars">

                                            <label for="rated-1">1 hour</label>
                                            <input type="radio" id="rated-1" name="waiting_time" value="1" checked="checked"
                                                wire:model="waiting_time" style="width:18px;">
                                            <label for="rated-2">45 Minutes</label>
                                            <input type="radio" id="rated-2" name="waiting_time" value="2" checked="checked"
                                                wire:model="waiting_time" style="width:18px;">
                                            <label for="rated-3">30 Minutes</label>
                                            <input type="radio" id="rated-3" name="waiting_time" value="3" checked="checked"
                                                wire:model="waiting_time" style="width:18px;">
                                            <label for="rated-4">20 Minutes</label>
                                            <input type="radio" id="rated-4" name="waiting_time" value="4" checked="checked"
                                                wire:model="waiting_time" style="width:18px;">
                                            <label for="rated-5">15 Minutes</label>
                                            <input type="radio" id="rated-5" name="waiting_time" value="5" checked="checked"
                                                wire:model="waiting_time" style="width:18px;">
                                            @error('waiting_time')
                                        <p class="alert alert-danger">{{$message}}</p>@enderror
                                        </p>
                                    </div>

                                    <p class="comment-form-comment">
                                        <label for="comment">Your review <span class="required">*</span>
                                        </label>
                                        <textarea id="comment" name="comment" cols="45" rows="8"
                                            wire:model="comment"></textarea>
                                        @error('comment')
                                    <p class="alert alert-danger">{{$message}}</p>@enderror
                                    </p>
                                    <p class="form-submit">
                                       <button type="submit" class="btn btn-warning">Submit Reviews</button>
                                    </p>
                                </form>

                            </div><!-- .comment-respond-->
                        </div><!-- #review_form -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
