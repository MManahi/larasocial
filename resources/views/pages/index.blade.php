@extends('master.layout')
@section('content')
  <div class="coupons">
  	<div class="container">
  		<div class="coupons-grids text-center">
  			<div class="col-md-3 coupons-gd">
  				<h3>Social Network Application for Bloggers</h3>
  			</div>
  			<div class="col-md-3 coupons-gd">
  				<h4><span><img src="{{URL::asset('/assets/images/web.png')}}" alt=" " /></span></h4>
  				<p>Register and login</p>
  			</div>
  			<div class="col-md-3 coupons-gd">
  				<h4><span><img src="{{URL::asset('/assets/images/credit.png')}}" alt=" " /></span></h4>
  				<p>Make a profile with posts about ideas  </p>
  			</div>
  			<div class="col-md-3 coupons-gd">
  				<h4><span><img src="{{URL::asset('/assets/images/security.png')}}" alt=" " /></span></h4>
  				<p>Communicate with people</p>
  			</div>
  		</div>
  	</div>
  </div>
	<br/>
@stop
