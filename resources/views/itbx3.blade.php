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
                  <h4 class="sec-head">Tabel ITBX BWP III</h4>
                </a>
                <p align="justify">
                  <a href="{{url('')}}/content/itbx/itbx4.pdf">Download Tabel ITBX BWP III RDTR Kota Blitar</a>
                </p>
                <embed src="{{url('')}}/content/itbx/itbx4.pdf" width="800" height="600" type='application/pdf'>
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
