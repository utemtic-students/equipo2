<div id="slider" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#slider" data-slide-to="0" class="active"></li>
    <li data-target="#slider" data-slide-to="1" class="active"></li>
    <li data-target="#slider" data-slide-to="2" class="active"></li>
    <li data-target="#slider" data-slide-to="3" class="active"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="{{ asset('image/InteligentContainerPasto.jpg')}}" alt="slide1">
        <div class="carousel-caption">
          Slide 1
        </div>
      </div>
      <div class="item">
        <img src="{{ asset('image/10DeDescuento.jpg')}}" alt="slide2">
        <div class="carousel-caption">
          Slide 2
        </div>
      </div>
      <div class="item">
        <img src="{{ asset('image/IntelligentcontainerDesenfocado.jpg')}}" alt="slide3">
        <div class="carousel-caption">
          Slide 3
        </div>
      </div>
      <div class="item">
        <img src="{{ asset('image/IntelligentcontainerDesenfocado2.jpg')}}" alt="slide4">
        <div class="carousel-caption">
          Slide 4
        </div>
      </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#slider" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><hr>