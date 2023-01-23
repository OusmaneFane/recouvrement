@extends('templates.home2')
@section('navbar')
<a class="navbar-brand" href="#">Paiement => Modification un paiement</a>
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
@endsection