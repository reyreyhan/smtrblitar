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
          <i class="fa fa-table"></i> Saran</div>
        <div class="card-body">
            <div class="form-group">
              <label for="email">Nama </label>
              <input type="text" class="form-control" name="nama" value="{{$data->nama}}">
            </div>
            <div class="form-group">
              <label for="email">Email </label>
              <input type="text" class="form-control"  name="judul" value="{{$data->email}}">
            </div>
            <div class="form-group">
              <label for="comment">Saran</label>
              <textarea class="form-control" rows="5" name="saran">{{ $data->saran }}</textarea>
            </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    @include('backend.include.foot')
  </div>
</body>

</html>
