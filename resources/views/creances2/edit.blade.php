@extends('templates.home2')
@section('navbar')

@endsection
@section('nav')
<ul class="nav">
    <li class="nav-item ">
      <a class="nav-link" href="/dashboard2">
        <i class="material-icons">dashboard2</i>
        <p> Tableau de board2 </p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
        <i class="fa fa-users" aria-hidden="true"></i>
        <p> Emprunteurs
          <b class="caret"></b>
        </p>
      </a>
      <div class="collapse" id="pagesExamples">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="/add_emprunt">
                <i class="fa fa-plus-square" aria-hidden="true"></i>
              <span class="sidebar-normal"> Ajout Emprunt </span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/edit_emprunt">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
              <span class="sidebar-normal"> Modification Emprunt </span>
            </a>
          </li>

        </ul>
      </div>
    </li>
    <li class="nav-item active">
      <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
        <i class="fa fa-files-o" aria-hidden="true"></i>
        <p> Creances
          <b class="caret"></b>
        </p>
      </a>
      <div class="collapse show" id="componentsExamples">
        <ul class="nav">

          <li class="nav-item ">
            <a class="nav-link" href="/add_creance2">
                <i class="fa fa-plus-square" aria-hidden="true"></i>
            <span class="sidebar-normal"> Ajouter Créance </span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/edit_creance2">
              <span class="sidebar-mini"> GS </span>
              <span class="sidebar-normal"> Modifier creances </span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/paiement">
              <span class="sidebar-mini"> GS </span>
              <span class="sidebar-normal"> Paiement </span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/rappel">
              <span class="sidebar-mini"> GS </span>
              <span class="sidebar-normal"> Rappel Paiement </span>
            </a>
          </li>

        </ul>
      </div>
    </li>
    



  </ul>
@endsection
@section('content')
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
            <h3 class="card-title">Liste des Emprunteurs</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="datatable" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Id Creance</th>
                <th>Montant</th>
                <th>Date d'écheance</th>
                <th>ID Emprunteur</th>
                <th>Montant payé</th>
                <th>Date de création</th>
                <th>Modification</th>

              </tr>
              </thead>
              <tbody>
                @foreach ($creances as $creance)
              <tr>
                <td>{{$creance->id}}</td>
                <td>{{$creance->montant}}</td>
                <td>{{$creance->date_echeance}}</td>
                <td>{{ $creance->emprunteur->identifiant ?? 'N/A'  }}</td>

                <td>@foreach($creance->paiement as $paiement)
                    {{ $paiement->montant ?? 'N/A'}}
                @endforeach</td>
                <td>{{$creance->date_dette}}</td>
                <td>
                        <div class="btn-group btn-group-sm">

                            <a href="/pay/{{ $data->id }}/edit" ><i class="material-icons">edit</i></a>

                            <form method="POST" action="/pay/{{ $data->id }}">
                                @method('DELETE')
                                @csrf
                                <button type="button" rel="tooltip" class="btn btn-danger btn-round">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
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
<!-- /.content -->
@endsection
