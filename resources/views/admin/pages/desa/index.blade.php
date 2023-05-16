@extends('admin.layouts.index')
@section('add_head')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('assets_admin')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('assets_admin')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('assets_admin')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Desa</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item" href="{{route('dashboard')}}">Dashboard</li>
            <li class="breadcrumb-item active">Desa</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    @if(session('success'))
    <div class="alert alert-success">
      {{session('success')}}
    </div>
    @endif
    <div class="card">
      <div class="card-header">
        <a href="{{route('desa.create')}}" class="btn btn-sm btn-outline-primary">Tambah Data Desa</a>
      </div>
      <div class="card-body">
        <table id="table_desa" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Desa</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>

            @foreach($desas as $key => $desa)
            <tr>
              <td>{{$key +1}}</td>
              <td>{{$desa->name}}</td>
              <td>
                <a href="{{route('desa.edit', $desa->id)}}" class="btn btn-sm btn-info">Edit</a>
                <form action="{{route('desa.destroy', $desa->id)}}" method="post">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-sm btn-info">
                    Hapus
                  </button>
                </form>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>

      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

@section('js')
<!-- DataTables  & Plugins -->
<script src="{{asset('assets_admin')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('assets_admin')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('assets_admin')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('assets_admin')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('assets_admin')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('assets_admin')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('assets_admin')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('assets_admin')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('assets_admin')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('assets_admin')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('assets_admin')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('assets_admin')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Page specific script -->
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true
      , "lengthChange": false
      , "autoWidth": false
      , "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#table_desa').DataTable({
      "paging": true
      , "lengthChange": false
      , "searching": false
      , "ordering": true
      , "info": true
      , "autoWidth": false
      , "responsive": true
    , });
  });

</script>

@endsection
