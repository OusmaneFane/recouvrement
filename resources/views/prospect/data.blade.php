@extends('templates.home')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Modification Prospect</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
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
    <form method="POST" action="/prospect/{{ $data->id }}">
        @method('PUT')
        @csrf
        <div class="row g-3">
            <div class="col">
                  <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">Type</label>
                  <div class="col-sm-5">
                      <select class="form-select form-select-lg mb-3 " name="prospect_type" aria-label=".form-select-lg example" value="{{$data->prospect_type}}">
                          <option selected>Type de Prospect</option>
                          @foreach ($prospects as $prospect)
                          <option value="{{ $prospect->type_prospect }}">{{ $prospect->type_prospect }}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="col">
                    <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">Nature</label>
                    <div class="col-sm-5">
                      <input type="apporteur" name="nature" class="form-control form-control-sm" id="colFormLabelSm" value="{{ $data->nature}}">
                    </div>
                </div>
                <div class="col">
                  <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">Apporteur</label>
                  <div class="col-sm-5">
                    <input type="apporteur" class="form-control form-control-sm" id="colFormLabelSm" name="apporteur" value="{{$data->apporteur}}">
                  </div>
                </div>
                <div class="col">
                    <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">Statut</label>
                    <div class="col-sm-5">
                      <input type="apporteur" class="form-control form-control-sm" id="colFormLabelSm" name="statut" value="{{$data->statut}}">
                    </div>
                </div>
          </div>
            <div class="col">
                <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">Pays</label>
                <div class="col-sm-5">
                  <input type="nature" class="form-control form-control-sm" id="colFormLabelSm" name="pays" value="{{$data->pays}}">
                </div>
                <div class="col">
                  <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">TypeApporteur</label>
                  <div class="col-sm-5">
                    <input type="apporteur" class="form-control form-control-sm" id="colFormLabelSm" name="type_apporteur" value="{{$data->type_apporteur}}">
                  </div>
                </div>
                <div class="col">
                  <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">ChargéClient</label>
                  <div class="col-sm-5">
                    <input type="apporteur" class="form-control form-control-sm" id="colFormLabelSm" name="charge_client" value="{{$data->charge_client}}">
                  </div>
                </div>
                <div class="col">
                  <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">Capital</label>
                  <div class="col-sm-5">
                    <input type="apporteur" class="form-control form-control-sm" id="colFormLabelSm" name="capital" value="{{$data->capital}}">
                  </div>
                </div>

            </div>
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
        <div class="text-center">
          <button class="btn btn-primary" type="submit" >Modifier</button>
        </div><br>

  </form>
    {{-- <div class="row g-3">
      <div class="col">
          <label class="col-sm-1 col-form-label col-form-label-sm" for=""><b>Start </b></label>
          <div class="col-sm-2">
          <input class="form-control form-control-sm" type="text" name="startDate" placeholder="Start date" />
          </div>
        </div>
      <div class="col">
          <label class="col-sm-1 col-form-label col-form-label-sm" for=""><b>End </b></label>
        <div class="col-sm-2">
          <input class="form-control form-control-sm" type="text" name="endDate" placeholder="End date" />
        </div>
      </div>
    </div><br> --}}

@endsection