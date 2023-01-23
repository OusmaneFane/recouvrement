@extends('templates.home2')
@section('title')
@endsection
@section('nav')
<ul class="nav">
    <li class="nav-item ">
      <a class="nav-link" href="/dashboard2">
        <i class="material-icons">dashboard2</i>
        <p> Tableau de board2 </p>
      </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
        <i class="fa fa-users" aria-hidden="true"></i>
        <p> Emprunteurs
          <b class="caret"></b>
        </p>
      </a>
      <div class="collapse show" id="pagesExamples">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/add_emprunt">
                <i class="fa fa-plus-square" aria-hidden="true"></i>
              <span class="sidebar-normal"> Ajout Emprunt </span>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="/edit_emprunt">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
              <span class="sidebar-normal"> Modification Emprunt </span>
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

          <li class="nav-item active">
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



  </ul>
@endsection
@section('navbar')

<a class="navbar-brand" href="#">Emprunteurs => Modification Emprunteur</a>

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

<form method="POST" action="/emprunteur/{{ $data->id }}" >
    @method('PUT')
    @csrf
            <div class="container-fluid">
                <div class="row">
                <div class="col-sm">
                    <div class="card ">
                        <div class="card-header card-header-rose card-header-text">
                            <div class="card-text">
                            <h4 class="card-title"><i class="fas fa-id-card"></i> Informations de l'emprunteur</h4>
                            </div>
                        </div>

                        <div class="card-body ">
                            <div class="form-horizontal">
                        <div class="form-group row">
                        <label for="inputEmail3" class="col-md-5 col-form-label"><i class="fas fa-id-card"></i> Identifiant:</label>
                        <div class="col-md-5">
                            <div class="form-group has-default">
                                <input type="text" class="form-control" name="identifiant" id="identifiant" value="{{ $data->identifiant }}">
                        </div>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label"><i class="fas fa-user"></i> Nom:</label>
                        <div class="col-md-7">
                            <div class="form-group has-default">
                                <input type="text" class="form-control" name="nom" id="nom" value="{{ $data->nom }}">
                        </div>
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label"><i class="fas fa-map-marker-alt"></i> Adresse:</label>
                            <div class="col-md-7">
                            <div class="form-group has-default">
                                <input type="text" class="form-control" name="adresse" id="adresse" value="{{ $data->adresse }}">
                            </div>
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-5 col-form-label"><i class="fas fa-phone"></i> Numéro de téléphone :</label>
                            <div class="col-md-7">
                            <div class="form-group has-default">
                                <input type="text" class="form-control" name="telephone" id="telephone" value="{{ $data->telephone }}">
                            </div>
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-5 col-form-label"><i class="fas fa-envelope"></i> Adresse e-mail :</label>
                            <div class="col-md-7">
                            <div class="form-group has-default">
                                <input type="text" class="form-control" name="email" id="email" value="{{ $data->email }}">
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
                        <h4 class="card-title"><i class="fas fa-dollar-sign"></i> Informations financières:</h4>
                    </div>
                    </div>

                    <div class="card-body ">
                        <div class="form-horizontal">
                        <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-5 col-form-label"><i class="fas fa-dollar-sign"></i> Informations financières:</label>
                        <div class="col-md-7">
                            <div class="form-group has-default">
                                <input class="form-control" name="infofinancieres" id="infofinancieres" value="{{ $data->infofinancieres }}"></input>
                        </div>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-5 col-form-label"><i class="fas fa-file-alt"></i> Détails du prêt:</label>
                        <div class="col-md-7">
                            <div class="form-group has-default">
                                <input class="form-control" name="detailsdupret" id="detailsdupret" value="{{ $data->detailsdupret }}"></input>
                        </div>
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-5 col-form-label"><i class="fas fa-credit-card"></i> Informations de paiement:</label>
                            <div class="col-md-7">
                            <div class="form-group has-default">
                                <input class="form-control" name="infopaiement" id="infopaiement" value="{{ $data->infopaiement }}"></input>
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
                        <h4 class="card-title">Détails</h4>
                    </div>
                    </div>

                    <div class="card-body ">
                        <div class="form-horizontal">
                        <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-5 col-form-label"><i class="fas fa-history"></i> Historique des communications:</label>
                        <div class="col-md-7">
                            <div class="form-group has-default">
                                <input class="form-control" name="historique" id="historique" value="{{ $data->historique }}"></input>
                        </div>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-5 col-form-label"><i class="fas fa-money-bill"></i> Statut de la créance:</label>
                        <div class="col-md-7">
                            <div class="form-group has-default">
                                <select class="form-control" name="statutcreance" id="statutcreance" value="{{ $data->historique }}">
                                    <option value="en cours de recouvrement">En cours de recouvrement</option>
                                    <option value="résolue">Résolue</option>
                                </select>
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


@endsection
