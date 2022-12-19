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
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Code">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 col-form-label">Contrat</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Agence</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Agence">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Type de Remise</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Type de remise">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Objet Remise</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Objet Remise">
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
                    <input type="text" class="form-control" id="inputEmail3" placeholder="NomPrenom RS Créancier">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-5 col-form-label">Nom Remise</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Nom remise">
                  </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-5 col-form-label">Apporteur Remise</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Apporteur remise">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-5 col-form-label">Date Réception</label>
                    <div class="col-sm-7">
                      <input type="date" class="form-control" id="inputPassword3" placeholder="Date receptipn">
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
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Filiale">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-5 col-form-label">Type Agence</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Type Agence">
                  </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-5 col-form-label">Chargé Client</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Chargé Client">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-5 col-form-label">Nombre Dossier</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Nombre Dossier">
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
  </div>

  
@endsection