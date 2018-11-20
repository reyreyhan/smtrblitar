<!DOCTYPE html>
<html>
<head>
    <script src="{{url('dropdown')}}/dropdown.js"></script>
    <link rel="stylesheet" href="{{url('dropdown')}}/dropdown.min.css">
</head>

<body>
    <br>
<div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">Hasil Pilihan</div>
        <div class="panel-body">
            <div class="form-group">
                <label for="title">Zona</label>
                <p>{{ $zona->ZONA }}</p>
            </div>
            <br>
            <div class="form-group">
                <label for="title">Subzona</label>
                <p>{{ $subzona->SUBZONA }}</p>
            </div>
            <br>
            <div class="form-group">
                <label for="title">Bersyarat</label>
                <?php $i = 1 ?>
                @foreach ($bersyarat as $u )
                    <table style="width:100%" class="table table-striped">
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td align="justify">{{ $u->BERSYARAT }}</td>
                    </tr>
                    </table>
                @endforeach
            </div>
            <br>
            <div class="form-group">
                <label for="title">Dilarang</label>
                <?php $j = 1 ?>
                @foreach ($dilarang as $u )
                    <table style="width:100%" class="table table-striped">
                    <tr>
                        <td>{{ $j++ }}</td>
                        <td align="justify">{{ $u->DILARANG }}</td>
                    </tr>
                    </table>
                @endforeach
            </div>
            <br>
            <div class="form-group">
                <label for="title">Perijinan</label>
                <?php $k = 1 ?>
                @foreach ($perijinan as $u )
                    <table style="width:100%" class="table table-striped">
                    <tr>
                        <td>{{ $k++ }}</td>
                        <td align="justify">{{ $u->DIIJINKAN }}</td>
                    </tr>
                    </table>
                @endforeach
            </div>
            <br>
            <div class="form-group">
                <label for="title">Terbatas</label>
                <?php $l = 1 ?>
                @foreach ($terbatas as $u )
                    <table style="width:100%" class="table table-striped">
                    <tr>
                        <td>{{ $l++ }}</td>
                        <td align="justify">{{ $u->TERBATAS }}</td>
                    </tr>
                    </table>
                @endforeach
            </div>
        </div>
    </div>
</div>

</body>
</html>