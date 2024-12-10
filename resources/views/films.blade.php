<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Film Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            form {
            max-width: 400px;
            margin: 20px auto;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .error {
            color: red;
            font-size: 0.9em;
        }
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <form action="{{ route('films.store') }}" method="POST">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
    
            <label for="duration">Duration</label>
            <input type="text" name="duration" id="duration" value="{{ old('duration') }}">

            <label for="description">Description</label>
            <input type="text" name="description" id="description" value="{{ old('description') }}">
    
            <button type="submit">Add User</button>
        </form>
    <h1>Katalog Film</h1>
    <ul>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>duration</th>
                    <th>description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($films as $film)
                    <tr>
                        <td>{{ $film->id }}</td>
                        <td>{{ $film->name }}</td>
                        <td>{{ $film->duration }}</td>
                        <td>{{ $film->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </ul>
    </body>
</html>
