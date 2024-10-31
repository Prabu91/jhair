@extends('layouts.app')

@section('title', 'Contacts')

@section('content')

<!-- start page-title -->
<section class="page-title">
	<div class="container">
		<div class="row">
			<div class="col col-xs-12">
				<h2>Contact</h2>
				<ol class="breadcrumb">
					<li><a href="/">Home</a></li>
					<li>Contact</li>
				</ol>
			</div>
		</div> <!-- end row -->
	</div> <!-- end container -->
</section>        
<!-- end page-title -->


<!-- start contact-pg-section -->
<section class="contact-pg-section section-padding">
	<div class="container">
		<div class="row">
			<div class="col col-md-8 col-md-offset-2">
				<div class="section-title-s3">
					<span>Contact us</span>
					<h2>Drop us a line</h2>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col col-xs-12">
				<div class="contact-form">
					<form method="post" class="contact-validation-active" id="contact-form-main">
						<div class="one-third-col">
							<input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
						</div>
						<div class="one-third-col">
							<input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
						</div>
						<div class="one-third-col">
							<input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone">
						</div>
						<div>
							<textarea class="form-control" name="note"  id="note" placeholder="Case Description..."></textarea>
						</div>
						<div class="submit-btn-wrapper">
							<button type="submit" class="theme-btn-s2">Submit now</button>
							<div id="loader">
								<i class="ti-reload"></i>
							</div>
						</div>
						<div class="clearfix error-handling-messages">
							<div id="success">Thank you</div>
							<div id="error"> Error occurred while sending email. Please try again later. </div>
						</div>
					</form>
				</div>
				<div class="contact-info clearfix">
					<div>
						<div class="icon">
							<i class="ti-email"></i>
						</div>
						<h5>Email</h5>
						<p>emailexample@demo.com</p>
					</div>
					<div>
						<div class="icon">
							<i class="ti-mobile"></i>
						</div>
						<h5>Phone</h5>
						<p>32415(12456)2453</p>
					</div>
					<div>
						<div class="icon">
							<i class="ti-location-arrow"></i>
						</div>
						<h5>Address</h5>
						<p>emotion street melbordl Astralia</p>
					</div>
				</div>

				<div class="contact-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147703055!2d-74.11976314309273!3d40.69740344223377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1547528325671" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end contact-pg-section -->


@endsection
