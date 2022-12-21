@extends('templates.home')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Remise => Ajouter Remise</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">DataTables</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
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
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="form-horizontal">
              <div class="card-body">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-6 col-form-label">Code creancier</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="code_creancier" placeholder="Code" value="{{ $data->code_creancier }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 col-form-label">Contrat</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="contrat" placeholder="Contrat" value="{{ $data->contrat }}">
                  </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Agence</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="agence" placeholder="Agence" value="{{ $data->agence }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Type de Remise</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="type_remise" placeholder="Type de remise" value="{{ $data->type_remise }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Objet Remise</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="objet_remise" placeholder="Objet Remise" value="{{ $data->objet_remise }}">
                    </div>
                  </div>
              </div>

            </div>
          </div>


      </div>
      <div class="col-sm">
        <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="form-horizontal">
              <div class="card-body">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-5 col-form-label">NomPrenom RS Créancier</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="rs_creancier" placeholder="NomPrenom RS Créancier" value="{{ $data->rs_creancier }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-5 col-form-label">Nom Remise</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="nom_remise" placeholder="Nom remise" value="{{ $data->nom_remise }}">
                  </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-5 col-form-label">Apporteur Remise</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="app_remise" placeholder="Apporteur remise" value="{{ $data->app_remise }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-5 col-form-label">Date Réception</label>
                    <div class="col-sm-7">
                      <input type="date" class="form-control" name="date_reception" placeholder="Date receptipn" value="{{ $data->date_reception }}">
                    </div>
                  </div>
              </div>

            </div>
          </div>


      </div>
      <div class="col-sm">

        <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="form-horizontal">
              <div class="card-body">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-5 col-form-label">Filiale</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="filiale" placeholder="Filiale" value="{{ $data->filiale }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-5 col-form-label">Type Agence</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="type_agence" placeholder="Type Agence" value="{{ $data->type_agence }}">
                  </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-5 col-form-label">Chargé Client</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="charge_client" placeholder="Chargé Client" value="{{ $data->charge_client }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-5 col-form-label">Nombre Dossier</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="nbre_dossier" placeholder="Nombre Dossier"value="{{ $data->nbre_dossier }}">
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
