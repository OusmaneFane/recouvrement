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
                {{-- <li class="nav-item ">
                    <a class="nav-link" href="/default/examples/pages/timeline.html">
                    <span class="sidebar-mini"> T </span>
                    <span class="sidebar-normal"> Timeline </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/default/examples/pages/login.html">
                    <span class="sidebar-mini"> LP </span>
                    <span class="sidebar-normal"> Login Page </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/default/examples/pages/register.html">
                    <span class="sidebar-mini"> RP </span>
                    <span class="sidebar-normal"> Register Page </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/default/examples/pages/lock.html">
                    <span class="sidebar-mini"> LSP </span>
                    <span class="sidebar-normal"> Lock Screen Page </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/default/examples/pages/user.html">
                    <span class="sidebar-mini"> UP </span>
                    <span class="sidebar-normal"> User Profile </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/default/examples/pages/error.html">
                    <span class="sidebar-mini"> E </span>
                    <span class="sidebar-normal"> Error Page </span>
                    </a>
                </li> --}}
                </ul>
            </div>
            </li>
            <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                <i class="fa fa-files-o" aria-hidden="true"></i>
                <p> Contrat
                <b class="caret"></b>
                </p>
            </a>
            <div class="collapse" id="componentsExamples">
                <ul class="nav">

                <li class="nav-item ">
                    <a class="nav-link" href="/default/examples/components/buttons.html">
                    <span class="sidebar-mini"> B </span>
                    <span class="sidebar-normal"> Buttons </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/default/examples/components/grid.html">
                    <span class="sidebar-mini"> GS </span>
                    <span class="sidebar-normal"> Grid System </span>
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
            <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                <i class="fa fa-address-card-o" aria-hidden="true"></i>
                <p> Créancier
                <b class="caret"></b>
                </p>
            </a>
            <div class="collapse" id="formsExamples">
                <ul class="nav">
                <li class="nav-item ">
                    <a class="nav-link" href="/default/examples/forms/regular.html">
                    <span class="sidebar-mini"> RF </span>
                    <span class="sidebar-normal"> Regular Forms </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/default/examples/forms/extended.html">
                    <span class="sidebar-mini"> EF </span>
                    <span class="sidebar-normal"> Extended Forms </span>
                    </a>
                </li>
                {{-- <li class="nav-item ">
                    <a class="nav-link" href="/default/examples/forms/validation.html">
                    <span class="sidebar-mini"> VF </span>
                    <span class="sidebar-normal"> Validation Forms </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/default/examples/forms/wizard.html">
                    <span class="sidebar-mini"> W </span>
                    <span class="sidebar-normal"> Wizard </span>
                    </a>
                </li> --}}
                </ul>
            </div>
            </li>
            <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
                <i class="fa fa-minus-square" aria-hidden="true"></i>
                <p> Remise
                <b class="caret"></b>
                </p>
            </a>
            <div class="collapse" id="tablesExamples">
                <ul class="nav">
                <li class="nav-item ">
                    <a class="nav-link" href="/add_remise">
                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                    <span class="sidebar-normal"> Ajout Remise </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/edit_remise">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    <span class="sidebar-normal"> Modification Remise </span>
                    </a>
                </li>
                {{-- <li class="nav-item ">
                    <a class="nav-link" href="/default/examples/tables/datatables.net.html">
                    <span class="sidebar-mini"> DT </span>
                    <span class="sidebar-normal"> DataTables.net </span>
                    </a>
                </li> --}}
                </ul>
            </div>
            </li>
            <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#mapsExamples">
                <i class="fa fa-id-badge" aria-hidden="true"></i>
                <p> Créance
                <b class="caret"></b>
                </p>
            </a>
            <div class="collapse" id="mapsExamples">
                <ul class="nav">
                <li class="nav-item ">
                    <a class="nav-link" href="/add_debiteur">
                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                    <span class="sidebar-normal"> Ajout Débiteur </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/import_creance">
                        <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                    <span class="sidebar-normal"> Import Créance </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/historique">
                        <i class="fa fa-history" aria-hidden="true"></i>
                    <span class="sidebar-normal"> Historique Créance </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        <p> Modification Créance </p>
                    </a>
                    </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/add_creance">
                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                        <p> Ajout Créance </p>
                    </a>
                </li>
                </ul>
            </div>
            </li>


            {{-- <li class="nav-item ">
            <a class="nav-link" href="/default/examples/calendar.html">
                <i class="material-icons">date_range</i>
                <p> Calendar </p>
            </a>
            </li> --}}
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
