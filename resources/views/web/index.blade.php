@extends('web.layouts.master')
@section('title')
Hulas Remittance
@endsection
@section('content')
	<section id="banner">
		<div class=" first-parallax">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 banner-container parallax-window">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 company-name">
					<h1>HULAS</h1>
					<h1 class="margin-left">Remittance</h1>
					<p class="quote">
						"a must trusted, secure<br/>
						<span class="p-margin-left">simple and flexible"</span>
					</p>
					<center>
						<a class="btn btn-default btn-outline btn-circle btn-banner collapsed signin">Sign Un
							<img src="{{url('assets/front/images/loginicon.png')}}">
						</a>
						<a class="btn btn-default btn-outline btn-circle btn-banner collapsed ">Learn More
							<i class="fa fa-angle-down fa-3x " aria-hidden="true" ></i>
						</a>
					</center>
				</div>
				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 banner-image pull-right">
					<img src="{{url('assets/front/images/banner1.png')}}" class="img-responsive">
				</div>
			</div>
		</div>
	</section>
	<style>
	.parallax-window{
		background: transparent;
	}
	</style>
	<section id="forex">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 div-forex">
				<span class="pull-left">
					<h1>FOREX</h1>
				</span>
				<!-- <marquee>
					<p>US Dollar: Rs107 ,  Eu Euro: Rs 119 , UK Pound: Rs 139, Swiss Franc: Rs 110, AUD: Rs 80 , CAD : Rs 83</p>
				</marquee> -->
				<marquee behavior="scroll" scrollamount="3" direction="left"  class="pull-right marquee">
					US Dollar: Rs107 ,  Eu Euro: Rs 119 , UK Pound: Rs 139, Swiss Franc: Rs 110, AUD: Rs 80 , CAD : Rs 83,US Dollar: Rs107 ,  Eu Euro: Rs 119 , UK Pound: Rs 139, Swiss Franc: Rs 110, AUD: Rs 80 , CAD : Rs 83,US Dollar: Rs107 ,  Eu Euro: Rs 119 , UK Pound: Rs 139, Swiss Franc: Rs 110, AUD: Rs 80 , CAD : Rs 83,US Dollar: Rs107 ,  Eu Euro: Rs 119 , UK Pound: Rs 139, Swiss Franc: Rs 110, AUD: Rs 80 , CAD : Rs 83
				</marquee>
			</div>
	</section>
	<section id="function">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 div-function">
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 function-box">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 function-icon">
					<div><img src="{{url('assets/front/images/trusted-icon.png')}}" class="img-responsive"></div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 function-title">
					TRUSTED
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 function-desc">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor. 
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 function-box">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 function-icon">
					<img src="{{url('assets/front/images/simple-icon.png')}}" class="img-responsive">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 function-title">
					SIMPLE
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 function-desc">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor. 
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 function-box">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 function-icon">
					<img src="{{url('assets/front/images/flexible-icon.png')}}" class="img-responsive">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 function-title">
					FLEXIBLE
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 function-desc">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor. 
				</div>
			</div>
		</div>
	</section>
	<section id="wu-promotion">
<<<<<<< HEAD
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 div-promotion parallax-win-2">
=======
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 div-promotion">
>>>>>>> a02be301d35b8528f79a85647ef65d1ae806da76
			<!-- <img src="{{url('assets/front/images/wu4.png')}}" class="img-responsive">
 -->
			<div class="wu-overlay">
				<div class="overlay-logo">
					<img src="{{url('assets/front/images/wu-logo.png')}}">
				</div>
				<div class="overlay-text">
					<h1>YOUR MONEY IN RIGHT HAND</h1>
				</div>
			</div>

		</div>
	</section>
	<section id="availability">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 div-available">
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 map-content">
				<h1>Ex-Change Money</h1>
				<h1 class="margin-left">Anytime Anywhere</h1>
				<p class="available-content">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur.
				</p>
			</div>
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 mon"></div>
		</div>
	</section>
	<section id="work-process">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 div-work">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 section-title">
					<h1><span>HOW</span> WE WORK</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 function-box">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 function-icon">
						<div><img src="{{url('assets/front/images/step1.png')}}" class="img-responsive"></div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 function-title">
						Choose Receipent
					</div>
				</div>
				<div class="col-md-1 col-sm-1 col-lg-1 direction">
					>>>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 function-box">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 function-icon">
						<div><img src="{{url('assets/front/images/step2.png')}}" class="img-responsive"></div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 function-title">
						Choose Amount
					</div>
				</div>
				<div class="col-md-1 col-sm-1 col-lg-1 direction">
					>>>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 function-box">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 function-icon">
						<div><img src="{{url('assets/front/images/step3.png')}}" class="img-responsive"></div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 function-title">
						Confirm and Pay
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="achievement">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 div-achievement">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 section-title">
					<h1><span>WHY</span> WORK WITH US</h1>
				</div>
			</div>
			<div class="row achieve-container">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 first-half">
					<img src="{{url('assets/front/images/medal.png')}}" class="img-responsive first-half-image">
					<div class="col-xs-12 col-md-12 col-lg-12 col-sm-12 achieve-box">
						<img src="{{url('assets/front/images/small-medal.png')}}" class="img-responsive">
						<h1>Achievement</h1>
						<p class="work-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor.</p>
					</div>
					<div class="col-xs-12 col-md-12 col-lg-12 col-sm-12 achieve-box">
						<img src="{{url('assets/front/images/rate.png')}}" class="img-responsive">
						<h1>Best Exchange Rate</h1>
						<p class="work-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do .</p>
					</div>
					<div class="col-xs-12 col-md-12 col-lg-12 col-sm-12 achieve-box">
						<img src="{{url('assets/front/images/sec.png')}}" class="img-responsive">
						<h1>Safe and Secure</h1>
						<p class="work-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor.</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 second-half">
					<img src="{{url('assets/front/images/award.png')}}" class="img-responsive second-half-image">
					<div class="col-xs-12 col-md-12 col-lg-12 col-sm-12 achieve-box">
						<img src="{{url('assets/front/images/1.png')}}" class="img-responsive">
						<h1>No. 1 Remit</h1>
						<p class="work-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor.</p>
					</div>
					<div class="col-xs-12 col-md-12 col-lg-12 col-sm-12 achieve-box">
						<img src="{{url('assets/front/images/fast.png')}}" class="img-responsive">
						<h1>Fastest Delivery</h1>
						<p class="work-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor.</p>
					</div>
					<div class="col-xs-12 col-md-12 col-lg-12 col-sm-12 achieve-box">
						<img src="{{url('assets/front/images/care.png')}}" class="img-responsive">
						<h1>Customer Care</h1>
						<p class="work-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="testimonial">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 div-testimonial">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 section-title">
					<h1>OUR DELIGHTFUL CUSTOMERS</h1>
				</div>
			</div>
			<div class="row">
				<div class="container">
				  <div id="tcb-testimonial-carousel" class="carousel slide" data-ride="carousel">
				    <!-- Wrapper for slides -->
				    <div class="carousel-inner">
				    <div class="item active">
				        <div class="row">
				          <div class="col-xs-12">
				            <figure class="clearfix">
				              <div class="col-md-12 col-sm-12 col-xs-12">
				                <figcaption class="caption">
				                  <p>“I have received our full bond from you professional end of lease cleaning. I will use your complay again in future for my cleaning needs.”</p>
				                </figcaption>
				              </div>
				              <div class="col-md-12 col-sm-12 col-xs-12 cus-detail">
				              	<div class="col-xs-12 col-sm-5 col-md-5 cus-pic">
				              		<img src="{{url('assets/front/images/pic.jpg')}}" class="img-responsive img-circle">
				              	</div>
				              	<div class="col-xs-12 col-sm-7 col-md-7 cus-name">
				              		<span class="cus-name">
				                    	<p>John Doe</p>
				                    </span>
				                    <span class="cus-position">
				                    	<p>Business Head</p>
				                    </span>
				                    <span class="cus-company">
				                    	<p>ABC Company</p>
				                    </span>
				              	</div>
				              </div>
				            </figure>
				          </div>
				        </div>
				      </div>
				      <div class="item">
				        <div class="row">
				          <div class="col-xs-12">
				            <figure class="clearfix">
				              <div class="col-md-12 col-sm-12 col-xs-12">
				                <figcaption class="caption">
				                  <p>“I have received our full bond from you professional end of lease cleaning. I will use your complay again in future for my cleaning needs.”</p>
				                </figcaption>
				              </div>
				              <div class="col-md-12 col-sm-12 col-xs-12 cus-detail">
				              	<div class="col-xs-12 col-sm-5 col-md-5 cus-pic">
				              		<img src="{{url('assets/front/images/pic.jpg')}}" class="img-responsive img-circle">
				              	</div>
				              	<div class="col-xs-12 col-sm-7 col-md-7 cus-name">
				              		<span class="cus-name">
				                    	<p>John Doe</p>
				                    </span>
				                    <span class="cus-position">
				                    	<p>Business Head</p>
				                    </span>
				                    <span class="cus-company">
				                    	<p>ABC Company</p>
				                    </span>
				              	</div>
				              </div>
				            </figure>
				          </div>
				        </div>
				      </div>
				      <div class="item">
				        <div class="row">
				          <div class="col-xs-12">
				            <figure class="clearfix">
				              <div class="col-md-12 col-sm-12 col-xs-12">
				                <figcaption class="caption">
				                  <p>“I have received our full bond from you professional end of lease cleaning. I will use your complay again in future for my cleaning needs.”</p>
				                </figcaption>
				              </div>
				              <div class="col-md-12 col-sm-12 col-xs-12 cus-detail">
				              	<div class="col-xs-12 col-sm-5 col-md-5 cus-pic">
				              		<img src="{{url('assets/front/images/pic.jpg')}}" class="img-responsive img-circle">
				              	</div>
				              	<div class="col-xs-12 col-sm-7 col-md-7 cus-name">
				              		<span class="cus-name">
				                    	<p>John Doe</p>
				                    </span>
				                    <span class="cus-position">
				                    	<p>Business Head</p>
				                    </span>
				                    <span class="cus-company">
				                    	<p>ABC Company</p>
				                    </span>
				              	</div>
				              </div>
				            </figure>
				          </div>
				        </div>
				      </div>
				    </div>
				    <!-- Controls -->
				    <a class="left carousel-control" href="#tcb-testimonial-carousel" data-slide="prev"> 
				   		<img src="{{url('assets/front/images/left.png')}}">
				   	</a>
				    <a class="right carousel-control" href="#tcb-testimonial-carousel" data-slide="next">
				    	<img src="{{url('assets/front/images/right.png')}}">
				    </a>
				  </div>
				</div>
			</div>
		</div>
	</section>
	<section id="auth">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 div-footer-up">
			<div class="authorized">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 auth-box">
				<h1 class="auth-head">Authorized By</h1>
				<img src="{{url('assets/front/images/nrb.png')}}">
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 auth-box">
					<h1 class="auth-head">Powered By</h1>
					<img src="{{url('assets/front/images/ntc.png')}}">
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 auth-box">
					<h1 class="auth-head">Secured By</h1>
					<img src="{{url('assets/front/images/nepallife.png')}}">
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 auth-box">
					<h1 class="auth-head">Banking Partner</h1>
					<img src="{{url('assets/front/images/sbi.png')}}">
				</div>
			</div>
		</div>
	</section>
	
@endsection