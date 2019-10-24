@extends('layouts.template')

@section('content')

  <!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
  <div id="blue">
    <div class="container">
      <div class="row">
        <h3>MENU</h3>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /blue -->


  <!-- *****************************************************************************************************************
	 BLOG CONTENT
	 ***************************************************************************************************************** -->

  <div class="container mtb">
    <div class="row">
      <div class="col-lg-8">
      <a href="{{route('menuCreate')}}">글작성</a>
        <p><img class="img-responsive" src="/img/burger.jpg"></p>

        <div class="hline"></div>

        @yield('menuContent')
        
      </div>

      <!-- *****************************************************************************************************************
	    BLOG CONTENT
	    ***************************************************************************************************************** -->


      <div class="col-lg-4">
        <h4>Search</h4>
        <div class="hline"></div>
        <p>
          <br/>
          <input type="text" class="form-control" placeholder="Search something">
        </p>

        <div class="spacing"></div>

        <h4>Categories</h4>
        <div class="hline"></div>
        <p><a href="{{route('menuBurger')}}"><i class="fa fa-angle-right"></i>Burger</a> <span class="badge badge-theme pull-right">9</span></p>
        <p><a href="{{route('menuChicken')}}"><i class="fa fa-angle-right"></i>Chicken</a> <span class="badge badge-theme pull-right">3</span></p>

        <div class="spacing"></div>

        <h4>Recent Posts</h4>
        <div class="hline"></div>
        <ul class="popular-posts">
          <li>
            <a href="#"><img src="/img/thumb01.jpg" alt="Popular Post"></a>
            <p><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></p>
            <em>Posted on 02/21/14</em>
          </li>
          <li>
            <a href="#"><img src="/img/thumb02.jpg" alt="Popular Post"></a>
            <p><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></p>
            <em>Posted on 03/01/14</em>
            <li>
              <a href="#"><img src="/img/thumb03.jpg" alt="Popular Post"></a>
              <p><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></p>
              <em>Posted on 05/16/14</em>
            </li>
            <li>
              <a href="#"><img src="/img/thumb04.jpg" alt="Popular Post"></a>
              <p><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></p>
              <em>Posted on 05/16/14</em>
            </li>
        </ul>

        <div class="spacing"></div>

        <h4>Popular Tags</h4>
        <div class="hline"></div>
        <p>
          <a class="btn btn-theme" href="#" role="button">Design</a>
          <a class="btn btn-theme" href="#" role="button">Wordpress</a>
          <a class="btn btn-theme" href="#" role="button">Flat</a>
          <a class="btn btn-theme" href="#" role="button">Modern</a>
          <a class="btn btn-theme" href="#" role="button">Wallpaper</a>
          <a class="btn btn-theme" href="#" role="button">HTML5</a>
          <a class="btn btn-theme" href="#" role="button">Pre-processor</a>
          <a class="btn btn-theme" href="#" role="button">Developer</a>
          <a class="btn btn-theme" href="#" role="button">Windows</a>
          <a class="btn btn-theme" href="#" role="button">Phothosop</a>
          <a class="btn btn-theme" href="#" role="button">UX</a>
          <a class="btn btn-theme" href="#" role="button">Interface</a>
          <a class="btn btn-theme" href="#" role="button">UI</a>
          <a class="btn btn-theme" href="#" role="button">Blog</a>
        </p>
      </div>
    </div>
  </div>
  @endsection