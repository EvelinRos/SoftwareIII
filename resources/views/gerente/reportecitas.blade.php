<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
                body {
            background-image:linear-gradient(to top, rgba(49, 73, 101, 0.729) 0%, rgba(103, 100, 100, 0.805) 100%), url(../resources/imagenes/cita.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            /* Puedes ajustar otras propiedades como el color de fondo, posición, etc. según sea necesario */
        }
    </style>
    <title>CITAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
{{-- BARRA DE NAVEGACIÓN--}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand">HOSPITAL</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href='{{ route('welcome') }}'>Inicio</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

{{-- TABLA DE INFORMACIÓN --}}
     <div class="container mt-5">
        <h1 class="text-center mb-4"> REPORTE GENERAL DE CITAS MÉDICAS </h1>
        <table class="table table-striped">
          <thead>
            <tr>
            <th scope="col" style="color: white;">ID</th>
            <th scope="col" style="color: white;">Fecha </th>
            <th scope="col" style="color: white;">Hora </th>
            <th scope="col" style="color: white;">Motivo </th>
            <th scope="col" style="color: white;">Medico Asignado </th>
            <th scope="col" style="color: white;">Tipo </th>
            <th scope="col" style="color: white;">Estado </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($citasMedicas as $citas)
            @if($citas->estado == 'Activo' or $citas->estado == 'Inactivo') 
            <tr>
                <th scope="row" style="color: white;">{{$citas->idCitaMedica}}</th>
                <td style="color: white;">{{$citas->fecha}}</td>
                <td style="color: white;">{{$citas->hora}}</td>
                <td style="color: white;">{{$citas->motivo}}</td>
                <td style="color: white;">{{$citas->medico}}</td>
                <td style="color: white;">{{$citas->tipoCita}}</td>
                <td style="color: white;">{{$citas->estado}}</td>
                <td>
                </tr>
              @endif
              @endforeach
              <!-- Agrega más filas según sea necesario -->
            </tbody>
          </table>
        </div>
      </div>

{{--Scripts de llamado de librerías--}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>