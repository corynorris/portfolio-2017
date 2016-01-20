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
      <p><a href="/resume">learn more about me</a></p>
    </div>
  </div>
</div>
<div class="bottom-center"><a id="more" class=".no-smoothState" href="#introduction"><i  class="fa fa-chevron-circle-down fa-3x"></i></a></div>
</section>
<section id="introduction">
<div class="container">
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3 col-xs-12 text-center">
      <img src="/images/hello.svg" height="70px" width="175px" alt="Hello">
        <p>I'm a Canadian developer from <a href="https://www.google.ca/maps/place/Toronto,+ON/@43.7168789,-79.937099,9z/data=!3m1!4b1!4m2!3m1!1s0x89d4cb90d7c63ba5:0x323555502ab4c477?hl=en">Toronto ON, Canada</a>. I've been programming since I got my first computer, a hard working <a href="https://en.wikipedia.org/wiki/Tandy_2000">Tandy2000</a>. Although I started with simple spreadsheets and basic, I've been <a href="/resume">continually learning</a> since then.</p>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3 col-xs-12 text-center">
        <p><strong>Three things I believe in</strong></p>
        <p></p>
        <p></p>
        <p></p>
        <div class="values">
          <div class="row"><div class="title left col-sm-3 col-xs-12">Consistent</div><div class="right col-sm-9 col-xs-12">delivery across every page.</div></div>
          <div class="row"><div class="title left col-sm-3 col-xs-12">Fast</div><div class="right col-sm-9 col-xs-12">websites that hold focus.</div></div>
          <div class="row"><div class="title left col-sm-3 col-xs-12">Intuitive</div><div class="right col-sm-9 col-xs-12">enough to understand in a glance.</div></div>
       </div>
    </div>
  </div>
  <br><br>
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3 col-xs-12 text-center">
      <p>If there's anything you'd like to discuss, please don't hesitate to <a href="/contact">contact me</a>.</p>
      <img src="/images/divider.svg" height="70px" width="140px"  alt="Divider">
     </div>
  </div>
</div>
</section>
@endsection