@extends('layouts.master')

@section('title', 'Contact')

@section('navbar')
	@include('layouts.navigation-bar', ['navbarStyle'=>'navbar-inverted'])
@endsection

@section('content')
<section id="contact" class="container">
    <div class="row">
	    @if(Session::has('message'))
		    <div class="alert alert-info">
		      {{Session::get('message')}}
		    </div>
		@endif
    	<h1>Contact Me</h1>
		@if ($errors->any())
		    <ul class="alert alert-danger">
		        @foreach ($errors->all() as $error)
		            <li>{{ $error }}</li>
		        @endforeach
		    </ul>
		@endif
		{!! Form::open(array('url' => 'contact', 'method' => 'POST')) !!}
		<div class="form-group">
			{!! Form::label('Your Name') !!}
			{!! Form::text('name', null,
			array('required',
			'class'=>'form-control',
			'placeholder'=>'Your name')) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Your E-mail Address') !!}
			{!! Form::text('email', null,
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
			array('class'=>'btn btn-primary')) !!}
		</div>
		{!! Form::close() !!}
	</div>
</section>
@endsection