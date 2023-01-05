@extends('templates.home')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
@section('nav')
<ul class="nav">
    <li class="nav-item ">
      <a class="nav-link" href="/dashboard">
        <i class="material-icons">dashboard</i>
        <p> Tableau de board </p>
      </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
        <i class="fa fa-users" aria-hidden="true"></i>
        <p> Prospects
          <b class="caret"></b>
        </p>
      </a>
      <div class="collapse show" id="pagesExamples">
        <ul class="nav">
          <li class="nav-item active ">
            <a class="nav-link" href="/add_prospect">
                <i class="fa fa-plus-square" aria-hidden="true"></i>
              <span class="sidebar-normal"> Ajout Prospect </span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/edit">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
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
<a class="navbar-brand" href="#">Propect => Ajout Prospect</a>
@endsection
@section('content')
<form action="/data_prospect" method="post">
    @csrf
    <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
            
          <div class="card ">
            <div class="card-header card-header-rose card-header-icon">
              <div class="card-icon">
                <i class="material-icons">mail_outline</i>
              </div>
              <h4 class="card-title">Stacked Form</h4>
            </div>
            <div class="card-body ">
                <div class="form-horizontal">
                    <div class="row">
                      <label class="col-md-3 col-form-label"><b>Type</b></label>
                      <div class="col-md-9">
                        <div class="form-group has-default">
                          <input type="text" name="prospect_type" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label">Nature</label>
                        <div class="col-md-9">
                          <div class="form-group has-default">
                            <input type="text" name="nature" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-md-3 col-form-label">Apporteur</label>
                        <div class="col-md-9">
                          <div class="form-group has-default">
                            <input type="text" name="apporteur" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-md-3 col-form-label">Statut</label>
                        <div class="col-md-9">
                          <div class="form-group has-default">
                            <input type="text" name="statut" class="form-control">
                          </div>
                        </div>
                      </div>

                </div>
            </div>
            
          </div>
        </div>
        <div class="col-md-6">
          <div class="card ">
            <div class="card-header card-header-rose card-header-icon">
              <div class="card-icon">
                <i class="material-icons">contacts</i>
              </div>
              <h4 class="card-title">Horizontal Form</h4>
            </div>
            <div class="card-body ">
              <div class="form-horizontal">
                <div class="row">
                  <label class="col-md-3 col-form-label">Pays</label>
                  <div class="col-md-9">
                    <div class="form-group has-default">
                      <input type="text" name="pays" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                    <label class="col-md-3 col-form-label">Type Apporteur</label>
                    <div class="col-md-9">
                      <div class="form-group has-default">
                        <input type="text" name="type_apporteur" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-md-3 col-form-label">Chargé Client</label>
                    <div class="col-md-9">
                      <div class="form-group has-default">
                        <input type="text" name="charge_client" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-md-3 col-form-label">Capital</label>
                    <div class="col-md-9">
                      <div class="form-group has-default">
                        <input type="text" name="capital" class="form-control">
                      </div>
                    </div>
                  </div>
               
            </div>
            </div>
           
          </div>
        </div>
        <div class="col-md-12">
          <div class="card ">
            <div class="card-header card-header-rose card-header-text">
              <div class="card-text">
                <h4 class="card-title">Form Elements</h4>
              </div>
            </div>
            <div class="card-body ">
                <div class="row g-3">
                    <div class="col-sm-4">
    
                    <input type="text" class="form-control" placeholder="Forme Juridique" name="forme_juridique" value="{{$data->forme_juridique}}"><br>
                    <input type="text" class="form-control" placeholder="Secteur d'activité" name="secteur_activite" value="{{$data->secteur_activite}}"><br>
                    <input type="text" class="form-control" placeholder="RC" name="rc" value="{{$data->rc}}"><br>
                    <input type="text" class="form-control" placeholder="Nom responsable" name="nom_resp" value="{{$data->nom_resp}}"><br>
    
                    </div>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Raison Sociale" name="raison_sociale" value="{{$data->raison_sociale}}"><br>
                    <input type="text" class="form-control" placeholder="Activité" name="activite" value="{{$data->activite}}"><br>
                    <input type="text" class="form-control" placeholder="MF/Réf Patiente" name="mf_ref" value="{{$data->mf_ref}}"><br>
                    <input type="text" class="form-control" placeholder="Prénom Responsable" name="prenom_resp" value="{{$data->prenom_resp}}"><br>
    
                    </div>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Abréviation" name="abrev" value="{{$data->abrev}}"><br>
                    <input type="text" class="form-control" placeholder="Désignation" name="designation" value="{{$data->designation}}"><br>
                    <input type="text" class="form-control" placeholder="Type TVA" name="type_tva" value="{{$data->type_tva}}"><br>
                    <input type="text" class="form-control" placeholder="Qualité Responsable" name="qua_resp" value="{{$data->qua_resp}}">
    
                    </div>
                </div>
            </div>
          </div>
        </div>
        
        {{-- <div class="col-md-12">
          <div class="card ">
            <div class="card-header card-header-rose card-header-text">
              <div class="card-text">
                <h4 class="card-title">Input Variants</h4>
              </div>
            </div>
            <div class="card-body ">
              <form method="get" action="/" class="form-horizontal">
                <div class="row">
                  <label class="col-sm-2 col-form-label label-checkbox">Custom Checkboxes &amp; radios</label>
                  <div class="col-sm-4 col-sm-offset-1 checkbox-radios">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="" checked> Checked
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value=""> Unchecked
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check disabled">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="" disabled checked> Disabled Checked
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check disabled">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="" disabled> Disabled Unchecked
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-5 checkbox-radios">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="exampleRadios" value="option1" checked> Radio is on
                        <span class="circle">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="exampleRadios" value="option2"> Radio is off
                        <span class="circle">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check disabled">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="exampleRadios2" value="option1" checked disabled> Disabled Radio is on
                        <span class="circle">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check disabled">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="exampleRadios2" value="option2" disabled> Disabled Radio is off
                        <span class="circle">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">Input with success</label>
                  <div class="col-sm-10">
                    <div class="form-group has-success">
                      <label for="exampleInput2" class="bmd-label-floating">Success input</label>
                      <input type="text" class="form-control" id="exampleInput2">
                      <span class="form-control-feedback">
                        <i class="material-icons">done</i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">Input with error</label>
                  <div class="col-sm-10">
                    <div class="form-group has-danger">
                      <label for="exampleInput3" class="bmd-label-floating">Error input</label>
                      <input type="email" class="form-control" id="exampleInput3">
                      <span class="form-control-feedback">
                        <i class="material-icons">clear</i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">Column sizing</label>
                  <div class="col-sm-10">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder=".col-md-3">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder=".col-md-4">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder=".col-md-5">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </div>
  <div class="card-footer text-center">
    <button type="submit" class="btn btn-primary">Ajouter</button>
  </div>
</form>
@endsection
