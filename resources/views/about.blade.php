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
              <h2>Saran</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <center><h4 class="sec-head">Masukkan Saran Anda</h4></center>
                </a>
                <form action="{{url('')}}/about" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="email">Nama </label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Anda" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="email">Email </label>
                        <input type="email" class="form-control" placeholder="Masukkan Email Berita" name="email">
                    </div>
                    <div class="form-group">
                        <label for="comment">Saran</label>
                        <textarea class="form-control" rows="5" name="saran" placeholder="Masukkan Saran Anda"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
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
