@extends('layouts.master')

@section('title', 'Portfolio')

@section('description', "The personal portfolio website of Cory Norris. A contact form for getting in touch with me.")


@section('navbar') 
@include('layouts.navigation-bar', ['navbarStyle'=>'navbar-inverse'])
@endsection


@section('content')


<section id="contact" class="container">
    <div class="row">
    <div class="col-sm-12">
    	@if(Session::has('message'))
    	<h1>Thank You</h1>
		    <div class="alert alert-info">
		      {{Session::get('message')}}
		    </div>
		@else
		<h1>Contact Me</h1>
		@if ($errors->any())
		    <ul class="alert alert-danger">
		        @foreach ($errors->all() as $error)
		            <li>{{ $error }}</li>
		        @endforeach
		    </ul>
		@endif
		{!! Form::open(array('url'=>'contact','method'=>'post', 'id'=>'contact-form', 'class'=>'no-smoothState')) !!}
		<div class="form-group">
			{!! Form::label('Your Name') !!}
			{!! Form::text('name', null,
			array('required',
			'class'=>'form-control',
			'placeholder'=>'Your name')) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Your E-mail Address') !!}
			{!! Form::email('email', null,
			array('required',
			'class'=>'form-control',
			'placeholder'=>'Your e-mail address')) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Your Message') !!}
			{!! Form::textarea('message', null,
			array('required',
			'class'=>'form-control',
			'placeholder'=>'Your message')) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Contact Me!',
			array('class'=>'btn btn-primary', 'id'=>"contact-form-submit")) !!}
		</div>
		{!! Form::close() !!}
		@endif
		</div>
	</div>
</section>
@endsection