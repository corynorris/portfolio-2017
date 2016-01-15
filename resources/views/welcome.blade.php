@extends('layouts.master')

@section('title', 'Welcome')

@section('description', "The personal portfolio website of Cory Norris. This site demontrates some of my latest works as well as a brief history of my work experience, volunteering and continuous learning in order to paint a loose picture of what I'm capable of.")

@section('navbar')
@include('layouts.navigation-bar', ['navbarStyle'=>'navbar-default'])
@endsection

@section('content')
<section id="intro" class="toronto container-fluid">
 <div class="row">
  <div  class="col-sm-7 col-lg-5 col-sm-offset-1 col-lg-offset-1 col-xs-12">
    <div class="inner-container">
      <h1 id="hello">Cory</h1>
      <p>Programmer and Web Designer</p>
      <div class="action-wrapper">
        <a href="http://codepen.io/corynorris/" class="btn btn-primary"><i class="fa fa-codepen" aria-hidden="true"></i> Codepen</a>
        <a href="https://bitbucket.org/cnorris/" class="btn btn-primary"><i class="fa fa-bitbucket"></i> Bitbucket</a>
        <a href="https://github.com/corynorris" class="btn btn-primary"><i class="fa fa-github"></i> Github</a>
      </div>
    </div>
  </div>
</div>
<div class="bottom-center"><a id="more"  href="#introduction"><i  class="fa fa-chevron-circle-down fa-3x"></i></a></div>
</section>
<section id="introduction">
<div class="container">
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3 text-center">
      <h1><img src="/images/hello.svg" height="70px" alt="Hello"></h1>
      <p>I'm a Canadian developer from Ontario, Canada. I've been programming for as long as I can remember, starting with my trusty <a href="https://www.google.ca/search?q=tandy+2000&espv=2&biw=799&bih=838&source=lnms&tbm=isch&sa=X&ved=0ahUKEwj4rbP7sqjKAhVD0h4KHWVdDL8Q_AUIBigB">Tandy2000</a>. Since then, I've been on a <a href="/resume">continual pursuit of learning</a> and improving my programming and design ability.</p>
      <hr>
      <p>For me, websites should be <strong class="red">3 things</strong>:</p>
    </div>
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
    <div class="col-sm-2">      
      <strong class="red">Simple</strong>
    </div>
    <div class="col-sm-10"> enough to understand in 10 seconds or less.</div>
    </div>
  </div>
  <div class="row"><br></div>
   <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
    <div class="col-sm-2">      
      <strong class="red">Complete</strong>
    </div>
    <div class="col-sm-10"> enough to confirm if the value proposal matches the users requirements.
 </div>
    </div>
  </div>
  <div class="row"><br></div>
   <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
    <div class="col-sm-2">      
      <strong class="red">Fast</strong>
    </div>
    <div class="col-sm-10"> enough to get things done without splitting focus.</div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3 text-center">
      <hr>
      <p>If there's anything you'd like to talk to me about, please feel free to contact me at corynorris@gmail.com.</p>
      <img src="/images/divider.svg" height="70px" alt="Divider">
     </div>
  </div>
  </div>
</section>
@endsection