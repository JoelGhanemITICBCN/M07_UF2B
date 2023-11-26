<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>
<body>
  <h1>LLISTA CENTRES</h1>  
<br>
@foreach ($centres as $centre)
        ID: {{ $centre['ID'] }}
        Nombre: {{ $centre['NAME'] }}
        ADRESS: {{ $centre['ADRESS'] }}
        CP: {{ $centre['CP'] }}
        CITY: {{ $centre['CITY'] }}
       <br> 
    @endforeach
    <a href="{{ route('viewGet') }}">ADMIN VISTA</a><br>
</body>
</html>