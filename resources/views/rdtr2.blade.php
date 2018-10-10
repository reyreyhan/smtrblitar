<!doctype html>
<html lang="en">
<head>
  @include('include.head')
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  @include('include.header')
  <!-- Start Jaringan Prasarana area -->
    <div id="peta2" class="contact-area">
        <div class="contact-inner area-padding">
            <div class="contact-overly"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center area-padding-maps-2">
                            <h2>Rencana Jaringan Prasarana</h2>
                        </div>
                    </div>
                </div>
          <div class="awesome-project-content">
            <!-- single-awesome-project start -->
            <div class="col-md-12 col-sm-12 col-xs-12 design development">
              <div class="single-awesome-project">
                <div class="awesome-img">
                  <a href="#"><img src="{{ url('content/muatan_rdtr')}}/jaringan_prasarana.png" alt="" /></a>
                  <div class="add-actions text-center">
                    <div class="project-dec">
                      <a class="venobox" data-gall="myGallery" href="{{ url('content/muatan_rdtr')}}/jaringan_prasarana.png">
                        <h4>Rencana Jaringan Prasarana</h4>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- single-awesome-project end -->
          </div>
            </div>
        </div>
    </div>
  <!-- End Jaringan Prasarana area -->
  @include('include.foot')
</body>

</html>
