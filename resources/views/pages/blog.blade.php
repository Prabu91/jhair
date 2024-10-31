@extends('layouts.app')

@section('title', 'Blog')

@section('content')

<!-- start page-title -->
<section class="page-title">
	<div class="container">
		<div class="row">
			<div class="col col-xs-12">
				<h2>Blog</h2>
				<ol class="breadcrumb">
					<li><a href="/">Home</a></li>
					<li>Blog</li>
				</ol>
			</div>
		</div> <!-- end row -->
	</div> <!-- end container -->
</section>        
<!-- end page-title -->


<!-- start blog-pg-section -->
<section class="blog-pg-section section-padding">
	<div class="container">
		<div class="row">
			<div class="col col-md-9">
				<div class="blog-content">
					<div class="post format-standard-image">
						<div class="entry-media">
							<img src="{{ asset('images/blog/img-4.jpg') }}" alt>
						</div>
						<ul class="entry-meta">
							<li><a href="/blog/1">Admin</a></li>
							<li><a href="/blog/1">Feb 20, 2019</a></li>
							<li><a href="/blog/1">2 Comments</a></li>
						</ul>
						<h3><a href="/blog/1">As managing partner of  Invisor Consulting, he advises business leaders on strategic matters.</a></h3>
						<p>Collection of textile samples lay spread out on the table samsa was a travelling salesman and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright</p>
						<a href="/blog/1" class="more">Read More</a>
					</div>
					<div class="post format-standard">
						<ul class="entry-meta">
							<li><a href="/blog/1">Admin</a></li>
							<li><a href="/blog/1">Feb 20, 2019</a></li>
							<li><a href="/blog/1">2 Comments</a></li>
						</ul>
						<h3><a href="/blog/1">Extraordinary business results by developing authentic</a></h3>
						<p>Collection of textile samples lay spread out on the table samsa was a travelling salesman and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright</p>
						<a href="/blog/1" class="more">Read More</a>
					</div>
					<div class="post format-gallery">
						<div class="entry-media post-slider">
							<img src="{{ asset('images/blog/img-5.jpg') }}" alt>
							<img src="{{ asset('images/blog/img-4.jpg') }}" alt>
						</div>
						<ul class="entry-meta">
							<li><a href="/blog/1">Admin</a></li>
							<li><a href="/blog/1">Feb 20, 2019</a></li>
							<li><a href="/blog/1">2 Comments</a></li>
						</ul>
						<h3><a href="/blog/1">Consulting is a Seattle management consulting company</a></h3>
						<p>Collection of textile samples lay spread out on the table samsa was a travelling salesman and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright</p>
						<a href="/blog/1" class="more">Read More</a>
					</div>
					<div class="post format-quote">
						<ul class="entry-meta">
							<li><a href="/blog/1">Admin</a></li>
							<li><a href="/blog/1">Feb 20, 2019</a></li>
							<li><a href="/blog/1">2 Comments</a></li>
						</ul>
						<h3><a href="/blog/1">Planet through the application of Lean business</a></h3>
						<p>Collection of textile samples lay spread out on the table samsa was a travelling salesman and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright</p>
						<a href="/blog/1" class="more">Read More</a>
					</div>
					<div class="post format-video">
						<div class="entry-media video-holder">
							<img src="{{ asset('images/blog/img-6.jpg') }}" alt>
							<a href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1" class="video-btn" data-type="iframe">
								<i class="fi flaticon-video-player"></i>
							</a>
						</div>
						<ul class="entry-meta">
							<li><a href="/blog/1">Admin</a></li>
							<li><a href="/blog/1">Feb 20, 2019</a></li>
							<li><a href="/blog/1">2 Comments</a></li>
						</ul>
						<h3><a href="/blog/1">Thought leadership, and corporate strategies. </a></h3>
						<p>Collection of textile samples lay spread out on the table samsa was a travelling salesman and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright</p>
						<a href="/blog/1" class="more">Read More</a>
					</div>
					<div class="pagination-wrapper pagination-wrapper-left">
						<ul class="pg-pagination">
							<li>
								<a href="/blog/1" aria-label="Previous">
									<i class="fi flaticon-back"></i>
								</a>
							</li>
							<li class="active"><a href="/blog/1">1</a></li>
							<li><a href="/blog/1">2</a></li>
							<li><a href="/blog/1">3</a></li>
							<li>
								<a href="/blog/1" aria-label="Next">
									<i class="fi flaticon-next"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col col-md-3">
				<div class="blog-sidebar">
					<div class="widget search-widget">
						<h3>Search</h3>
						<form>
							<div>
								<input type="text" class="form-control" placeholder="Search Post..">
								<button type="submit"><i class="ti-search"></i></button>
							</div>
						</form>
					</div>
					<div class="widget about-widget">
						<h3>About us</h3>
						<div class="img-holder">
							<img src="{{ asset('images/blog/about-widget.jpg') }}" alt>
						</div>
						<p>Her lower arm towards the viewer. Gregor then turned to look out the indow at the dull weather.</p>
						<a href="/blog/1">More about us</a>
					</div>
					<div class="widget category-widget">
						<h3>Categories</h3>
						<ul>
							<li><a href="/blog/1">Business <span>(2)</span></a></li>
							<li><a href="/blog/1">Market Research <span>(3)</span></a></li>
							<li><a href="/blog/1">Investment Planning <span>(7)</span></a></li>
							<li><a href="/blog/1">Corporate Business <span>(5)</span></a></li>
							<li><a href="/blog/1">Consulting <span>(10)</span></a></li>
						</ul>
					</div>
					<div class="widget recent-post-widget">
						<h3>Recent post</h3>
						<div class="posts">
							<div class="post">
								<div class="img-holder">
									<img src="{{ asset('images/recent-posts/img-1.jpg') }}" alt>
								</div>
								<div class="details">
									<h4><a href="/blog/1">Gregor then turned to look out the window</a></h4>
									<span class="date">Feb 1 2019</span>
								</div>
							</div>
							<div class="post">
								<div class="img-holder">
									<img src="{{ asset('images/recent-posts/img-2.jpg') }}" alt>
								</div>
								<div class="details">
									<h4><a href="/blog/1">His room, a proper human room although a little too</a></h4>
									<span class="date">Feb 1 2019</span>
								</div>
							</div>
							<div class="post">
								<div class="img-holder">
									<img src="{{ asset('images/recent-posts/img-3.jpg') }}" alt>
								</div>
								<div class="details">
									<h4><a href="/blog/1">Samples lay spread out on the table</a></h4>
									<span class="date">Feb 1 2019</span>
								</div>
							</div>
						</div>
					</div>
					<div class="widget tag-widget">
						<h3>Tags</h3>
						<ul>
							<li><a href="/blog/1">Business</a></li>
							<li><a href="/blog/1">Consulting</a></li>
							<li><a href="/blog/1">Advertising</a></li>
							<li><a href="/blog/1">Analysis</a></li>
							<li><a href="/blog/1">Research</a></li>
							<li><a href="/blog/1">Corporate</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end container -->
</section>
<!-- end blog-pg-section -->


@endsection
