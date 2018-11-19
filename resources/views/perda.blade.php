<!doctype html>
<html lang="en">
<head>
@include('include.head')
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  @include('include.header')

<br><br><br>

  <!-- Start Perda Area -->
  <div id="perda" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Perda Kota Blitar</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h4 class="sec-head">PERATURAN DAERAH KOTA BLITAR</h4>
                </a>
                <p align="justify">
                  <a href="{{url('')}}/content/pdf/PERDA_RDTR_KOTA_BLITAR.pdf">Download Peraturan Daerah Kota Blitar Nomor 10 Tahun 2017</a>
                </p>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item"
                      src="{{url('')}}/content/pdf/PERDA_RDTR_KOTA_BLITAR.pdf" allowfullscreen>
                  </iframe>
                </div>
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div>
  </div>
  <!-- End Perda Area -->

  @include('include.foot')
</body>

</html>
