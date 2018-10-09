<!doctype html>
<html lang="en">
<head>
@include('include.head')
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>
  @include('include.header')

  <!-- Start Slider Area -->
  <div id="" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="{{ url('assets')}}/img/slider/slide1.PNG" alt="" title="#slider-direction-1" />
        <img src="{{ url('assets')}}/img/slider/slide2.PNG" alt="" title="#slider-direction-2" />
        <img src="{{ url('assets')}}/img/slider/slide3.PNG" alt="" title="#slider-direction-3" />
        <img src="{{ url('assets')}}/img/slider/slide4.PNG" alt="" title="#slider-direction-4" />
        <img src="{{ url('assets')}}/img/slider/slide5.PNG" alt="" title="#slider-direction-5" />
        <img src="{{ url('assets')}}/img/slider/slide6.PNG" alt="" title="#slider-direction-6" />
        <img src="{{ url('assets')}}/img/slider/slide7.PNG" alt="" title="#slider-direction-7" />
      </div>
    </div>
  </div>
  <!-- End Slider Area -->
 
  <!-- Start Berita Area -->
  <div id="berita" class="about-area area-padding">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Berita</h2>
            </div>
          </div>
        </div>
        <div class="row">
          @foreach($data as $u)
          <!-- Start Left Blog -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="#">
                  <img src="{{ url('upload/berita')}}/{{$u->gambar}}" alt="">
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
                  {!! \Illuminate\Support\Str::words($u->isi, 50) !!}
                 </p>
              </div>
              <span>
                <a href="{{url('berita')}}/{{$u->id}}" class="ready-btn">Read more</a>
              </span>
            </div>
            <!-- Start single blog -->
          </div>
          <!-- End Left Blog-->
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <!-- End Berita -->

  <!-- Start Home area -->
  <br><br><br>
  <div id="home" class="blog-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Selayang Pandang</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
								  <img src="{{ url('assets')}}/img/blitar.png" alt="">
								</a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head">Kota Blitar</h4>
              </a>
              <p align="justify">
                 Kota Blitar memiliki peran yang cukup strategis di Provinsi Jawa Timur dalam kedudukannya sebagai pusat kegiatan dari Satuan
                Wilayah Pembangunan yaitu Wilayah Pembangunan (WP) Blitar dengan Kabupaten Blitar sebagai hinterlandnya agar berkembang secara
                signifikan. Adapaun tujuan penataan ruang Kota Blitar sebagai Kota Wisata kebangsaan yang didukung oleh perdagangan dan jasa.
              </p>
              <p align="justify">
                Perkembangan sektor-sekor tersebut berpengaruh pada perubahan pola dan strutur pemafaatan ruang, sehingga berdampak pada
                pengendalian ruangnya. Sehubungan dengan hal tersebut diperlukan suatu arahan dan pedoman dalam pengendalian pemanfaatan
                ruang dalam bentuk Penataan Ruang.
              </p>
              <p align="justify">
                 Penataan Ruang di Kota Blitar dilaksanakan berdasarkan Peraturan Daerah Nomor 12 Tahun 2011 tentang Rencana Tata Ruang Wilayah
                Kota Blitar Tahun 2011 sd 2030 yang kemudian ditindak lanjuti dengan rencana rinci yaitu Rencana Detail Tata Ruang (RDTR)
              </p>
              <p align="justify">
                 RDTR ditetapkan berdasarkan Peraturan Daerah Kota Blitar Nomor 10 Tahun 2017 tentang Rencana Detail Tata Ruang (RDTR) Dalam
                Perda tersebut 4 BWP yang ada di Kota Blitar diatur menjadi 1 (satu) perda termasuk di dalamnya Peraturan Zonasinya.
              </p>
              <p align="justify">
                 Sumberdaya alam dan aset manusia merupakan hal dinamis, maka informasi tentang status terakhir potensi dan keberadaannya
                menjadi sangat penting dalam perencanaan, pemanfaatan maupun pengendalian kebijakan. Untuk itu keberadaan infrastruktur komunikasi
                dan informasi secara terintegrasi, akan sangat membantu efektifitas dan efisiensi kebijakan dimaksud.
              </p>
              <p align="justify">
                 Sebagaimana amanat Peraturan Daerah Kota Blitar Nomor 12 Tahun 2011 tentang Rencana Tata Ruang Wilayah Kota Blitar Tahun
                2011 – 2030 bahwa dalam rangka meningkatkan peran masyarakat, Pemerintah Kota Blitar membangun sistem informasi dan dokumentasi
                penataan ruang yang dapat diakses dengan mudah oleh masyarakat.Untuk itu diperlukan suatu strategi dan perencanaan yang cepat,
                tepat dan akurat terhadap prasarana sistim informasi tata ruang RDTR Kota Blitar.
              </p>
              <p align="justify">
                 Sistem Informasi Tata Ruang RDTR Kota Blitarmerupakan sebuah sarana komunikasi dan informasi yang menyajikan data dan informasi
                yang tereferensi secara spasial yang dikembangkan pada aplikasi berbasis Web yang harus dikelola dengan baik dengan menyajikan
                pilihan-pilihan atas data dan informasi untuk kebutuhan penataan ruang sehingga ke depan nantinya masyarakat akan dapat secara
                lebih transparan melihat dan juga terlibat (berperan serta) dalam proses pembangunan di Kota Blitar.
              </p>
              <p align="justify">
                 Salah satu cara untuk menjawab kebutuhan di atas adalah dengan menyajikan informasi mengenai RDTR Kota Blitar. Peta yang
                telah terisi berbagai informasi melalui suatu sistem komputer tersebut sering disebut dengan Sistem Informasi Geografis (SIG).
                Dengan tersedianya data tersebut proses pengambilan keputusan seperti pemanfaatan dan pengembangan, pemeliharaan maupun pengamanan
                dapat dilakukan secara cepat, tepat dan akurat.
              </p>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End Home area -->
  <br><br><br>

  @include('include.foot')

</body>

</html>
