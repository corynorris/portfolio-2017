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
  <div class="row text-center">
    <div class="col-sm-6 col-sm-offset-3 bordered">

      <h1>Welcome</h1>
      <p> 
        I'm a Canadian developer from Ontario, Canada. I've been programming for as long as I can remember, starting with my trusty <a href="https://www.google.ca/search?q=tandy+2000&espv=2&biw=799&bih=838&source=lnms&tbm=isch&sa=X&ved=0ahUKEwj4rbP7sqjKAhVD0h4KHWVdDL8Q_AUIBigB">Tandy2000</a>. Since then, I've been on a <a href="/resume">continual pursuit of learning</a> and improving my programming and design ability.
      </p>
      <hr>                    
      <p>For me, design should be <u>3 things</u>:</p>                    

  <div class="row text-center">  
    <div class="col-sm-4 col-xs-12">
      <strong class="red">Simple</strong><br>to understand. 
    </div>
    <div class="col-sm-4 col-xs-12">
      <strong class="red">Easy</strong><br>to visually navigate.  
    </div>
    <div class="col-sm-4 col-xs-12">
      <strong class="red">Complete</strong><br>with information.
    </div>
  </div>

      <hr>
      <p>
        When it comes to design, I try and follow the 3 click rule, meaning that from any point on a website, a user should be able to accomplish whatever they like in 3 clicks.
      </p>
      <p>
       If there's anything you'd like to talk to me about, please feel free to contact me at corynorris@gmail.com. 
     </p>


     </div>
  </div>
</section>
@endsection