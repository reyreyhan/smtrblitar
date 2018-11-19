<!doctype html>
<html lang="en">
<head>
@include('include.head')
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  @include('include.header')

<br><br><br>

  <!-- Start Zonasi Area -->
  <div id="zonasi" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Peraturan Zonasi</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start Left Blog -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-blog">
              <div class="blog-text">
                <h4>
                  <a href="#">Tabel ITBX BWP I</a>
                </h4>
              </div>
              <span>
                <a href="{{url('itbx1')}}" class="ready-btn">Read more</a>
              </span>
            </div>
            <!-- Start single blog -->
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-blog">
              <div class="blog-text">
                <h4>
                  <a href="#">Tabel ITBX BWP II</a>
                </h4>
              </div>
              <span>
                <a href="{{url('itbx2')}}" class="ready-btn">Read more</a>
              </span>
            </div>
            <!-- Start single blog -->
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-blog">
              <div class="blog-text">
                <h4>
                  <a href="#">Tabel ITBX BWP III</a>
                </h4>
              </div>
              <span>
                <a href="{{url('itbx3')}}" class="ready-btn">Read more</a>
              </span>
            </div>
            <!-- Start single blog -->
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-blog">
              <div class="blog-text">
                <h4>
                  <a href="#">Tabel ITBX BWP IV</a>
                </h4>
              </div>
              <span>
                <a href="{{url('itbx4')}}" class="ready-btn">Read more</a>
              </span>
            </div>
            <!-- Start single blog -->
          </div>
          <!-- End Left Blog-->
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <br><br>
            <h4><b>Peraturan Zonasi Kota Blitar</b></h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <iframe src="{{ url('/zona') }}" height="500" width="100%" frameBorder="0"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Zonasi Area -->

  @include('include.foot')
</body>

</html>
