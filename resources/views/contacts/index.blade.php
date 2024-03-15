<div>
    <h1>Répertoire de contacts</h1>

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
            <td>
                <a href="/contacts/{{ $contact->id }}">
                    {{ $contact->last_name }}
                </a>
            </td>
            <td>{{ $contact->first_name }}</td>
            <td>{{ $contact->phone_number }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->date_of_birth->format("d/m/Y") }}</td>
            <td>{{ $contact->date_of_birth->age }}</td>
            <td>
                <form method="POST" action="/contacts/{{ $contact->id }}">
                    @csrf
                    @method('DELETE')
                    <button type=submit>Supprimer</button>
                </form>
            </td>
            <td>
                <a href="/contacts/{{ $contact->id }}">
                    <button>Détails</button>
                </a>
            </td>
        </tr>
        @endforeach
    </table>

    <h1>Create a contact</h1>

    <form action="/contacts" method="POST">
        @csrf
        <label for="last_name">Last Name:</label><br>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <label for="first_name">First Name:</label><br>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="phone_number">Phone Number:</label><br>
        <input type="text" id="phone_number" name="phone_number" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="date_of_birth">Date of Birth:</label><br>
        <input type="date" id="date_of_birth" name="date_of_birth" required><br><br>

        <input type="submit" value="Submit">
    </form>
</div>
