@extends('layouts.app')

@section('title', 'Blog-detail')

@section('content')

<!-- start page-title -->
<section class="page-title">
	<div class="container">
		<div class="row">
			<div class="col col-xs-12">
				<h2>Blog single</h2>
				<ol class="breadcrumb">
					<li><a href="/">Home</a></li>
					<li>Blog single</li>
				</ol>
			</div>
		</div> <!-- end row -->
	</div> <!-- end container -->
</section>        
<!-- end page-title -->


<!-- start blog-single-section -->
<section class="blog-single-section section-padding">
	<div class="container">
		<div class="row">
			<div class="col col-md-9">
				<div class="blog-content">
					<div class="post format-standard-image">
						<div class="entry-media">
							<img src="{{ asset('images/blog/img-4.jpg') }}" alt>
						</div>
						<ul class="entry-meta">
							<li><a href="#">Admin</a></li>
							<li><a href="#">Feb 20, 2019</a></li>
							<li><a href="#">2 Comments</a></li>
						</ul>
						<h2>Lorem ipsum dolor sit amet consectetur.</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam aliquam ducimus mollitia doloremque dolorum saepe quisquam corrupti, beatae accusamus ut blanditiis est distinctio perferendis debitis, quos porro reiciendis. Vel, atque!</p>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam aliquam ducimus mollitia doloremque dolorum saepe quisquam corrupti, beatae accusamus ut blanditiis est distinctio perferendis debitis, quos porro reiciendis. Vel, atque!</p>
						<blockquote>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit aliquam eum eaque quibusdam ab quis dolores, praesentium dolorem hic amet nostrum? Maxime nostrum maiores quae ut. Ducimus totam quasi dignissimos.
							<span class="quoter">- Jhone dow</span>
						</blockquote>
						<h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ab dolorem aperiam tempore, asperiores harum culpa id rem molestiae quas sit eius, reprehenderit assumenda aspernatur! Blanditiis, rerum! Omnis, minima distinctio!</p>
					</div>

					<div class="tag-share">
						<div class="tag">
							Tags: &nbsp;
							<ul>
								<li><a href="#">Business</a></li>
								<li><a href="#">Consutling</a></li>
								<li><a href="#">Maket research</a></li>
								<li><a href="#">Marketing</a></li>
							</ul>
						</div>
						<div class="share">
							Share: &nbsp;
							<ul>
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-twitter-alt"></i></a></li>
								<li><a href="#"><i class="ti-linkedin"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
					</div> <!-- end tag-share -->

					<div class="author-box">
						<div class="author-avatar">
							<a href="#" target="_blank"><img src="{{ asset('images/blog-details/author.jpg') }}" alt></a>
						</div>
						<div class="author-content">
							<a href="#" class="author-name">Jhon dow</a>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam sequi incidunt ullam perferendis voluptate unde, beatae repellat, accusamus quas officia reprehenderit molestiae nam. Quam fugit cupiditate sapiente nemo vero rem.</p>
							<div class="socials">
								<ul class="social-link">
									<li><a href="#"><i class="ti-facebook"></i></a></li>
									<li><a href="#"><i class="ti-twitter-alt"></i></a></li>
									<li><a href="#"><i class="ti-linkedin"></i></a></li>
									<li><a href="#"><i class="ti-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div> <!-- end author-box -->

					<div class="more-posts">
						<div class="previous-post">
							<a href="#">
								<span class="post-control-link"><i class="ti-arrow-circle-left"> </i>Previous post</span>
							</a>
						</div>
						<div class="next-post">
							<a href="0">
								<span class="post-control-link">Next post <i class="ti-arrow-circle-right"></i></span>
							</a>
						</div>
					</div> <!-- end more-posts -->

					<div class="comments-area">
						<div class="comments-section">
							<h3 class="comments-title">Comments</h3>
							<ol class="comments">
								<li class="comment even thread-even depth-1" id="comment-1">
									<div id="div-comment-1">
										<div class="comment-theme">
											<div class="comment-image"><img src="{{ asset('images/blog-details/comments-author/img-1.jpg') }}" alt></div>
										</div>
										<div class="comment-main-area">
											<div class="comment-wrapper">
												<div class="comments-meta">
													<h4>Dow <span class="comments-date">says Oct 15, 2018 at 11:00</span></h4>
												</div>
												<div class="comment-area">
													<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam sequi incidunt ullam perferendis voluptate unde, beatae repellat, accusamus quas officia reprehenderit molestiae nam. Quam fugit cupiditate sapiente nemo vero rem.</p>
													<div class="comments-reply">
														<a class="comment-reply-link" href="#"><span>Reply</span></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<ul class="children">
										<li class="comment">
											<div>
												<div class="comment-theme">
													<div class="comment-image"><img src="{{ asset('images/blog-details/comments-author/img-2.jpg') }}" alt></div>
												</div>
												<div class="comment-main-area">
													<div class="comment-wrapper">
														<div class="comments-meta">
															<h4>Dow <span class="comments-date">says Oct 15, 2018 at 11:00</span></h4>
														</div>
														<div class="comment-area">
															<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam sequi incidunt ullam perferendis voluptate unde, beatae repellat, accusamus quas officia reprehenderit molestiae nam. Quam fugit cupiditate sapiente nemo vero rem.</p>
															<div class="comments-reply">
																<a  class="comment-reply-link" href="#"><span>Reply</span></a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<ul>
												<li class="comment">
													<div>
														<div class="comment-theme">
															<div class="comment-image"><img src="{{ asset('images/blog-details/comments-author/img-3.jpg') }}" alt></div>
														</div>
														<div class="comment-main-area">
															<div class="comment-wrapper">
																<div class="comments-meta">
																	<h4>Dow <span class="comments-date">says Oct 15, 2018 at 11:00</span></h4>
																</div>
																<div class="comment-area">
																	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam sequi incidunt ullam perferendis voluptate unde, beatae repellat, accusamus quas officia reprehenderit molestiae nam. Quam fugit cupiditate sapiente nemo vero rem.</p>
																	<div class="comments-reply">
																		<a  class="comment-reply-link" href="#"><span>Reply</span></a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</li>
									</ul>
								</li>

								<li class="comment">
									<div>
										<div class="comment-theme">
											<div class="comment-image"><img src="{{ asset('images/blog-details/comments-author/img-1.jpg') }}" alt></div>
										</div>
										<div class="comment-main-area">
											<div class="comment-wrapper">
												<div class="comments-meta">
													<h4>Dow <span class="comments-date">says Oct 15, 2018 at 11:00</span></h4>
												</div>
												<div class="comment-area">
													<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam sequi incidunt ullam perferendis voluptate unde, beatae repellat, accusamus quas officia reprehenderit molestiae nam. Quam fugit cupiditate sapiente nemo vero rem.</p>
													<div class="comments-reply">
														<a  class="comment-reply-link" href="#"><span>Reply</span></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
							</ol>
						</div> <!-- end comments-section -->

						<div class="comment-respond">
							<h3 class="comment-reply-title">Post Comments</h3>
							<form method="post" id="commentform" class="comment-form">
								<div class="form-textarea">
									<textarea id="comment" placeholder="Write Your Comments..."></textarea>
								</div>
								<div class="form-inputs">
									<input placeholder="Website" type="url">
									<input placeholder="Name" type="text">
									<input placeholder="Email" type="email">
								</div>
								<div class="form-submit">
									<input id="submit" value="Post Comment" type="submit">
								</div>
							</form>
						</div>
					</div> <!-- end comments-area -->
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
									<img src="{{ asset('images/recent-posts/img-1.jpg') }}" alt>
								</div>
								<div class="details">
									<h4><a href="#">Lorem ipsum dolor sit amet consectetur.</a></h4>
									<span class="date">Feb 1 2019</span>
								</div>
							</div>
							<div class="post">
								<div class="img-holder">
									<img src="{{ asset('images/recent-posts/img-2.jpg') }}" alt>
								</div>
								<div class="details">
									<h4><a href="#">Lorem ipsum dolor sit amet consectetur.</a></h4>
									<span class="date">Feb 1 2019</span>
								</div>
							</div>
							<div class="post">
								<div class="img-holder">
									<img src="{{ asset('images/recent-posts/img-3.jpg') }}" alt>
								</div>
								<div class="details">
									<h4><a href="#">Lorem ipsum dolor sit amet consectetur.</a></h4>
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
<!-- end blog-single-section -->


@endsection
