<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMICS</title>
</head>
<body>
<form action="Formulario" method="get">
    <form>
  <fieldset disabled>
    <legend>FORMULARIO</legend>
    
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nombre</label>
      <input type="text" name="txtNombre" class="form-control" value="{{old('txtNombre')}}" >
        <p class="text-danger fst-italic">{{$errors->first('txtNombre')}} </p>
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Fecha Publicacion</label>
      <input type="text" name="txtFecha" class="form-control" value="{{old('txtFecha')}}" >
        <p class="text-danger fst-italic">{{$errors->first('txtFecha')}} </p>
      <select id="disabledSelect" class="form-select">
      </select>
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">No. Comics publicados</label>
      <select id="disabledSelect" class="form-select">
      <input type="text" name="txtPublicados" class="form-control" value="{{old('txtPublicados')}}" >
        <p class="text-danger fst-italic">{{$errors->first('txtPublicados')}} </p>
      </select>
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</form>
</body>
</html>