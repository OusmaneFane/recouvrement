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
    <li class="nav-item active ">
      <a class="nav-link" data-toggle="collapse" href="#mapsExamples">
        <i class="material-icons">place</i>
        <p> Créance
          <b class="caret"></b>
        </p>
      </a>
      <div class="collapse show" id="mapsExamples">
        <ul class="nav">
          <li class="nav-item">
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
          <li class="nav-item active">
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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<section class="content">
<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mt-2">
                    <div class="card-header">
                      <h3 class="card-title">Liste des Prospects</h3>
                    </div>
  
  {{-- <form action="#" method="get">
    @csrf
        <div class="row mt-3">
          <div class="col"><div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Type personne</label>
              <div class="col-sm-7">
                  <select class="form-select form-select-sm" name="personne" value="{{ old('peersonne') }}">
                      <option selected>Open this select menu</option>
                      <option value="PH">PH</option>
                      <option value="PM">PM</option>
                      <option value="PMH">PMH</option>
                    </select>
              </div>
            </div>
          </div>
          <div class="col"><div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Code Débiteur</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" name="code" value="{{ old('code') }}" placeholder="Code débiteur">
              </div>
            </div>
          </div>
          <div class="col"><div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Nom/Pre Débiteur</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" name="nom_resp" placeholder="Nom/Pre Rs Débiteur">
              </div>
            </div>
          </div>
          <div class="col">
              <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 col-form-label">N°CIN/MF</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="contrat" placeholder="N°CIN / MF">
                  </div>
                </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
  </form> --}}
                    <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                <th>Code Creancier</th>
                                <th>Débiteur Nom Prenom RS</th>
                                <th>N° CIN</th>
                                <th>Matricule fiscale</th>
                                <th>Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                    {{-- @if ($request->has('personne') || $request->has('code')) --}}
                                    @foreach($data_debit as $data)
                                    <tr>
                                        <td>{{$data->type}}</td>
                                        <td>{{$data->pays}}</td>
                                        <td>{{$data->nom_resp}}</td>
                                        <td>{{$data->abrev}}</td>
                                        <td><a href="/creance/{{ $data->id }}/edit"><i class="bi bi-pencil-square"></i></a></td>
                                    </tr>
                                    @endforeach
                                    {{-- @else
                                    <tr>
                                        <td colspan="3">Veillez filter !!!</td>

                                    </tr>
                                    @endif --}}
                                </tbody>
                            </table>
                    </div>
            </div>
        </div>
    </div>
</div>
</section>



@endsection
