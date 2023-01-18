<!--Dans la vue create.blade.php-->

<form action="{{ route('dossiers.store') }}" method="post">
    @csrf
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>
    <br>
    <label for="montant">Montant :</label>
    <input type="text" id="montant" name="montant" required>
    <br>
    <label for="date_echeance">Date d'échéance :</label>
    <input type="date" id="date_echeance" name="date_echeance" required>
    <br>
    <input type="submit" value="Créer">
</form>
