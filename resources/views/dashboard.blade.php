<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <table class="table">
            <thead>
                <tr>
                    <th> No </th>
                    <th> Nama </th>
                    <th> NIM </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nama as $index => $x)
                    <tr>
                        <td> {{ $index + 1 }} </td>
                        <td> {{ $x }} </td>
                        <td> {{ $nim[$index] }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>