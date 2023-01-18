@extends('templates.home2')
@section('title')
@endsection
@section('nav')
<ul class="nav">
    <li class="nav-item ">
      <a class="nav-link" href="/dashboard2">
        <i class="material-icons">dashboard</i>
        <p> Tableau de board </p>
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
          <li class="nav-item active ">
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



  </ul>
@endsection
@section('navbar')

<a class="navbar-brand" href="#">Emprunteurs => Ajout Emprunteur</a>

@endsection

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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

<form action="/add_emprunt" method="POST">
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
                                <input type="text" class="form-control" name="identifiant" id="identifiant">
                        </div>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label"><i class="fas fa-user"></i> Nom:</label>
                        <div class="col-md-7">
                            <div class="form-group has-default">
                                <input type="text" class="form-control" name="nom" id="nom">
                        </div>
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label"><i class="fas fa-map-marker-alt"></i> Adresse:</label>
                            <div class="col-md-7">
                            <div class="form-group has-default">
                                <input type="text" class="form-control" name="adresse" id="adresse">
                            </div>
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-5 col-form-label"><i class="fas fa-phone"></i> Numéro de téléphone :</label>
                            <div class="col-md-7">
                            <div class="form-group has-default">
                                <input type="text" class="form-control" name="telephone" id="telephone">
                            </div>
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-5 col-form-label"><i class="fas fa-envelope"></i> Adresse e-mail :</label>
                            <div class="col-md-7">
                            <div class="form-group has-default">
                                <input type="text" class="form-control" name="email" id="email">
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
                                <textarea class="form-control" name="infofinancieres" id="infofinancieres"></textarea>
                        </div>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-5 col-form-label"><i class="fas fa-file-alt"></i> Détails du prêt:</label>
                        <div class="col-md-7">
                            <div class="form-group has-default">
                                <textarea class="form-control" name="detailsdupret" id="detailsdupret"></textarea>
                        </div>
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-5 col-form-label"><i class="fas fa-credit-card"></i> Informations de paiement:</label>
                            <div class="col-md-7">
                            <div class="form-group has-default">
                                <textarea class="form-control" name="infopaiement" id="infopaiement"></textarea>
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
                                <textarea class="form-control" name="historique" id="historique"></textarea>
                        </div>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-5 col-form-label"><i class="fas fa-money-bill"></i> Statut de la créance:</label>
                        <div class="col-md-7">
                            <div class="form-group has-default">
                                <select class="form-control" name="statutcreance" id="statutcreance">
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
                <button type="submit" class="btn btn-primary ">Ajouter</button>
            </div>
        </div>
    </div>
</form>

@endsection
