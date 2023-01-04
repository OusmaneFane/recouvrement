@extends('templates.home')
@section('nav')
<ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="/dashboard">
        <i class="material-icons">dashboard</i>
        <p> Tableau de board </p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
        <i class="material-icons">image</i>
        <p> Prospects
          <b class="caret"></b>
        </p>
      </a>
      <div class="collapse" id="pagesExamples">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="/add_prospect">
              <span class="sidebar-mini"> P </span>
              <span class="sidebar-normal"> Ajout Prospect </span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/edit">
              <span class="sidebar-mini"> RS </span>
              <span class="sidebar-normal"> Modification Prospect </span>
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
        <i class="material-icons">apps</i>
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
        <i class="material-icons">content_paste</i>
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
    <li class="nav-item active">
      <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
        <i class="material-icons">grid_on</i>
        <p> Remise
          <b class="caret"></b>
        </p>
      </a>
      <div class="collapse show" id="tablesExamples">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="/add_remise">
              <span class="sidebar-mini"> RT </span>
              <span class="sidebar-normal"> Ajout Remise </span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/edit_remise">
              <span class="sidebar-mini"> ET </span>
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
        <i class="material-icons">place</i>
        <p> Créance
          <b class="caret"></b>
        </p>
      </a>
      <div class="collapse" id="mapsExamples">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="/add_debiteur">
              <span class="sidebar-mini"> GM </span>
              <span class="sidebar-normal"> Ajout Débiteur </span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/import_creance">
              <span class="sidebar-mini"> FSM </span>
              <span class="sidebar-normal"> Import Créance </span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <span class="sidebar-mini"> VM </span>
              <span class="sidebar-normal"> Historique Créance </span>
            </a>
          </li>
          <li class="nav-item ">
              <a class="nav-link" href="#">
                <i class="material-icons">widgets</i>
                <p> Modification Créance </p>
              </a>
            </li>
          <li class="nav-item ">
              <a class="nav-link" href="/add_creance">
                <i class="material-icons">timeline</i>
                <p> Ajout Créance </p>
              </a>
          </li>
        </ul>
      </div>
    </li>
   
   
    <li class="nav-item ">
      <a class="nav-link" href="/default/examples/calendar.html">
        <i class="material-icons">date_range</i>
        <p> Calendar </p>
      </a>
    </li>
  </ul>
@endsection
@section('navbar')
<a class="navbar-brand" href="#">Remise => Modification Remise</a>
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
<form method="POST" action="/remise/{{ $data->id }}">
        @method('PUT')
        @csrf
    <div class="container-fluid">
        <div class="row">
          <div class="col-sm">
            <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                      <h4 class="card-title">1</h4>
                    </div>
                  </div>

                <div class="card-body ">
                    <div class="form-horizontal">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-md-5 col-form-label">Code creancier</label>
                  <div class="col-md-5">
                    <div class="form-group has-default">
                    <input type="text" class="form-control" name="code_creancier" placeholder="Code" value="{{ $data->code_creancier }}" >
                  </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 col-form-label">Contrat</label>
                  <div class="col-md-7">
                    <div class="form-group has-default">
                    <input type="text" class="form-control" name="contrat" placeholder="Contrat" value="{{ $data->contrat }}">
                  </div>
                </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Agence</label>
                    <div class="col-md-7">
                    <div class="form-group has-default">
                      <input type="text" class="form-control" name="agence" placeholder="Agence" value="{{ $data->agence }}">
                    </div>
                </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Type de Remise</label>
                    <div class="col-md-7">
                    <div class="form-group has-default">
                      <input type="text" class="form-control" name="type_remise" placeholder="Type de remise" value="{{ $data->type_remise }}">
                    </div>
                </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Objet Remise</label>
                    <div class="col-md-7">
                    <div class="form-group has-default">
                      <input type="text" class="form-control" name="objet_remise" placeholder="Objet Remise" value="{{ $data->objet_remise }}">
                    </div>
                </div>
                  </div>
              </div>

            </div>
          </div>


      </div>
      <div class="col-sm">
        <div class="card ">
            <div class="card-header card-header-rose card-header-text">
              <div class="card-text">
                <h4 class="card-title">2</h4>
              </div>
            </div>

            <div class="card-body ">
                <div class="form-horizontal">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-5 col-form-label">NomPrenom RS Créancier</label>
                  <div class="col-md-7">
                    <div class="form-group has-default">
                    <input type="text" class="form-control" name="rs_creancier" placeholder="NomPrenom RS Créancier" value="{{ $data->rs_creancier }}">
                  </div>
                </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-5 col-form-label">Nom Remise</label>
                  <div class="col-md-7">
                    <div class="form-group has-default">
                    <input type="text" class="form-control" name="nom_remise" placeholder="Nom remise" value="{{ $data->nom_remise }}">
                  </div>
                </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-5 col-form-label">Apporteur Remise</label>
                    <div class="col-md-7">
                    <div class="form-group has-default">
                      <input type="text" class="form-control" name="app_remise" placeholder="Apporteur remise" value="{{ $data->app_remise }}">
                    </div>
                </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-5 col-form-label">Date Réception</label>
                    <div class="col-md-7">
                    <div class="form-group has-default">
                      <input type="date" class="form-control" name="date_reception" placeholder="Date receptipn" value="{{ $data->date_reception }}">
                    </div>
                </div>
                  </div>
              </div>

            </div>
          </div>


      </div>
      <div class="col-sm">

        <div class="card ">
            <div class="card-header card-header-rose card-header-text">
              <div class="card-text">
                <h4 class="card-title">3</h4>
              </div>
            </div>

            <div class="card-body ">
                <div class="form-horizontal">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-5 col-form-label">Filiale</label>
                  <div class="col-md-7">
                    <div class="form-group has-default">
                    <input type="text" class="form-control" name="filiale" placeholder="Filiale" value="{{ $data->filiale }}">
                  </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-5 col-form-label">Type Agence</label>
                  <div class="col-md-7">
                    <div class="form-group has-default">
                    <input type="text" class="form-control" name="type_agence" placeholder="Type Agence" value="{{ $data->type_agence }}">
                  </div>
                  </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-5 col-form-label">Chargé Client</label>
                    <div class="col-md-7">
                    <div class="form-group has-default">
                      <input type="text" class="form-control" name="charge_client" placeholder="Chargé Client" value="{{ $data->charge_client }}">
                    </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-5 col-form-label">Nombre Dossier</label>
                    <div class="col-md-7">
                    <div class="form-group has-default">
                      <input type="text" class="form-control" name="nbre_dossier" placeholder="Nombre Dossier" value="{{ $data->nbre_dossier }}">
                    </div>
                    </div>
                  </div>

              </div>

            </div>

          </div>

      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary ">Modifier</button>
      </div>
      </div>
    </div>
</form>
</div>


@endsection
