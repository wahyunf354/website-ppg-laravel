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
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('desa.index')}}">Desa</a></li>
            <li class="breadcrumb-item active">Menambah Data Desa</li>
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
            <h2>Menambah Data <strong>Desa</strong></h2>
            <p class="lead mb-5">
              Desa yang diinputkan adalah desa dari Medan Timur 1
            </p>
          </div>
        </div>
        <div class="col-7">
          <form action="{{route('desa.store')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="name">Nama</label>
              <input type="text" name="name" id="name" class="form-control  @error('name') is-invalid @enderror form-sm" placeholder="Masukan Desa..." value="{{old('name')}}" />
              <div id="name" class="invalid-feedback">
                {{$errors->first('name')}}
              </div>
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
