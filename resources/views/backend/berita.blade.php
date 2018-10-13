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
      <a href="{{url('admin/create')}}" class="btn btn-success" role="button">Input Berita</a>
      <br>
      <br>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> All Berita</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Judul</th>
                  <th>Isi</th>
                  <th>Tanggal Post</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $u)
                <tr>
                  <td>{{$u->judul}}</td>
                  <td>{!!\Illuminate\Support\Str::words($u->isi, 5)!!}</td>
                  <td>{{$u->created_at}}</td>
                  <td>
                    <a href="{{url('admin/edit')}}/{{$u->id}}" class="btn btn-primary" role="button">Edit</a>
                    <a href="{{url('admin/delete')}}/{{$u->id}}" class="btn btn-danger" role="button">Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
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
