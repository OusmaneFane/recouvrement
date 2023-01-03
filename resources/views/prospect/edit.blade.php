@extends('templates.home')

@section('navbar')
<a class="navbar-brand" href="">Prospect => Modification Prospect</a>
@endsection
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- Content Header (Page header) -->
    {{-- <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Prospect => Modification Prospect</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div>
    </section> --}}
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
    <section class="content mt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des Prospects</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="datatable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Code Creancier</th>
                    <th>Type</th>
                    <th>Nature</th>
                    <th>Nom/Prenom/RS</th>
                    <th>Agence</th>
                    <th></th>


                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data_prospects as $data)
                  <tr>
                    <td>{{$data->prospect_type}}</td>
                    <td>{{$data->data}}</td>
                    <td>{{$data->nom_resp}}</td>
                    <td> {{$data->apporteur}}</td>
                    <td>X</td>
                    <td  class="td-actions text-right">
                        <div class="btn-group btn-group-sm">
                            
                            <a href="/prospect/{{ $data->id }}/edit" ><i class="material-icons">edit</i></a>

                            <form method="POST" action="/prospect/{{ $data->id }}">
                                @method('DELETE')
                                @csrf
                                <button type="button" rel="tooltip" class="btn btn-danger btn-round">
                                    <i class="material-icons">close</i>
                                  </button>
                            </form>
                          </div>




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
    <!-- /.content -->

@endsection
