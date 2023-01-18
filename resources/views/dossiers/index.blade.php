<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Montant</th>
            <th>Date d'échéance</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dossiers as $dossier)
        <tr>
            <td>{{ $dossier->nom }}</td>
            <td>{{ $dossier->montant }}</td>
            <td>{{ $dossier->date_echeance }}</td>
            <td>
                <a href="{{ route('dossiers.show', $dossier->id) }}">Afficher</a>
                <a href="{{ route('dossiers.edit', $dossier->id) }}">Modifier</a>
                <form action="{{ route('dossiers.destroy', $dossier->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Supprimer">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
