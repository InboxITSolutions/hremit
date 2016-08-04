@extends('web.layouts.master')
@section('title')
Media
@endsection
@section('content')
<section id="about-title">
  <div class="container">
    <div class="col-xs-12 col-sm-4 col-md-12 col-lg-12 title">
      <h1>Print And Media</h1>
    </div>
  </div>
</section>
<section id="media">
  <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 div-media">
    <ul class="ul-media">
      <li class="media-option first-option">
        <h1><a href="#" class="filter" data-filter="all">All</a></h1>
      </li>
      <li class="media-option second-option">
        <h1><a href="#" class="filter" data-filter=".category-1">Print</a></h1>
      </li>
      <li class="media-option third-option">
        <h1><a href="#" class="filter" data-filter=".category-2">Audio</a></h1>
      </li>
    </ul>
  </div>
</section>
<section id="media-container">
<div id="Container" class="media-container">

  <div class="mix category-1" data-myorder="1">
    <a class="single_image" rel="gallery" href="{{url('assets/front/images/gallery/1.png')}}" title="This is the caption"><img src="{{url('assets/front/images/gallery/1.png')}}" alt="" class="img-responsive"/></a>
  </div>
  <div class="mix category-1" data-myorder="1">
    <a class="single_image" rel="gallery" href="{{url('assets/front/images/gallery/2.png')}}"><img src="{{url('assets/front/images/gallery/2.png')}}" alt="" class="img-responsive"/></a>
  </div>
  <div class="mix category-1" data-myorder="1">
    <a class="single_image" rel="gallery" href="{{url('assets/front/images/gallery/4.png')}}"><img src="{{url('assets/front/images/gallery/4.png')}}" alt="" class="img-responsive"/></a>
  </div>
  <div class="mix category-1" data-myorder="1">
    <a class="single_image" rel="gallery" href="{{url('assets/front/images/gallery/6.png')}}"><img src="{{url('assets/front/images/gallery/6.png')}}" alt="" class="img-responsive"/></a>
  </div>
  <div class="mix category-2" data-myorder="1">
    <audio controls>
      <source src="{{url('assets/front/audio/ring.mp3')}}" type="audio/mpeg">
    </audio>
  </div>
</div>
</section>
<style type="text/css">
  
</style>
@endsection