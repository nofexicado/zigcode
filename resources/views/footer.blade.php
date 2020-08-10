<footer class="section-footer pt-3 pb-2 mt-3" id="footer">
	<div class="container pt-3 pb-3">
		<section class="footer-top padding-top">
			<div class="row">
				<aside class="col-sm-3 col-md-3">
					<h5  class="title">{{ Helper::translation(2022,$translate) }}</h5>
					<div class="footer-box-info">
						    <ul>
                               @if($allsettings->facebook_url != '')
                                <li>
                                    <a href="{{ $allsettings->facebook_url }}" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                @endif
                                @if($allsettings->twitter_url != '')
                                <li>
                                    <a href="{{ $allsettings->twitter_url }}" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                @endif
                                @if($allsettings->gplus_url != '')
                                <li>
                                    <a href="{{ $allsettings->gplus_url }}" target="_blank">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                @endif
                                @if($allsettings->pinterest_url != '')
                                <li>
                                    <a href="{{ $allsettings->pinterest_url }}" target="_blank">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                                @endif
                                @if($allsettings->instagram_url != '')
                                <li>
                                    <a href="{{ $allsettings->instagram_url }}" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                @endif
                            </ul>
						</div>
                </aside>
				<aside class="col-sm-3  col-md-3">
					<h5 class="title text-secondary">{{ Helper::translation(2023,$translate) }}</h5>
					<ul class="list-unstyled">
                        @if($allsettings->site_blog_display == 1)
						<li> <a class="text-dark" href="{{ URL::to('/blog') }}"> {{ Helper::translation(1978,$translate) }} </a></li>
                        @endif
						<li> <a class="text-dark" href="{{ URL::to('/register') }}"> {{ Helper::translation(2024,$translate) }} </a></li>
						<li> <a class="text-dark" href="{{ URL::to('/my-profile') }}"> {{ Helper::translation(2025,$translate) }} </a></li>
						<li> <a class="text-dark" href="{{ URL::to('/my-orders') }}"> {{ Helper::translation(2026,$translate) }} </a></li>
						<li> <a class="text-dark" href="{{ URL::to('/wishlist') }}"> {{ Helper::translation(2027,$translate) }} </a></li>
					</ul>
				</aside>
				<aside class="col-sm-3  col-md-3">
					<h5 class="title text-secondary">{{ Helper::translation(2028,$translate) }}</h5>
					<ul class="list-unstyled">
                        @foreach($footerpages['pages'] as $pages)
						<li> <a class="text-dark" href="{{ URL::to('/page/') }}/{{ $pages->page_slug }}"> {{ $pages->page_title }} </a></li>
						@endforeach
                        <li> <a class="text-dark" href="{{ URL::to('/contact') }}"> {{ Helper::translation(2012,$translate) }} </a></li>
					</ul>
				</aside>
                @if($allsettings->site_newsletter_display == 1)
				<aside class="col-sm-3">
					<article>
						<h5 class="title text-secondary">{{ Helper::translation(2029,$translate) }}</h5>
						<p class="pb-2 text-dark">{{ $allsettings->site_subscribe_text }}</p>
                        <div>
                        @if ($message = Session::get('news-success'))
                        <div class="alert alert-success" role="alert">
                           <a class="text-dark" href="#" class="close" data-dismiss="alert" aria-label="close"><span class="fa fa-close close" aria-hidden="true"></span></a>
                           {{ $message }}
                        </div>
                        @endif
                        @if ($message = Session::get('news-error'))
                        <div class="alert alert-danger" role="alert">
                         <a class="text-dark" href="#" class="close" data-dismiss="alert" aria-label="close"><span class="fa fa-close close" aria-hidden="true"></span></a>
                              {{ $message }}
                        </div>
                       @endif 
                     </div>
                     <form action="{{ route('newsletter') }}" id="footer_form" method="post" class="row-sm form-noborder" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-md-8 padding-off float-left">
                        <input class="form-control rounded-0" placeholder="{{ Helper::translation(2030,$translate) }}" type="text" name="news_email" data-bvalidator="required,email">
                        </div>
                        <div class="col-md-4 padding-off float-left">
                        <button type="submit" class="btn btn-block button-color rounded-0">{{ Helper::translation(2031,$translate) }} </button>
                        </div>
                     </form>
					</article>
				</aside>
                @endif
			</div> <!-- row.// -->
			<br> 
		</section>
	</div><!-- //container -->
</footer>
<div class="copyright">
   <div class="container pt-4">
      <div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12"> 
				<p class="text-black"><strong>@php echo $allsettings->site_copyright; @endphp {{ $allsettings->site_title }}</strong></p>
			</div>
            @if($allsettings->site_footer_payment != '')
			<div class="col-lg-6 col-md-6 col-sm-12">
				<p class="text-md-right ">
	               <img src="{{ url('/') }}/public/storage/settings/{{ $allsettings->site_footer_payment }}" alt="{{ $allsettings->site_title }}" class="payment-icon">
				</p>
			</div>
           @endif
       </div>
    </div>      
</div>
@if($allsettings->cookie_popup == 1)
<div class="alert text-center cookiealert" role="alert">
    {{ $allsettings->cookie_popup_text }}

    <button type="button" class="btn button-color btn-sm acceptcookies" aria-label="Close">
        {{ $allsettings->cookie_popup_button }}
    </button>
</div>
@endif