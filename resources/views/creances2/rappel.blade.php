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
          <li class="nav-item ">
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
          <li class="nav-item active">
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
<div class="content">
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
    <form action="/add_rappelPaiement" method="POST">
        @csrf
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
            <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                <div class="card-icon">
                    <i class="material-icons">today</i>
                </div>
                <h4 class="card-title">Date d'envoi du rappel:</h4>
                </div>
                <div class="card-body ">
                <div class="form-group">
                    <input type="date" class="form-control datetimepicker" name="date_envoi" >
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                <div class="card-icon">
                    <i class="material-icons">library_books</i>
                </div>
                <h4 class="card-title">Contenu du rappel:</h4>
                </div>
                <div class="card-body ">
                <div class="form-group">
                    <input type="text" class="form-control datepicker" name="contenu">
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                <div class="card-icon">
                    <i class="material-icons">av_timer</i>
                </div>
                <h4 class="card-title">ID de la créance:</h4>
                </div>
                <div class="card-body ">
                <div class="form-group">
                    <input type="text" class="form-control timepicker" name="id_creance">
                </div>
                </div>
            </div>
            </div>
            
        </div>
        
     </div>
     <div class="text-center">
        <button type="submit" class="btn btn-primary ">Confirmer le paiement </button>
    </div>
    </form>
</div>
@endsection