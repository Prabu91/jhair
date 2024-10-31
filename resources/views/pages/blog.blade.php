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
					<li><a href="index.html">Home</a></li>
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
							<img src="assets/images/blog/img-4.jpg" alt>
						</div>
						<ul class="entry-meta">
							<li><a href="#">Admin</a></li>
							<li><a href="#">Feb 20, 2019</a></li>
							<li><a href="#">2 Comments</a></li>
						</ul>
						<h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, ea?</a></h3>
						<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad dolorem libero possimus architecto fugiat consectetur illo, sequi voluptates blanditiis est nesciunt enim consequatur commodi exercitationem earum accusantium tempore iure! Vitae?</p>
						<a href="#" class="more">Read More</a>
					</div>
					<div class="post format-standard">
						<ul class="entry-meta">
							<li><a href="#">Admin</a></li>
							<li><a href="#">Feb 20, 2019</a></li>
							<li><a href="#">2 Comments</a></li>
						</ul>
						<h3><a href="#">Lorem ipsum dolor sit amet consectetur.</a></h3>
						<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus atque ipsa delectus, corporis modi totam? Voluptatem accusantium dignissimos ipsam rem, atque, deleniti aliquam totam illum eum et minima aperiam repellendus?</p>
						<a href="#" class="more">Read More</a>
					</div>
					<div class="post format-gallery">
						<div class="entry-media post-slider">
							<img src="assets/images/blog/img-5.jpg" alt>
							<img src="assets/images/blog/img-4.jpg" alt>
						</div>
						<ul class="entry-meta">
							<li><a href="#">Admin</a></li>
							<li><a href="#">Feb 20, 2019</a></li>
							<li><a href="#">2 Comments</a></li>
						</ul>
						<h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea eveniet porro debitis eos vel nesciunt deserunt, nostrum, rerum, maxime repudiandae provident officia cumque iure eligendi blanditiis nisi error inventore aut?</p>
						<a href="#" class="more">Read More</a>
					</div>
					<div class="post format-quote">
						<ul class="entry-meta">
							<li><a href="#">Admin</a></li>
							<li><a href="#">Feb 20, 2019</a></li>
							<li><a href="#">2 Comments</a></li>
						</ul>
						<h3><a href="#">Lorem ipsum dolor sit amet consectetur.</a></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam magnam cumque nostrum incidunt. Hic in magni aperiam consequuntur, harum alias illo aliquam. Expedita, nihil quidem minima commodi aliquam itaque sint!</p>
						<a href="#" class="more">Read More</a>
					</div>
					<div class="post format-video">
						<div class="entry-media video-holder">
							<img src="assets/images/blog/img-6.jpg" alt>
							<a href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1" class="video-btn" data-type="iframe">
								<i class="fi flaticon-video-player"></i>
							</a>
						</div>
						<ul class="entry-meta">
							<li><a href="#">Admin</a></li>
							<li><a href="#">Feb 20, 2019</a></li>
							<li><a href="#">2 Comments</a></li>
						</ul>
						<h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing.</a></h3>
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque facilis necessitatibus consequatur eaque repellendus, corrupti eveniet quasi, dicta reiciendis nobis sequi voluptatem porro qui veritatis, molestias laborum natus vitae? Doloribus!</p>
						<a href="#" class="more">Read More</a>
					</div>
					<div class="pagination-wrapper pagination-wrapper-left">
						<ul class="pg-pagination">
							<li>
								<a href="#" aria-label="Previous">
									<i class="fi flaticon-back"></i>
								</a>
							</li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li>
								<a href="#" aria-label="Next">
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
							<img src="assets/images/blog/about-widget.jpg" alt>
						</div>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam cum sequi repellat id porro amet, molestias assumenda alias fugiat magni!</p>
						<a href="#">More about us</a>
					</div>
					<div class="widget category-widget">
						<h3>Categories</h3>
						<ul>
							<li><a href="#">Business <span>(2)</span></a></li>
							<li><a href="#">Market Research <span>(3)</span></a></li>
							<li><a href="#">Investment Planning <span>(7)</span></a></li>
							<li><a href="#">Corporate Business <span>(5)</span></a></li>
							<li><a href="#">Consulting <span>(10)</span></a></li>
						</ul>
					</div>
					<div class="widget recent-post-widget">
						<h3>Recent post</h3>
						<div class="posts">
							<div class="post">
								<div class="img-holder">
									<img src="assets/images/recent-posts/img-1.jpg" alt>
								</div>
								<div class="details">
									<h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
									<span class="date">Feb 1 2019</span>
								</div>
							</div>
							<div class="post">
								<div class="img-holder">
									<img src="assets/images/recent-posts/img-2.jpg" alt>
								</div>
								<div class="details">
									<h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
									<span class="date">Feb 1 2019</span>
								</div>
							</div>
							<div class="post">
								<div class="img-holder">
									<img src="assets/images/recent-posts/img-3.jpg" alt>
								</div>
								<div class="details">
									<h4><a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing.</a></h4>
									<span class="date">Feb 1 2019</span>
								</div>
							</div>
						</div>
					</div>
					<div class="widget tag-widget">
						<h3>Tags</h3>
						<ul>
							<li><a href="#">Business</a></li>
							<li><a href="#">Consulting</a></li>
							<li><a href="#">Advertising</a></li>
							<li><a href="#">Analysis</a></li>
							<li><a href="#">Research</a></li>
							<li><a href="#">Corporate</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end container -->
</section>
<!-- end blog-pg-section -->


@endsection
