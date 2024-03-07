<div>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
            <th>Email</th>
            <th>Date de naissance</th>
            <th>Age</th>
        </tr>

        @foreach ($contacts as $contact)
        <tr>
            <td>{{ $contact->last_name }}</td>
            <td>{{ $contact->first_name }}</td>
            <td>{{ $contact->phone_number }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->date_of_birth->format("d/m/Y") }}</td>
            <td>{{ $contact->date_of_birth->age }}</td>
        </tr>
        @endforeach
    </table>
</div>
