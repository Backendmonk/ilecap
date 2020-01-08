<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas Kelas {{$nama_kelas->nama_kelas}}</title>
      <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Font Awesome -->
<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
<!-- Theme style -->
<link rel="stylesheet" href="../../dist/css/adminlte.min.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
</head>
<body>
@if($cek=="dosen")
<h3><b><center>Tugas {{$nama_kelas->nama_kelas}} | Dosen {{$user->nama}}  </center></b></h3>
@else($cek=="mahasiswa")
<h3><b><center>Tugas {{$nama_kelas->nama_kelas}}</center></b></h3>
@endif
<a href="/chat"><button type="button" class="btn btn-dark">Back</button></a>
@if($cek=="dosen")
<a href="/add_tugas/{{$nama_kelas->id}}"><button type="button" class="btn btn-primary">Tambah Tugas {{$nama_kelas->nama_kelas}}</button></a>

@else($cek=="mahasiswa")

@endif

 <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                @if($cek=="dosen")
                  <th>Nama Tugas</th>
                  <th>Deskripsi</th>
                  <th>DiUpload</th>
                  <th>Pengumpul</th>
                  @else($cek=="mahasiswa")
                  <th>Nama Materi</th>
                  <th>jenis FIle</th>
                  <th>DiUpload</th>
                  <th>Upload Jawaban</th>
                  @endif
                
                </tr>
                </thead>
                <tbody>
                
              
                @foreach ($tugas as $tgs)
                @if($cek=="dosen")
                  <tr>
                  <td>{{$tgs->nama_tugas}}</td>
                  <td>{{$tgs->deskripsi}}</td>
                  <td>{{$tgs->created_at}}</td>
                  <td><a href="/data_tugas/{{$tgs->id}}"><button type="button" class="btn btn-primary">Lihat Tugas Mahasiswa {{$nama_kelas->nama_kelas}}</button></a></td>
                  </tr>
                  @else($cek=="mahasiswa")
                  <tr>
                  <td>{{$tgs->nama_tugas}}</td>
                  <td>{{$tgs->deskripsi}}</td>
                  <td>{{$tgs->created_at}}</td>
                  <td><a href="/jawab_tugas/{{$tgs->id}}"><button type="submit" class="btn btn-primary">Upload File</button></a></td>
                  </tr>
                  @endif
                @endforeach
                </tbody>
                
                </tfoot>
              </table>

</div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
     

        
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });


</script>
</body>
</html>