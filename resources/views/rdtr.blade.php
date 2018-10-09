<!doctype html>
<html lang="en">
<head>
  @include('include.head')
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  @include('include.header')
  <!-- Start Pola Ruang area -->
    <div id="peta2" class="contact-area">
        <div class="contact-inner area-padding">
            <div class="contact-overly"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center area-padding-maps-2">
                            <h2>Pola Ruang</h2>
                        </div>
                        <iframe src="http://178.128.219.3/sitr/application/Simtaru_blitar" height="550px" width="100%"></iframe>
                    </div>
                </div>

                <div class="row">
                    <!-- Start Google Map -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <!-- Start Map -->
                        <!-- Uncomment below if you wan to use dynamic maps -->
                        <!--<div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>-->
                        <img src="https://maps.googleapis.com/maps/api/staticmap?center=Brooklyn+Bridge,New+York,NY&zoom=13&size=600x350&maptype=roadmap&markers=color:red%7Clabel:S%7C40.702147,-74.015794"
                            alt="">
                        <!-- End Map -->
                    </div>
                    <!-- End Google Map -->
                    <!-- Start Google Map -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <!-- Start Map -->
                        <!-- Uncomment below if you wan to use dynamic maps -->
                        <!--<div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>-->
                        <img src="https://maps.googleapis.com/maps/api/staticmap?center=Brooklyn+Bridge,New+York,NY&zoom=13&size=600x350&maptype=roadmap&markers=color:red%7Clabel:S%7C40.702147,-74.015794"
                            alt="">
                        <!-- End Map -->
                    </div>
                    <!-- End Google Map -->
                </div>

            </div>
        </div>
    </div>
  <!-- End Pola Ruang area -->
  @include('include.foot')
</body>

</html>
