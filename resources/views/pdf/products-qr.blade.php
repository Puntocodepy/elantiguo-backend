<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            font-size: 12px;
        }

        .container{
            display: table;
            width: 100%;
            overflow: hidden;
        }

        .row {
            display: table-row;
        }

        .box {
            display: table-cell;
            width: 20%;
            max-width: 20%;
            height: 100px;
            border: 1px solid #000;
            text-align: center;
            padding-top: .5rem;
        }
    </style>
</head>
<body>
    <div class="container">
        @foreach ($products as $key => $product)
            @if ($key % 5 == 0 || $key == 0)
                <div class="row">
            @endif

            <div class="box">
                <img src="data:image/png;base64,{{ base64_encode($product['qrCode']) }}" alt="Código QR">
                <p>{{ $product['name'] }}</p>
            </div>

            @if (($key+1) % 5 == 0)
                </div>
            @endif
        @endforeach
    </div>
</body>
</html>
