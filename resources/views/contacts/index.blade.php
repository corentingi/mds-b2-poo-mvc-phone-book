<div>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
            <th>Email</th>
        </tr>

        @foreach ($contacts as $contact)
        <tr>
            <td>{{ $contact->last_name }}</td>
            <td>{{ $contact->first_name }}</td>
            <td>{{ $contact->phone_number }}</td>
            <td>{{ $contact->email }}</td>
        </tr>
        @endforeach
    </table>
</div>
