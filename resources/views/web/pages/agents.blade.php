@extends('web.layouts.master')
@section('title')
Our Agents
@endsection
@section('content')
<section id="about-title">
	<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 title">
			<h1>Agents</h1>
		</div>
	</div>
</section>
<section id="section-select-box">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 div-select-box">
			{!!Form::open(array('url'=>'','files'=>true)) !!}
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 select-box">
					<div class="form-group">
					  <label for="sel1">Select Zone:</label>
					  <select class="form-control" id="zone" name="zone">
					    <option>Select Zone</option>
					    @foreach($zone as $zone)
							<option value="{{$zone->zone_id}}">{{$zone->zone_name}}</option>
						@endforeach
					  </select>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 select-box">
					<div class="form-group">
					  <label for="sel1">Select District:</label>
					  <select class="form-control" id="district" name="district">
					  <option>Select District</option>
					    
					  </select>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 select-box">
					<div class="form-group">
					  <label for="sel1">Select Region:</label>
					  <select class="form-control" id="region" name="region">
					    <option>Select Region</option>

					  </select>
					</div>
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</section>
<section id="agent-section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 agent-container" id="agent-div">
				<div class="col-xs-6 col-sm-6 col-md-6 agent-list">
					<div class="col-xs-12 col-sm-6 col-md-6 agent">
						<button class="accordion">Section 1</button>
						<div class="panel">
						  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 agent">
						<button class="accordion">Section 1</button>
						<div class="panel">
						  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 agent">
						<button class="accordion">Section 1</button>
						<div class="panel">
						  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 agent">
						<button class="accordion">Section 1</button>
						<div class="panel">
						  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}
</script>
<style>
button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #ddd;
}

button.accordion:after {
    content: '\02795';
    font-size: 13px;
    color: #777;
    float: right;
    margin-left: 5px;
}

button.accordion.active:after {
    content: "\2796";
}

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: 0.6s ease-in-out;
    opacity: 0;
}

div.panel.show {
    opacity: 1;
    max-height: 500px;
}
</style>
@endsection
