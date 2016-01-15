<nav id="mainNav" class="navbar {{ $navbarStyle }} navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            @if (Request::is('*welcome') || Request::is('/'))
                <a class="navbar-brand" href="#"><i class="fa fa-home"></i>
            @else
                <a class="navbar-brand" href="/"><i class="fa fa-home"></i>
            @endif
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    @if (Request::is('*welcome') || Request::is('/'))
                    <a class="active active-inverse" href="#">Home</a>
                    @else
                    <a href="/">Home</a>
                    @endif
                </li>
                <li>
                    @if (Request::is('*portfolio'))
                    <a class="active active-default" href="#">Portfolio</a>
                    @else
                    <a href="/portfolio">Portfolio</a>
                    @endif
                </li>
                <li>
                    @if (Request::is('*resume'))
                    <a class="active active-default" href="#">Resume</a>
                    @else
                    <a href="/resume">Resume</a>
                    @endif
                </li>
     <!--            <li>
                    <a class="page-scroll" href="/blog">Blog</a>
                </li> -->
<!--                 <li>
                    <a {{ (Request::is('*contact') ? 'class=active' : '') }} href="/contact">Contact</a>
                </li> -->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>