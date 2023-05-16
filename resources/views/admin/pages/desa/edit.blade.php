@extends('admin.layouts.index')
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
    <div class="card">
      <div class="card-body row">
        <div class="col-5 text-center d-flex align-items-center justify-content-center">
          <div class="">
            <h2>Mengubah Data <strong>Desa</strong></h2>
            <p class="lead mb-5">
              Desa yang diinputkan adalah desa dari Medan Timur 1
            </p>
          </div>
        </div>
        <div class="col-7">
          <form action="{{route('desa.update', $desa->id)}}" method="post">
            @method('put')
            @csrf
            <div class="form-group">
              <label for="name">Nama</label>
              <input type="text" name="name" id="name" class="form-control form-sm" placeholder="Masukan Desa..." value="{{$desa->name}}" />
            </div>

            <div class="form-group">
              <input type="submit" class="btn btn-sm btn-outline-primary" value="Submit">
            </div>
          </form>
        </div>
      </div>
    </div>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
