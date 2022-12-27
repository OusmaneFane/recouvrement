@extends('templates.home')
@section('navbar')
<li class="nav-item d-none d-sm-inline-block">
    <a href="index3.html" class="nav-link">Creance >></a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
    <a href="#" class="nav-link">Ajout Créance</a>
  </li>
@endsection
@section('content')
<section class="content-header">
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
<form action="/add_creance" method="POST">
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
                  <label for="inputEmail3" class="col-sm-5 col-form-label">Code creance</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="code_creance" placeholder="Code" value="{{ $data->code_debiteur }}" >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-5 col-form-label">Nature Créance</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="nature_creance" placeholder="Password">
                  </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-5 col-form-label">Etat Créance à la remise</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="ecr" placeholder="Agence">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-5 col-form-label">Montant principal</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="mp" placeholder="Montant principal">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-5 col-form-label">Remise</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="remise" placeholder="Remise">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-5 col-form-label">Décote</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="decote" placeholder="Décote">
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
                  <label for="inputEmail3" class="col-sm-5 col-form-label">Statut</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="statut" placeholder="Statut">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-5 col-form-label">Action</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="action" placeholder="Action">
                  </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-5 col-form-label">Date reception</label>
                    <div class="col-sm-7">
                      <input type="date" class="form-control" name="date_recep" placeholder="Date reception">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-5 col-form-label">Total frais receptionnés</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="total" placeholder="total frais">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-5 col-form-label">Mode calcul intérêt</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="mci" placeholder="mode calcul">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-5 col-form-label">Abandon</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="abandon" placeholder="abandon">
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
                  <label for="inputEmail3" class="col-sm-5 col-form-label">Code chez client</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="code_client" placeholder="code client">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-5 col-form-label">Objet</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="objet" placeholder="objet">
                  </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-5 col-form-label">Intérêt recpetionné</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="int_recep" placeholder="Intérêt recpetionné">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-5 col-form-label">Nombre Dossier</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="nbre_dossier" placeholder="Nombre Dossier">
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
