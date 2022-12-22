@extends('templates.home')
@section('content')
<div class="container">
    {{-- <div class="row">
      <div class="col-sm">
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-3 col-form-label">Type personne</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="contrat" placeholder="Password">
            </div>
          </div>
      </div>
      <div class="col-sm">
        <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 col-form-label">Code Débiteur</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="contrat" placeholder="Password">
                  </div>
                </div>
      </div>
      <div class="col-sm">
        <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 col-form-label">Nom/Pre Débiteur</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="contrat" placeholder="Password">
                  </div>
                </div>
      </div>
    </div> --}}
  </div>
  <form action="#" method="get">
    @csrf
        <div class="row">
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
  </form>
  <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>Code Creancier</th>
      <th>Débiteur Nom Prenom RS</th>
      <th>N° CIN</th>
      <th>Matricule fiscale</th>
    </tr>
    </thead>
    <tbody>
        @if ($request->has('personne') || $request->has('code'))
        @foreach($results as $result)
        <tr>
            <td>{{$result->type}}</td>
            <td>{{$result->pays}}</td>
            <td>{{$result->nom_resp}}</td>
            <td>{{$result->abrev}}</td>
        </tr>
        @endforeach
        @else
          <tr>
             <td colspan="3">Veillez filter !!!</td>

          </tr>
        @endif
    </tbody>
  </table>

    <script src="/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="/plugins/jszip/jszip.min.js"></script>
    <script src="/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>

@endsection
