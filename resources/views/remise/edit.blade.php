@extends('templates.home')
@section('navbar')
<li class="nav-item d-none d-sm-inline-block">
    <a href="#" class="nav-link">Remise >></a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
    <a href="#" class="nav-link">Modification Remise</a>
  </li>
@endsection
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">


    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des Remises</h3>
              </div>
              <!-- /.card-header -->
                <div class="card-body">
                    <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Code Creancier</th>
                                <th>Contrat</th>
                                <th>Agence</th>
                                <th>Type Remise</th>
                                <th>Nom remise</th>
                                <th>Nbre Dossier</th>
                                <th>Modification</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_remise as $data)
                        <tr>
                            <td>{{$data->code_creancier}}</td>
                            <td>{{$data->contrat}}</td>
                            <td>{{$data->agence}}</td>
                            <td>{{$data->type_remise}}</td>
                            <td>{{$data->nom_remise}}</td>
                            <td>{{$data->nbre_dossier}}</td>
                            <td><a href="/remise/{{ $data->id }}/edit" ><i class="bi bi-pencil-square"></i></a>
                            {{-- <form method="POST" action="/remise/{{ $data->id }}">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger"><i class="bi bi-x-circle-fill"></i></button>
                            </form> --}}
                        </td>

                        </tr>
                            @endforeach
                        </tfoot>
                    </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

@endsection
