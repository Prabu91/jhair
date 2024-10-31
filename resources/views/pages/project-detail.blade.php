@extends('layouts.app')

@section('title', 'project-detail')

@section('content')

<!-- start page-title -->
<section class="page-title">
	<div class="container">
		<div class="row">
			<div class="col col-xs-12">
				<h2>Project single</h2>
				<ol class="breadcrumb">
					<li><a href="/">Home</a></li>
					<li>Project single</li>
				</ol>
			</div>
		</div> <!-- end row -->
	</div> <!-- end container -->
</section>        
<!-- end page-title -->


<!-- start project-sigle-section -->
<section class="project-sigle-section section-padding">
	<div class="container">
		<div class="row">
			<div class="col col-xs-12">
				<div class="project-single-content">
					<div class="img-holder">
						<img src="{{ asset('images/project-single/img-1.jpg') }}" alt>
					</div>
					<div class="content-area">
						<div class="project-info">
							<ul>
								<li><span>Client:</span> Themegeniuslab</li>
								<li><span>Location:</span> Dreem city hold street</li>
								<li><span>Status:</span> Completed</li>
								<li><span>Duration:</span> 1 Month</li>
								<li><span>Tags:</span> Consulting, Business</li>
							</ul>
						</div>
						<h2>Business consulting project on drem city</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsam tempore quidem alias cumque ut maxime velit, nulla nobis laboriosam. Facilis animi autem et aut nobis officia totam omnis quaerat?</p>
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit nesciunt assumenda culpa explicabo earum, nostrum reiciendis quam sunt nobis unde, placeat aliquam dolore nisi rerum quibusdam architecto recusandae necessitatibus similique?</p>

						<div class="challange-solution-section">
							<div class="panel-group theme-accordion-s1" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse-1" aria-expanded="true">The Challange Was</a>
									</div>
									<div id="collapse-1" class="panel-collapse collapse in">
										<div class="panel-body">
											<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi dicta corrupti eaque temporibus. Ea, rerum laboriosam? Debitis, vero. Ut officia quae quas sit optio fugiat distinctio tempore minima consequuntur perferendis?</p>
											<ul>
												<li><i class="ti-check"></i>spread out on the table samsa was a travelling salesman</li>
												<li><i class="ti-check"></i>human room although a little too small</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-2">Our Solutions Was</a>
									</div>
									<div id="collapse-2" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem officia omnis delectus illo porro reiciendis aspernatur suscipit maiores et mollitia? Labore autem, alias ullam recusandae eius dignissimos magni quo nostrum.</p>
											<ul>
												<li><i class="ti-check"></i>spread out on the table samsa was a travelling salesman</li>
												<li><i class="ti-check"></i>human room although a little too small</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="prev-next-project">
							<div>
								<a href="#">
									<div class="icon">
										<i class="fi flaticon-back"></i>
									</div>
									<span>Previous project</span>
									<h5>Busines consulting Project</h5>
								</a>
							</div>
							<div>
								<a href="#">
									<div class="icon">
										<i class="fi flaticon-next"></i>
									</div>
									<span>Next project</span>
									<h5>Busines consulting Project</h5>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end container -->
</section>
<!-- end project-sigle-section -->


@endsection
