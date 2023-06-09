@extends('layout.admin.main')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  @component('components.breadcrumb')
  @slot('li_1') Data Gejala Kulit @endslot
  @slot('title') Ubah data @endslot
  @endcomponent


    <!-- Main content -->
    
    <section class="content ">
      <div class="ml-3 mt-3">
      <div class="card card-lightblue bg-light">
        <div class="card-header">
          <h3 class="card-title">Ubah Gejala</h3>
        </div>
        <form action="/gejalakulit/{{$edit->id}}" method="POST">
          @csrf
          @method('PUT')
            <div class="card-body">
                <div class="form-group">
                  <label for="kodejenis">Kode Gejala</label>
                  <input type="text" id="kode_gejala" name="kode_gejala" class="form-control @error('kode_gejala') is-invalid @enderror" value="{{$edit->kode_gejala}}" placeholder="G04">
                  @error('kode_gejala')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="nama">Nama Gejala</label>
                  <input type="text" id="nama" name="nama_gejala" class="form-control @error('nama_gejala') is-invalid @enderror" value="{{$edit->nama_gejala}}" placeholder="text">
                  @error('nama_gejala')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
            </div>
            <div class="card-footer">
            <div class="row">
              <div class="col-12">
                <!-- <button href="/gejalakulit" class="btn btn-secondary">Cancel</button> -->
                <input type="submit" href="" value="Ubah" class="btn btn-success float-right">
              </div>
            </div>
            </div>
        </form>
      </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

@endsection