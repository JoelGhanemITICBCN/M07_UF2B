<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>
<body>
  <h1>LLISTA ALUMNAT</h1>  
<br>
@foreach ($alumnat as $alumne)
        ID: {{ $alumne['ID'] }}
        Nombre: {{ $alumne['NAME'] }}
        SURNAME: {{ $alumne['SURNAME'] }}
        Rol: {{ $alumne['ROL'] }}
        Email: {{ $alumne['EMAIL'] }}
       <br> 
    @endforeach
    <a href="{{ route('viewGet') }}">ADMIN VISTA</a><br>
</body>
</html>