<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo')</title>
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="/">Inicio</a></li>
        <li><a href="/acercade">Acerca de</a></li>
        <li><a href="/contacto">Contactanos</a></li>
        <li><a href="/portafolio">Nuestro Portafolio</a></li>
      </ul>
    </nav>
    @yield('contenido')
  </body>
</html>
