{include file="encabezado.tpl"}

<body>

<div class="jumbotron">
  <h1 class="display-4"> Top 10 usuarios!</h1>
</div>

<ul class="list-group">
{foreach $usuario as $usuarios}
  <li class="list-group-item"> {$usuario['nombre']} {$usuario['apellido']}</li>
{/foreach}
</ul>

</body>
</html>