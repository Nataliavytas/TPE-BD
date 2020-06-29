{include file="encabezado.tpl"}

<body>

<h1 class="display-4"> Resultados de busqueda: </h1>

<ul class="list-group">
{foreach $usuario as $usuarios}
  <li class="list-group-item"> {$usuario['nombre']} {$usuario['apellido']}</li>
{/foreach}
</ul>
</body>
</html>