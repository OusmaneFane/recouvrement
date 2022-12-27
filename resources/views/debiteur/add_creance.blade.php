@extends('templates.home')
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
