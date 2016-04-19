<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only"></span><img src={{asset('images/hamburger.png')}}>
      </button>
      <a class="navbar-brand hidden-sm hidden-md hidden-lg" href="#"><img src={{asset('images/shine2_logo.png')}}></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle hidden-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src={{asset('images/hamburger.png')}}></a>
          <a href="#about" class="dropdown-toggle hidden-sm hidden-md hidden-lg">ABOUT</a>
          <a href="#testimonials" class="dropdown-toggle hidden-sm hidden-md hidden-lg">TESTIMONIALS</a>
          <a href="#press" class="dropdown-toggle hidden-sm hidden-md hidden-lg">PRESS</a>
          <a href="#refer" class="dropdown-toggle hidden-sm hidden-md hidden-lg">REFER-A-FRIEND</a>
          <a href="#partners" class="dropdown-toggle hidden-sm hidden-md hidden-lg">PARTNERS</a>
          <a href="https://blog.shinetext.com/latest" target="_blank" class="dropdown-toggle hidden-sm hidden-md hidden-lg">BLOG</a>

          <ul class="dropdown-menu dropdown-toggle hidden-xs">
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#refer">REFER-A-FRIEND</a></li>
            <li><a href="#press">PRESS</a></li>
            <li><a href="#testimonials">TESTIMONIALS</a></li>
            <li><a href="#partners">PARTNERS</a></li>
            <li><a href="https://blog.shinetext.com/latest" target="_blank">BLOG</a></li>
          </ul>
        </li>

        <li class="hidden-xs"><a href="#"><img src={{asset('images/shine2_logo.png')}}></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="hidden-xs" id="social-icons"><a href="https://twitter.com/ShineText" target="_blank"><img src={{asset('images/twitter_Icon.png')}}></a></li>
        <li class="hidden-xs" id="social-icons"><a href="https://instagram.com/ShineText" target="_blank"><img src={{asset('images/instagram_Icon.png')}}></a></li>
        <li class="hidden-xs" id="social-icons"><a href="https://www.facebook.com/Shine-Text" target="_blank"><img src={{asset('images/facebook_Icon.png')}}></a></li>
        <li class="hidden-xs" id="nav-refer"><a href="#refer">SIGNUP FOR SHINE</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>