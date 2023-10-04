@vite(['resources/js/app.js'])
    <title>@yield('titulo')</title>
</head>
<body>
    @yield('contenido')
    <div class="row">
  <div class="col-4">
    <div id="simple-list-example" class="d-flex flex-column gap-2 simple-list-example-scrollspy text-center">
      <a class="p-1 rounded" href="{{route('redirect-to-welcome')}}">Inicio</a>
      <a class="p-1 rounded" href="{{route('redirect-to-vista1')}}">Vista1</a>
      <a class="p-1 rounded" href="{{route('apodovista2')}}">Vista2</a>
      <a class="p-1 rounded" href="{{route('apodovista3')}}">Vista3</a>
      
    </div>
  </div>
  