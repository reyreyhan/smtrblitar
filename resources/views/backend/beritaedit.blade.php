<!DOCTYPE html>
<html lang="en">

<head>
@include('backend.include.head')
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  @include('backend.include.nav')
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Edit Berita</div>
        <div class="card-body">
          <form action="{{url('')}}/admin/update/{{$data->id}}" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="email">Judul </label>
              <input type="text" class="form-control" placeholder="Masukkan Judul Berita" name="judul" value="{{$data->judul}}">
            </div>
            <div class="form-group">
              <label for="comment">Isi Berita</label>
              <textarea class="form-control" rows="5" name="isi">{{ $data->isi }}</textarea>
            </div>
            <div class="form-group">
              <label for="comment">Gambar</label><br>
              <img width="800" height="600" src="{{url('upload/berita')}}/{{$data->gambar}}"></img>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Upload Untuk Ganti Gambar</label>
              <input type="file" name="file" class="form-control-file mb-2">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    @include('backend.include.foot')
  </div>
</body>

</html>
