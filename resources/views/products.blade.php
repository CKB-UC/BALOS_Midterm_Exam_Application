<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Products</title>
</head>
<body>
    <h1>Anime Products</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product['name1'] }}</td>
                    <td>{{ $product['name2'] }}</td>
                    <td>{{ $product['name3'] }}</td>
                    <td>{{ $product['name4'] }}</td>
                    <td>{{ $product['name5'] }}</td>
                </tr>    
            @endforeach
        </tbody>
    </table>
</body>
</html>