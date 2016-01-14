@extends('layouts.master')

@section('title', 'Portfolio')

@section('navbar') 
@include('layouts.navigation-bar', ['navbarStyle'=>'navbar-inverse'])
@endsection


@section('content')
<section id="portfolio" class="container">
<!--         <div class="row">
            <div class="col-sm-12">
                <div class="page-header"><h1>Portfolio</h1></div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-sm-6">
                <a class="portfolio-item" href="http://codepen.io/corynorris/full/ZQLJrx/">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="/images/portfolio/bear.jpg" class="img-responsive" alt="An svg line drawing that appears to draw itself.">
                </a>
                <a class="portfolio-item" href="http://codepen.io/corynorris/full/KVzBZZ/">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="/images/portfolio/simon.jpg" class="img-responsive" alt="A game of simon with sounds and lights.">
                </a>
            </div>
            <div class="col-sm-6">
                <a class="portfolio-item" href="http://codepen.io/corynorris/full/MKJrwm/">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="/images/portfolio/button-styles.jpg" class="img-responsive" alt="10 different button hover effects.">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <a class="portfolio-item" href="https://play.google.com/store/apps/details?id=com.LastHackerGames.WobbleRocket">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="/images/portfolio/wobble-rocket-2.jpg" class="img-responsive" alt="A simple mobile game for Android.">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a class="portfolio-item" href="http://codepen.io/corynorris/full/wMBKwx/">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="/images/portfolio/roman-calculator.jpg" class="img-responsive" alt="A calculator for roman numerals with some limitations.">
                </a>
            </div>
            <div class="col-sm-6">
                <a class="portfolio-item" href="http://codepen.io/corynorris/full/MKgzGJ/">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="/images/portfolio/quote-machine.jpg" class="img-responsive" alt="A randomly selected quote generator.">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a class="portfolio-item" href="http://codepen.io/corynorris/full/OMyMEe/">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="/images/portfolio/tictactoe.jpg" class="img-responsive" alt="Tic-Tac-Toe against an AI opponent.">
                </a>
            </div>
            <div class="col-sm-6">
                <a class="portfolio-item" href="http://codepen.io/corynorris/full/EPxjGP/">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="/images/portfolio/pomodoro.jpg" class="img-responsive" alt="A pomodoro timer used to help motivate you to work.">
                </a>
            </div>
        </div>
    </section>
    @endsection