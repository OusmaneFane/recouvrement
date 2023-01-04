@extends('templates.home')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
        <i class="material-icons">grid_on</i>
        <p> Remise
          <b class="caret"></b>
        </p>
      </a>
      <div class="collapse" id="tablesExamples">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="/add_remise">
              <span class="sidebar-mini"> RT </span>
              <span class="sidebar-normal"> Ajout Remise </span>
            </a>
          </li>
          <li class="nav-item ">
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
    <li class="nav-item active">
      <a class="nav-link" data-toggle="collapse" href="#mapsExamples">
        <i class="material-icons">place</i>
        <p> Créance
          <b class="caret"></b>
        </p>
      </a>
      <div class="collapse show" id="mapsExamples">
        <ul class="nav">
          <li class="nav-item active">
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

<form action="/data_debiteur" method="post">
  @csrf
 <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">

          <!-- Horizontal Form -->
          <div class="card">
            <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                 1
                </div>
              
              </div>
              <div class="card-body ">
                <div class="form-horizontal">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Type</label>
                  <div class="col-md-9">
                    <div class="form-group has-default">
                    <input type="text" class="form-control" name="type" id="inputEmail3" placeholder="Type">
                  </div>
                </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Code</label>
                    <div class="col-md-9">
                          <div class="form-group has-default">
                      <input type="text" class="form-control" name="code_debiteur" id="inputEmail3" placeholder="Code">
                    </div>
                </div>
                </div>


              </div>
              <!-- /.card-body -->
              {{-- <div class="card-footer">
                <button type="submit" class="btn btn-info">Sign in</button>
                <button type="submit" class="btn btn-default float-right">Cancel</button>
              </div> --}}
              <!-- /.card-footer -->
              <div class="card-header"></div>
            </div>
          </div>
          <!-- /.card -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Form Element sizes -->
          <div class="card ">
            <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                  2
                </div>
               
              </div>
              <div class="card-body ">
                <div class="form-horizontal">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Pays</label>
                    <div class="col-md-9">
                          <div class="form-group has-default">
                      <input type="text" class="form-control" name="pays" id="inputEmail3" placeholder="Pays">
                    </div>
                </div>
                </div>

            </div>
            <div class="card-header"></div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->



          <!-- /.card -->
        </div>
        <!--/.col (right) -->
      </div>
      <div class="card">
        <div class="card-header card-header-rose card-header-text">
            <div class="card-text">
              <h4 class="card-title">3</h4>
            </div>
          </div>
      <div class="row g-3">
        <div class="col-sm-4">
          <label class="mb-0" for="">forme juridique</label>
          <input type="text" class="form-control" placeholder="Forme Juridique" name="forme_juridique" ><br>
          <label class="mb-0" for="">Secteur d'activité</label>
          <input type="text" class="form-control" placeholder="Secteur d'activité" name="secteur_activite"><br>
          <label class="mb-0" for="">Rc</label>
          <input type="text" class="form-control" placeholder="RC" name="rc"><br>
          <label class="mb-0" for="">Nom Responsable</label>
          <input type="text" class="form-control" placeholder="Nom responsable" name="nom_resp"><br>

        </div>
        <div class="col-sm-4">
            <label class="mb-0" for="">Raison Sociale</label>
          <input type="text" class="form-control" placeholder="Raison Sociale" name="raison_sociale"><br>
          <label class="mb-0" for="">Activité</label>
          <input type="text" class="form-control" placeholder="Activité" name="activite"><br>
          <label class="mb-0" for="">MF/Réf Patiente</label>
          <input type="text" class="form-control" placeholder="MF/Réf Patiente" name="mf_ref"><br>
          <label class="mb-0" for="">Prénom Responsable</label>
          <input type="text" class="form-control" placeholder="Prénom Responsable" name="prenom_resp"><br>

        </div>
        <div class="col-sm-4">
          <label class="mb-0" for="">Abréviation</label>
          <input type="text" class="form-control" placeholder="Abréviation" name="abrev" ><br>
          <label class="mb-0" for="">Désignation</label>
          <input type="text" class="form-control" placeholder="Désignation" name="designation"><br>
          <label class="mb-0" for="">Type TVA</label>
          <input type="text" class="form-control" placeholder="Type TVA" name="type_tva"><br>
          <label class="mb-0" for="">Qualité Responsable</label>
          <input type="text" class="form-control" placeholder="Qualité Responsable" name="qua_resp">

        </div>
    </div>
    <div class="card-header"></div>

    </div>

    <div class="text-center">
    <button class="btn btn-primary ">Ajouter</button>
  </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
 </form>
@endsection
