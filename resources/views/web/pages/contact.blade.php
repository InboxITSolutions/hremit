@extends('web.layouts.master')
@section('title')
Contact
@endsection
@section('content')
<section id="about-title">
	<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 title">
			<h1>Contact Us</h1>
		</div>
	</div>
</section>
<section id="about-content">
	<div class="container-fluid">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 div-about-content">
			<p>
				<center class="defination main-defination">
					<mail>
						info@hulasremittance.com
					</mail>
				</center>
			</p>
			<p>
				<center class="defination main-defination">
					<phone>Phone: +977-1-4261313</phone>
					<fax>Fax: +977-1-4252008</fax>
				</center>
			</p>
		</div>
	</div>
</section>
<section id="feedback">
	<div class="container-fluid">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 feedback-div">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 feedback-box">
						<center>
								<section class="contact-wrap">
								  <form action="#" class="contact-form">
								    <div class="col-sm-6">
								      <div class="input-block">
								        <label for=""><i class="fa fa-user"></i> &nbsp; First Name</label>
								        <input type="text" class="form-control">
								      </div>
								    </div>
								    <div class="col-sm-6">
								      <div class="input-block">
								        <label for=""><i class="fa fa-user"></i> &nbsp;Last Name</label>
								        <input type="text" class="form-control">
								      </div>
								    </div>
								    <div class="col-sm-12">
								      <div class="input-block">
								        <label for=""><i class="fa fa-envelope"></i> &nbsp;Email</label>
								        <input type="text" class="form-control">
								      </div>
								    </div>
								    <div class="col-sm-12">
								      <div class="input-block">
								        <label for="phone"><i class="fa fa-phone"></i> &nbsp;Phone</label>
								        <input type="text" class="form-control">
								      </div>
								    </div>
								    <div class="col-sm-12">
								      <div class="input-block textarea">
								        <label for=""><i class="fa fa-comment"></i> &nbsp;Drop your message here</label>
								        <textarea rows="3" type="text" class="form-control"></textarea>
								      </div>
								    </div>
								    <div class="col-sm-12">
								      <button class="square-button">Send</button>
								    </div>
								  </form>
								</section>
							</center>
						</div>
					</div>
	</div>
</section>
@endsection
