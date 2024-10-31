@extends('layouts.app')

@section('title', 'Blog')

@section('content')

<!-- start page-title -->
<section class="page-title">
	<div class="container">
		<div class="row">
			<div class="col col-xs-12">
				<h2>Projects</h2>
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Projects</li>
				</ol>
			</div>
		</div> <!-- end row -->
	</div> <!-- end container -->
</section>        
<!-- end page-title -->


<!-- start projects-section -->
<section class="projects-section projects-pg-section section-padding">
	<div class="content-area">
		<div class="project-grids projects-slider">
			<div class="grid">
				<div class="img-holder">
					<img src="assets/images/projects/img-1.jpg" alt>
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
					<img src="assets/images/projects/img-2.jpg" alt>
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
					<img src="assets/images/projects/img-3.jpg" alt>
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
					<img src="assets/images/projects/img-4.jpg" alt>
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
	</div>
</section>
<!-- end projects-section -->


@endsection
