@extends('layouts.master')

@section('content')

		<header id="gtco-header" class="gtco-cover gtco-cover-xs gtco-inner" role="banner">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-left">
						<div class="display-t">
							<div class="display-tc">
								<div class="row">
									<div class="col-md-8 animate-box">
										<h1 class="no-margin">Contact</h1>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia facilis, accusamus iusto animi.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- END #gtco-header -->

		

		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 gtco-heading text-center">
						<h2>Get In Touch</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat enim et urna sagittis, rhoncus euismod erat tincidunt. Donec tincidunt volutpat erat.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<form action="#">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" id="name">
							</div>
							<div class="form-group">
								<label for="name">Email</label>
								<input type="text" class="form-control" id="email">
							</div>
							<div class="form-group">
								<label for="message"></label>
								<textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn btn-special" value="Send Message">
							</div>
						</form>
					</div>
					<div class="col-md-5 col-md-push-1">
						<div class="gtco-contact-info">
							<h3>Our Address</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<ul >
								<li class="address">198 West 21th Street, Suite 721 New York NY 10016</li>
								<li class="phone"><a href="tel://1234567890">1235 2355 980</a></li>
								<li class="email"><a href="#">info@yoursite.com</a></li>
								<li class="url"><a href="#">www.yoursite.com</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END .gtco-services -->

		
		<div id="map"></div>
		

		<footer id="gtco-footer" class="gtco-section" role="contentinfo">
			<div class="gtco-container">
				<div class="row row-pb-md">
					<div class="col-md-8 col-md-offset-2 gtco-cta text-center">
						<h3>We Love To Talk About Your Business</h3>
						<p><a href="#" class="btn btn-white btn-outline">Contact Us</a></p>
					</div>
				</div>
				<div class="row row-pb-md">
					<div class="col-md-4 gtco-widget gtco-footer-paragraph">
						<h3>Cube</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat enim et urna sagittis, rhoncus euismod.</p>
					</div>
					<div class="col-md-4 gtco-footer-link">
						<div class="row">
							<div class="col-md-6">
								<ul class="gtco-list-link">
									<li><a href="#">Home</a></li>
									<li><a href="#">Features</a></li>
									<li><a href="#">Products</a></li>
									<li><a href="#">Testimonial</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
							<div class="col-md-6">
								<p>
									<a href="tel://1234567890">+1 234 4565 2342</a> <br>
									<a href="#">info@domain.com</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 gtco-footer-subscribe">
						<form class="form-inline">
						  <div class="form-group">
						    <label class="sr-only" for="exampleInputEmail3">Email address</label>
						    <input type="email" class="form-control" id="" placeholder="Email">
						  </div>
						  <button type="submit" class="btn btn-primary">Send</button>
						</form>
					</div>
				</div>
			</div>
			<div class="gtco-copyright">
				<div class="gtco-container">
					<div class="row">
						<div class="col-md-6 text-left">
							<p><small>&copy; 2016 Free HTML5. All Rights Reserved. </small></p>
						</div>
						<div class="col-md-6 text-right">
							<p><small>Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://pixeden.com/" target="_blank">Pixeden</a> &amp; <a href="http://unsplash.com" target="_blank">Unsplash</a></small> </p>
						</div>
					</div>
				</div>
			</div>
		</footer>

@endsection