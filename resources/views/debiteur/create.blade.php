@extends('templates.home')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
@section('navbar')
<li class="nav-item d-none d-sm-inline-block">
    <a href="#" class="nav-link">Informations debiteur</a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
    <a href="#" class="nav-link">Adresses</a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
    <a href="#" class="nav-link">Contacts</a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
    <a href="#" class="nav-link">Bien</a>
  </li>

@endsection
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Prospect => Ajouter Prospect</h1>
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

 <form action="/data_debiteur" method="post">
  @csrf
 <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">

          <!-- Horizontal Form -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="card-body">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Type</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="type" id="inputEmail3" placeholder="Type">
                  </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Code</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="code_debiteur" id="inputEmail3" placeholder="Code">
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
            </form>
          </div>
          <!-- /.card -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Form Element sizes -->
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Pays</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="pays" id="inputEmail3" placeholder="Pays">
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
      <div class="card card-warning">
        <div class="card-header">
          <h3 class="card-title"></h3>
        </div><br>
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
