<!doctype html>
<html lang="en">
<head>
  @include('include.head')
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  @include('include.header')

  <div class="blog-page area-padding">
    <br><br>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="page-head-blog">
            <div class="single-blog-page">
              <!-- search option start -->
              <form action="{{url('/berita')}}" method="post">
                <div class="search-option">
                  <input name="search" type="text" placeholder="Search...">
                  <button class="button" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                </div>
              </form>
              <!-- search option end -->
            </div>
          </div>
        </div>
        <!-- End left sidebar -->
        <!-- Start single blog -->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">

            @foreach($data as $u)
            <!-- Start single blog -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog-details.html">
											<img src="{{url('upload/berita')}}/{{$u->gambar}}" alt="">
										</a>
                </div>
                <div class="blog-meta">
                  <span class="date-type">
											<i class="fa fa-calendar"></i>{{$u->created_at}}
										</span>
                </div>
                <div class="blog-text">
                  <h4>
											<a href="#">{{$u->judul}}</a>
										</h4>
                  <p>
                    {!!\Illuminate\Support\Str::words($u->isi, 100)!!}
                  </p>
                </div>
                <span>
										<a href="{{url('berita')}}/{{$u->id}}" class="ready-btn">Read more</a>
									</span>
              </div>
            </div>
            <!-- End single blog -->
            @endforeach

            {{ $data->links() }}

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->

  <div class="clearfix"></div>
  @include('include.foot')
</body>

</html>
