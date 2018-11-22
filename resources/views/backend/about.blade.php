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
          <i class="fa fa-table"></i> All Berita</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Saran</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $u)
                <tr>
                  <td>{{$u->nama}}</td>
                  <td>{{$u->email}}</td>
                  <td>{!!\Illuminate\Support\Str::words($u->saran, 5)!!}</td>
                  <td>
                    <a href="{{url('admin/about')}}/{{$u->id}}" class="btn btn-primary" role="button">Detail</a>
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
