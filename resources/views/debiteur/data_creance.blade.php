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
        <i class="fa fa-users" aria-hidden="true"></i>
        <p> Prospects
          <b class="caret"></b>
        </p>
      </a>
      <div class="collapse" id="pagesExamples">
        <ul class="nav">
          <li class="nav-item ">
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
    <li class="nav-item active">
      <a class="nav-link" data-toggle="collapse" href="#mapsExamples" aria-expanded="true">
        <i class="fa fa-id-badge" aria-hidden="true"></i>
        <p> Créance
          <b class="caret"></b>
        </p>
      </a>
      <div class="collapse show" id="mapsExamples">
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
         <li class="nav-item active">
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
<a class="navbar-brand" href="">Creance => Modification Creance</a>
@endsection

@section('content')
{{-- <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">DataTables</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
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
<form action="/add_creance" method="POST">
    @csrf
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="card">
            <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                 1
                </div>
              
              </div>
              <div class="card-body ">
                <div class="form-horizontal">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Code creance</label>
                  <div class="col-md-4">
                    <div class="form-group has-default">
                        <input type="text" class="form-control" name="code_creance" placeholder="Code" value="{{ $data->code_debiteur }}" >
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-4 col-form-label">Nature Créance</label>
                   <div class="col-md-7">
                    <div class="form-group has-default">
                    <input type="text" class="form-control" name="nature_creance" placeholder="Password">
                  </div>
                </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-4 col-form-label">Etat Créance à la remise</label>
                     <div class="col-md-7">
                    <div class="form-group has-default">
                      <input type="text" class="form-control" name="ecr" placeholder="Agence">
                    </div>
                </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-4 col-form-label">Montant principal</label>
                     <div class="col-md-7">
                    <div class="form-group has-default">
                      <input type="text" class="form-control" name="mp" placeholder="Montant principal">
                    </div>
                </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-4 col-form-label">Remise</label>
                     <div class="col-md-7">
                    <div class="form-group has-default">
                      <input type="text" class="form-control" name="remise" placeholder="Remise">
                    </div>
                </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-4 col-form-label">Décote</label>
                     <div class="col-md-7">
                    <div class="form-group has-default">
                      <input type="text" class="form-control" name="decote" placeholder="Décote">
                    </div>
                </div>
                  </div>
              </div>

            </div>
          </div>


      </div>
      <div class="col-sm">
        <div class="card">
            <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                 2
                </div>
              
              </div>
              <div class="card-body ">
                <div class="form-horizontal">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Statut</label>
                   <div class="col-md-7">
                    <div class="form-group has-default">
                    <input type="text" class="form-control" name="statut" placeholder="Statut">
                  </div>
                </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-4 col-form-label">Action</label>
                   <div class="col-md-7">
                    <div class="form-group has-default">
                    <input type="text" class="form-control" name="action" placeholder="Action">
                  </div>
                </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-4 col-form-label">Date reception</label>
                     <div class="col-md-7">
                    <div class="form-group has-default">
                      <input type="date" class="form-control" name="date_recep" placeholder="Date reception">
                    </div>
                </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-4 col-form-label">Total frais receptionnés</label>
                     <div class="col-md-7">
                    <div class="form-group has-default">
                      <input type="text" class="form-control" name="total" placeholder="total frais">
                    </div>
                </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-4 col-form-label">Mode calcul intérêt</label>
                     <div class="col-md-7">
                    <div class="form-group has-default">
                      <input type="text" class="form-control" name="mci" placeholder="mode calcul">
                    </div>
                </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-4 col-form-label">Abandon</label>
                     <div class="col-md-7">
                    <div class="form-group has-default">
                      <input type="text" class="form-control" name="abandon" placeholder="abandon">
                    </div>
                </div>
                  </div>

              </div>

            </div>
          </div>


      </div>
      <div class="col-sm">

        <div class="card">
            <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                 3
                </div>
              
              </div>
              <div class="card-body ">
                <div class="form-horizontal">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-5 col-form-label">Code chez client</label>
                   <div class="col-md-6">
                    <div class="form-group has-default">
                    <input type="text" class="form-control" name="code_client" placeholder="code client">
                  </div>
                   </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-5 col-form-label">Objet</label>
                   <div class="col-md-6">
                    <div class="form-group has-default">
                    <input type="text" class="form-control" name="objet" placeholder="objet">
                  </div>
                   </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-5 col-form-label">Intérêt recpetionné</label>
                     <div class="col-md-6">
                    <div class="form-group has-default">
                      <input type="text" class="form-control" name="int_recep" placeholder="Intérêt recpetionné">
                    </div>
                     </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-5 col-form-label">Nombre Dossier</label>
                     <div class="col-md-6">
                    <div class="form-group has-default">
                      <input type="text" class="form-control" name="nbre_dossier" placeholder="Nombre Dossier">
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
