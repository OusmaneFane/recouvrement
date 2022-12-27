@extends('templates.home')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

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

 <form action="/data_prospect" method="post">
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
                            <input type="text" class="form-control" name="prospect_type" id="inputEmail3" placeholder="Type">
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nature</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="nature" id="inputEmail3" placeholder="Nature">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Apporteur</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="apporteur" id="inputEmail3" placeholder="Apporteur">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Statut</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="statut" id="inputEmail3" placeholder="Statut">
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
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Type Apporteur</label>

                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="type_apporteur" id="inputEmail3" placeholder="Type apporteur">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Chargé client</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="charge_client" id="inputEmail3" placeholder="Chargé client">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Capital</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="capital" id="inputEmail3" placeholder="Capital">
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
