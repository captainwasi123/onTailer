@extends('web.includes.master2')
@section('title', 'AI Algorithm')
@section('content')
 


<section class="custom-sec3 pad-top-80 pad-bot-80">
	<div class="custom-container1">

	<div class="row">
	
	<div class="col-md-4 col-lg-4 col-sm-12 col-12">
	<div class="algorithm-form">
	<form>
		
	<div class="form-field5">
	<h6 class="col-black"> NAME </h6>	
	<input type="text" placeholder="Name" class="field-style5" name="">
	</div>


	<div class="form-field5">
	<h6 class="col-black"> HEIGHT </h6>	
	</div>


	<div class="row">
	<div class="col-md-6 col-lg-6 col-sm-6 col-6">
	<div class="form-field5">
	<select>
		<option> Feet </option>
		<option> Feet </option>
		<option> Feet </option>
	</select>
	</div>	
	</div>	
	<div class="col-md-6 col-lg-6 col-sm-6 col-6">
	<div class="form-field5">
	<select>
		<option> Inch </option>
		<option> Inch </option>
		<option> Inch </option>
	</select>
	</div>	
	</div>
	</div>	


	<div class="form-field5">
	<h6 class="col-black"> WEIGHT </h6>	
	<input type="text" placeholder="Weight" class="field-style5" name="">
	<span class="info-tag1"> kg </span>
	</div>

	<div class="form-field5">
	<h6 class="col-black"> AGE</h6>	
	<input type="text" placeholder="Age" class="field-style5" name="">
	</div>

	<div class="form-field5">
	<button class="edit-btn1"> EDIT </button>
	</div>

	</form>	

	</div>
	</div>	


	<div class="col-md-8 col-lg-8 col-sm-12 col-12">

	</div>	

	</div>	
		
	</div>
</section>
 

 
@endsection