@extends('templates.home')
@section('title')
Tableau de Bord
@endsection
@section('nav')
<ul class="nav">
            <li class="nav-item active ">
            <a class="nav-link" href="/dashboard">
                <i class="material-icons">dashboard</i>
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
                    <span class="sidebar-normal"> Ajout Emprunteur </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/edit_emprunt">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    <span class="sidebar-normal"> Modification Emprunteur </span>
                    </a>
                </li>

                </ul>
            </div>
            </li>
            <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                <i class="fa fa-files-o" aria-hidden="true"></i>
                <p> Créances
                <b class="caret"></b>
                </p>
            </a>
            <div class="collapse" id="componentsExamples">
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
                {{-- <li class="nav-item ">
                    <a class="nav-link" href="/default/examples/components/panels.html">
                    <span class="sidebar-mini"> P </span>
                    <span class="sidebar-normal"> Panels </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/default/examples/components/sweet-alert.html">
                    <span class="sidebar-mini"> SA </span>
                    <span class="sidebar-normal"> Sweet Alert </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/default/examples/components/notifications.html">
                    <span class="sidebar-mini"> N </span>
                    <span class="sidebar-normal"> Notifications </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/default/examples/components/icons.html">
                    <span class="sidebar-mini"> I </span>
                    <span class="sidebar-normal"> Icons </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/default/examples/components/typography.html">
                    <span class="sidebar-mini"> T </span>
                    <span class="sidebar-normal"> Typography </span>
                    </a>
                </li> --}}
                </ul>
            </div>
            </li>
            
            
    
  </ul>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-warning card-header-icon">
          <div class="card-icon">
            <i class="fa fa-users" aria-hidden="true"></i>
          </div>
          <p class="card-category">Total Prospects</p>
          <h3 class="card-title">0</h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            {{-- <i class="material-icons text-danger">warning</i>
            <a href="#pablo">Get More Space...</a> --}}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-rose card-header-icon">
          <div class="card-icon">
            <i class="fa fa-files-o" aria-hidden="true"></i>
          </div>
          <p class="card-category">Total Contrats</p>
          <h3 class="card-title">0</h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            {{-- <i class="material-icons">local_offer</i> Tracked from Google Analytics --}}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-success card-header-icon">
          <div class="card-icon">
            <i class="fa fa-user-plus" aria-hidden="true"></i>
          </div>
          <p class="card-category">Total Débiteurs </p>
          <h3 class="card-title">0</h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            {{-- <i class="material-icons">date_range</i> Last 24 Hours --}}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-info card-header-icon">
          <div class="card-icon">
            <i class="fa fa-address-book"></i>
          </div>
          <p class="card-category">Total Créanciers</p>
          <h3 class="card-title">0</h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            {{-- <i class="material-icons">update</i> Just Updated --}}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
