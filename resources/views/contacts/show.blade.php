<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Détails</title>
    </head>
    <body class="antialiased">
        <h1>Détails de {{ $contact->first_name }}</h1>

        <div>
            <a href="/contacts">Retour</a>
        </div>

        @if($contact->photo_url)
        <div>
            <img style="max-height: 300px;" src="{{ $contact->photo_url }}" alt="">
        </div>
        @endif

        <table>
            <tr>
                <th>Nom</th>
                <td>{{ $contact->last_name }}</td>
            </tr>
            <tr>
                <th>Prénom</th>
                <td>{{ $contact->first_name }}</td>
            </tr>
            <tr>
                <th>Téléphone</th>
                <td>{{ $contact->phone_number }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $contact->email }}</td>
            </tr>
            <tr>
                <th>Date de naissance</th>
                <td>{{ $contact->date_of_birth->format("d/m/Y") }}</td>
            </tr>
        </table>

        <div>
            <form method="POST" action="/contacts/{{ $contact->id }}">
                @csrf
                @method('DELETE')
                <button type=submit>Supprimer</button>
            </form>
        </div>
    </body>
</html>
