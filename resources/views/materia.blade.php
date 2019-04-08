<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>materia</title>
</head>
<body>
  <div>
  <form action="{{ route('guardar') }}"method="POST">
      codigo materia <br>
      <input type="" name="cod" value=""><br>
      nombre materia <br>
      <input type="text"name="nom" value=""><br>
      grupo materia <br>
      <input type="text"name="nom" value=""><br>
      <input type="submit" value=" registrar">
      < input type="hidden" name="_token" value="{{ csrf_token() }}">
 </form>
  </div>
</body>
</html>