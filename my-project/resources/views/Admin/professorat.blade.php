<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>
<body>
  <h1>LLISTA PROFESSORAT</h1>  
<br>
@foreach ($professorat as $professor)
        ID: {{ $professor['ID'] }}
        Nombre: {{ $professor['NAME'] }}
        Rol: {{ $professor['ROL'] }}
        Email: {{ $professor['EMAIL'] }}
       <br> 
    @endforeach
    <a href="{{ route('viewGet') }}">ADMIN VISTA</a><br>
</body>
</html>