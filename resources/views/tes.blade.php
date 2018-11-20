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
      <div class="panel-heading">Pilih Zona Untuk Mendapatkan Subzona</div>
        <div class="panel-body">
            <form action="{{url('')}}/zona" method="post" enctype="multipart/form-data">
                <div class="form-group col-md-12">
                    <label for="title">Pilih Zona:</label>
                    <select name="zona" class="form-control" style="width:350px">
                        <option value="">--- Pilih Zona ---</option>
                        @foreach ($data as $u)
                            <option value="{{ $u->ID }}">{{ $u->ZONA }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <label for="title">Subzona:</label>
                    <select name="subzona" class="form-control" style="width:350px">
                    </select>
                </div>
                <!--<div class="form-group">
                    <label for="title">Kategori:</label>
                    <select name="kategori" class="form-control" style="width:350px">
                        <option value="1">Bersyarat</option>
                        <option value="2">Dilarang</option>
                        <option value="3">Perijinan</option>
                        <option value="4">Terbatas</option>
                    </select>
                </div>-->
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-danger">Search</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="zona"]').on('change', function() {
            var zonaID = $(this).val();
            if(zonaID) {
                $.ajax({
                    url: '/zona/'+zonaID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="subzona"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="subzona"]').append('<option value="'+ value.ID +'">'+ value.SUBZONA +'</option>');
                        });
                    }
                });
            }else{
                $('select[name="subzona"]').empty();
            }
        });
    });
</script>

</body>
</html>