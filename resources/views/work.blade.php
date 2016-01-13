@extends('layouts.master');

@section('title', 'Welcome')
 
@section('content')
<div id="main" class="toronto">
<section class="intro ">
    <div class="intro-content">
        <h1>Cory Norris</h1>
        <p>Programmer and Web designer</p>
        <div class="action-wrapper">        
            <a href="http://codepen.io/corynorris/" class="btn btn-primary">
                <i class="fa fa-codepen" aria-hidden="true"></i> Codepen</a>
            <a href="https://bitbucket.org/cnorris/" class="btn btn-primary">
                <i class="fa fa-bitbucket"></i> Bitbucket</a>
            <a href="https://github.com/corynorris" class="btn btn-primary">
                <i class="fa fa-github"></i> Github</a>
            <a href="https://github.com/corynorris" class="btn btn-primary">
                <i class="fa fa-linkedin-square"></i> Linkedin</a>
        </div>
    </div>
</section>
</div>
@endsection