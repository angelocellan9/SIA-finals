<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Players List PDF</title>
    <style>

    </style>
</head>
<body>
    <h1>Playerlist</h1>
    <hr>
    <table>
        <thead>
            <tr>
                <th>QR Code</th>
                <th>Position</th>
                <th>Name</th>
                <th>Description</th>
                <th>Email</th>
                <th>Phone Number</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($players as $player)
                <tr>
                    <td><img src="data:image/png;base64,{{ base64_encode(QrCode::size(50)->generate($player->id)) }}" alt="QR Code"></td>
                    <td>{{ $player->position }}</td>
                    <td>{{ $player->name }}</td>
                    <td>{{ $player->description }}</td>
                    <td>{{ $player->email }}</td>
                    <td>{{ $player->phone_number }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
