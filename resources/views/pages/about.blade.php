@extends('layouts.app')

@section('title', 'About')

@section('content')
	<!-- start page-title -->
	<section class="page-title">
		<div class="container">
			<div class="row">
				<div class="col col-xs-12">
					<h2>About us</h2>
					<ol class="breadcrumb">
						<li><a href="/">Home</a></li>
						<li>About us</li>
					</ol>
				</div>
			</div> <!-- end row -->
		</div> <!-- end container -->
	</section>        
	<!-- end page-title -->


	<!-- start mission-vision-section -->
	<section class="mission-vision-section section-padding">
		<div class="container">
			<div class="row">
				<div class="col col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
					<div class="title-area">
						<h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae itaque dicta reiciendis mollitia ut consectetur repudiandae illum, totam obcaecati dolorum a pariatur aliquid numquam molestias quisquam odio perferendis, non impedit.</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-xs-12">
					<div class="mission-vision-grids clearfix">
						<div class="grid">
							<div class="img-holder">
								<img src="{{ asset('images/about/img-1.jpg') }}" alt>
							</div>
							<h3>Our mission</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae itaque dicta reiciendis mollitia ut consectetur repudiandae illum, totam obcaecati dolorum a pariatur aliquid numquam molestias quisquam odio perferendis, non impedit.</p>
						</div>
						<div class="grid">
							<div class="img-holder">
								<img src="{{ asset('images/about/img-2.jpg') }}" alt>
							</div>
							<h3>Our vision</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae itaque dicta reiciendis mollitia ut consectetur repudiandae illum, totam obcaecati dolorum a pariatur aliquid numquam molestias quisquam odio perferendis, non impedit.</p>
						</div>
						<div class="grid">
							<div class="img-holder">
								<img src="{{ asset('images/about/img-3.jpg') }}" alt>
							</div>
							<h3>Our strategies</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae itaque dicta reiciendis mollitia ut consectetur repudiandae illum, totam obcaecati dolorum a pariatur aliquid numquam molestias quisquam odio perferendis, non impedit.</p>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- end container -->
	</section>
	<!-- end mission-vision-section -->


	<!-- start experience-section -->
	<section class="experience-section">
		<div class="content-area">
			<div class="left-col"></div>
			<div class="right-col">
				<h2>Why we are the best choice for <br>your next project!</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae itaque dicta reiciendis mollitia ut consectetur repudiandae illum, totam obcaecati dolorum a pariatur aliquid numquam molestias quisquam odio perferendis, non impedit.</p>
				<ul>
					<li><i class="ti-check"></i>peacefully between its four familiar walls a collection of textile samples</li>
					<li><i class="ti-check"></i>Familiar walls a collection of textile samples</li>
					<li><i class="ti-check"></i>peaacefully between its four familiar walls a collection of textile samples</li>
					<li><i class="ti-check"></i>Between its four familiar walls a collection of textile samples</li>
				</ul>
				<div class="skills">
					<div class="skill">
						<h6>Marketing</h6>
						<div class="progress">
							<div class="progress-bar" data-percent="85"></div>
						</div>
					</div>
					<div class="skill">
						<h6>Consulting</h6>
						<div class="progress">
							<div class="progress-bar" data-percent="98"></div>
						</div>
					</div>
					<div class="skill">
						<h6>Development</h6>
						<div class="progress">
							<div class="progress-bar" data-percent="92"></div>
						</div>
					</div>
					<div class="skill">
						<h6>Branding</h6>
						<div class="progress">
							<div class="progress-bar" data-percent="92"></div>
						</div>
					</div>
				</div>                        
			</div>
		</div> <!-- end content-area -->
	</section>
	<!-- end experience-section -->


	<!-- start testimonials-section-s2 -->
	<section class="testimonials-section-s2 section-padding">
		<h2 class="hidden">Testimonials</h2>
		<div class="container">
			<div class="row">
				<div class="col col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
					<div class="testimonials-area">
						<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae itaque dicta reiciendis mollitia ut consectetur repudiandae illum, totam obcaecati dolorum a pariatur aliquid numquam molestias quisquam odio perferendis, non impedit.</p>
						<span class="quoter">Thomas Calvin</span>
					</div>
				</div>
			</div>
		</div> <!-- end container -->
	</section>
	<!-- end testimonials-section-s2 -->


	<!-- start projects-sections-s2 -->
	<section class="projects-sections-s2 about-pg-project-section section-padding">
		<div class="container">
			<div class="row">
				<div class="col col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
					<div class="section-title-s3">
						<span>Projects</span>
						<h2>Recent Projects</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae itaque dicta reiciendis mollitia ut consectetur repudiandae illum, totam obcaecati dolorum a pariatur aliquid numquam molestias quisquam odio perferendis, non impedit.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col col-xs-12">
					<div class="project-grids clearfix">
						<div class="grid">
							<div class="img-holder">
								<img src="{{ asset('images/projects/img-5.jpg') }}" alt>
							</div>
							<div class="hover-content">
								<div class="top-link">
									<a href="#"><i class="fi flaticon-next"></i></a>
								</div>
								<div class="details">
									<h3>Business consulting</h3>
									<p class="cat">Maketing</p>
								</div>
							</div>
						</div>
						<div class="grid">
							<div class="img-holder">
								<img src="{{ asset('images/projects/img-6.jpg') }}" alt>
							</div>
							<div class="hover-content">
								<div class="top-link">
									<a href="#"><i class="fi flaticon-next"></i></a>
								</div>
								<div class="details">
									<h3>Business consulting</h3>
									<p class="cat">Maketing</p>
								</div>
							</div>
						</div>
						<div class="grid">
							<div class="img-holder">
								<img src="{{ asset('images/projects/img-7.jpg') }}" alt>
							</div>
							<div class="hover-content">
								<div class="top-link">
									<a href="#"><i class="fi flaticon-next"></i></a>
								</div>
								<div class="details">
									<h3>Business consulting</h3>
									<p class="cat">Maketing</p>
								</div>
							</div>
						</div>
						<div class="grid">
							<div class="img-holder">
								<img src="{{ asset('images/projects/img-8.jpg') }}" alt>
							</div>
							<div class="hover-content">
								<div class="top-link">
									<a href="#"><i class="fi flaticon-next"></i></a>
								</div>
								<div class="details">
									<h3>Business consulting</h3>
									<p class="cat">Maketing</p>
								</div>
							</div>
						</div>
						<div class="grid">
							<div class="img-holder">
								<img src="{{ asset('images/projects/img-9.jpg') }}" alt>
							</div>
							<div class="hover-content">
								<div class="top-link">
									<a href="#"><i class="fi flaticon-next"></i></a>
								</div>
								<div class="details">
									<h3>Business consulting</h3>
									<p class="cat">Maketing</p>
								</div>
							</div>
						</div>
						<div class="grid">
							<div class="img-holder">
								<img src="{{ asset('images/projects/img-10.jpg') }}" alt>
							</div>
							<div class="hover-content">
								<div class="top-link">
									<a href="#"><i class="fi flaticon-next"></i></a>
								</div>
								<div class="details">
									<h3>Business consulting</h3>
									<p class="cat">Maketing</p>
								</div>
							</div>
						</div>
					</div>
					<div class="all-projects">
						<a href="#" class="v-al-p">View All Projects <i class="fi flaticon-next"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end projects-sections-s2 -->


	<!-- start team-section -->
	<section class="team-section section-padding">
		<div class="container">
			<div class="row">
				<div class="col col-md-6">
					<div class="section-title-s2">
						<span>Team members</span>
						<h2>See our passionate <br>team members</h2>
					</div>                    
				</div>
				<div class="col col-md-6">
					<div class="title-text">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae itaque dicta reiciendis mollitia ut consectetur repudiandae illum, totam obcaecati dolorum a pariatur aliquid numquam molestias quisquam odio perferendis, non impedit.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-xs-12">
					<div class="team-grids clearfix">
						<div class="grid">
							<div class="img-holder">
								<img src="{{ asset('images/team/img-1.jpg') }}" alt>
							</div>
							<div class="details">
								<h5>Morkal Akunda</h5>
								<span>Designer</span>
							</div>
						</div>
						<div class="grid">
							<div class="img-holder">
								<img src="{{ asset('images/team/img-2.jpg') }}" alt>
							</div>
							<div class="details">
								<h5>Tiptop Jonathon</h5>
								<span>Developer</span>
							</div>
						</div>
						<div class="grid">
							<div class="img-holder">
								<img src="{{ asset('images/team/img-3.jpg') }}" alt>
							</div>
							<div class="details">
								<h5>Aleon Dela</h5>
								<span>Programmer</span>
							</div>
						</div>
						<div class="grid">
							<div class="img-holder">
								<img src="{{ asset('images/team/img-4.jpg') }}" alt>
							</div>
							<div class="details">
								<h5>Beila kelar</h5>
								<span>Designer</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- end container -->
	</section>
	<!-- end team-section -->


	<section class="partners-section">
		<h2 class="hidden">Partners</h2>
		<div class="container">
			<div class="row">
				<div class="col col-xs-12">
					<div class="partner-grids partners-slider">
						<div class="grid">
							<img src="{{ asset('images/partners/img-1.png') }}" alt>
						</div>
						<div class="grid">
							<img src="{{ asset('images/partners/img-2.png' )}}" alt>
						</div>
						<div class="grid">
							<img src="{{ asset('images/partners/img-3.png') }}" alt>
						</div>
						<div class="grid">
							<img src="{{ asset('images/partners/img-4.png') }}" alt>
						</div>
						<div class="grid">
							<img src="{{ asset('images/partners/img-2.png' )}}" alt>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- end container -->
	</section>  


@endsection