@extends('templates.home')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Ajout Prospect</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
    <div class="results">
        @if(Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif

        @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
        @endif
    </div>
    <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">Type</label>
        <div class="col-sm-2">
          <input type="type" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">Nature</label>
        <div class="col-sm-2">
          <input type="nature" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">Apporteur</label>
        <div class="col-sm-2">
          <input type="apporteur" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">Satut</label>
        <div class="col-sm-2">
          <input type="statut" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
        </div>
    </div>

    <div class="row g-3">
        <div class="col-sm-7">
          <input type="text" class="form-control" placeholder="City" aria-label="City">
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" placeholder="State" aria-label="State">
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" placeholder="Zip" aria-label="Zip">
        </div>
      </div>
      
@endsection