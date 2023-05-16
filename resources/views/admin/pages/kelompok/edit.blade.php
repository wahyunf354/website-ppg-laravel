@extends('admin.layouts.index')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Kelompok</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('kelompok.index')}}">Kelompok</a></li>
            <li class="breadcrumb-item active">Mengubah Data Kelompok</li>
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
            <h2>Mengubah Data <strong>Kelompok</strong></h2>
            <p class="lead mb-5">
              Kelompok yang diinputkan adalah kelompok dari Medan Timur 1
            </p>
          </div>
        </div>
        <div class="col-7">
          <form action="{{route('kelompok.update', $kelompok->id)}}" method="post">
            @method('put')
            @csrf
            <div class="form-group">
              <label for="name">Nama</label>
              <input type="text" name="name" id="name" class="form-control form-sm @error('name') is-invalid @enderror" placeholder="Masukan kelompok..." value="{{$kelompok->name}}" />
              <div id="name" class="invalid-feedback">
                {{$errors->first('name')}}
              </div>
            </div>

            <div class="form-group">
              <label for="desa">Desa</label>
              <select type="text" name="desa" id="desa" class="form-control form-sm @error('desa') is-invalid @enderror">
                <option value="">-- Pilih Desa ---</option>
                @foreach($desas as $key => $row)
                @if($row->id == $kelompok->desa_id)
                <option selected value="{{$row->id}}">{{$row->name}}</option>
                @else
                <option value="{{$row->id}}">{{$row->name}}</option>
                @endif
                @endforeach
              </select>
              <div id="desa" class="invalid-feedback">
                {{$errors->first('desa')}}
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
