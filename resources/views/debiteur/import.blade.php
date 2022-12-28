@extends('templates.home')
@section('navbar')
<span>Créance >> Import Créance</span>
@endsection
@section('content')
<form action="/import_creance" method="POST" enctype="multipart/form-data">
    @csrf
            <section class="content">
                <div class="container-fluid">
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
                <div class="row mt-3">
                    <!-- left column -->
                    <div class="col-md-6">
                    <!-- general form elements -->

                    <!-- /.card -->
                    <!-- Horizontal Form -->
                    <div class="card card-info">
                        <div class="card-header">
                        <h3 class="card-title">Horizontal Form</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="form-horizontal">
                        <div class="card-body">
                            <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Code Créancier</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="code_creancier" placeholder="code">
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-4 col-form-label">Nom Remise</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="nom_remise" placeholder="Nom remise">
                            </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Type Débiteur</label>
                                <div class="col-sm-7">
                                <input type="text" class="form-control" name="type_deb" placeholder="type debiteur">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">

                        </div>
                        <!-- /.card-footer -->
                        </div>
                    </div>
                    <!-- /.card -->

                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">
                    <!-- Form Element sizes -->
                    <div class="card card-success">
                        <div class="card-header">
                        <h3 class="card-title">Different Height</h3>
                        </div>
                        <div class="form-horizontal">
                            <div class="card-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-5 col-form-label">Nom Prenom RS Creancier</label>
                                <div class="col-sm-6">
                                <input type="text" class="form-control" name="rs" placeholder="Email">
                                </div>
                            </div>
                            <input type="file" name="file" id="file" class="form-control" > <!-- Ajoutez cette ligne -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">

                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    </div>
                    <!--/.col (right) -->
                </div>
            </form>
                <!-- /.row -->
                {{-- <div class="row">
                    <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header">
                        <h3 class="card-title">Importer un fichier <small><em>jQuery File Upload</em> like look</small></h3>
                        </div>
                        <div class="card-body">
                        <div id="actions" class="row">
                            <div class="col-lg-6">
                            <div class="btn-group w-100">
                                <span class="btn btn-success col fileinput-button">
                                <i class="fas fa-plus"></i>
                                <span>ADD FILE</span>
                                <input type="file" name="file" id="file" required> <!-- Ajoutez cette ligne -->
                                </span>
                                <button type="submit" class="btn btn-primary col start">
                                <i class="fas fa-upload"></i>
                                <span>Start upload</span>
                                </button>
                                <button type="reset" class="btn btn-warning col cancel">
                                <i class="fas fa-times-circle"></i>
                                <span>Cancel upload</span>
                                </button>
                            </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center">
                            <div class="fileupload-process w-100">
                                <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="table table-striped files" id="previews">
                            <div id="template" class="row mt-2">
                            <div class="col-auto">
                                <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
                            </div>
                            <div class="col d-flex align-items-center">
                                <p class="mb-0">
                                    <span class="lead" data-dz-name></span>
                                    (<span data-dz-size></span>)
                                </p>
                                <strong class="error text-danger" data-dz-errormessage></strong>
                            </div>
                            <div class="col-4 d-flex align-items-center">
                                <div class="progress progress-striped active w-100" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                    <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                </div>
                            </div>
                            <div class="col-auto d-flex align-items-center">
                                <div class="btn-group">
                                <button class="btn btn-primary start">
                                    <i class="fas fa-upload"></i>
                                    <span>Start</span>
                                </button>
                                <button data-dz-remove class="btn btn-warning cancel">
                                    <i class="fas fa-times-circle"></i>
                                    <span>Cancel</span>
                                </button>
                                <button data-dz-remove class="btn btn-danger delete">
                                    <i class="fas fa-trash"></i>
                                    <span>Delete</span>
                                </button>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                </div> --}}
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Importer</button>
                </div>
                </div>
                </div><!-- /.container-fluid -->

            </section>
 

@endsection
