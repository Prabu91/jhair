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
						<p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather</p>
						<p>His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table samsa was a travelling salesman</p>

						<div class="challange-solution-section">
							<div class="panel-group theme-accordion-s1" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse-1" aria-expanded="true">The Challange Was</a>
									</div>
									<div id="collapse-1" class="panel-collapse collapse in">
										<div class="panel-body">
											<p>His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table samsa was a travelling salesman</p>
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
											<p>His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table samsa was a travelling salesman</p>
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
