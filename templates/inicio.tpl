{include file="encabezado.tpl"}

<body> 

<div class="jumbotron">

  <h1 class="display-4"> Bienvenido! </h1>

  <form action="buscarUsuarios" method="POST" >
  <p class="lead"> Buscar usuarios por apellido: </p>
  <div class="input-group flex-nowrap">
  <input type="text" class="form-control" name="patron" aria-describedby="addon-wrapping">
  <button type="submit" class="btn btn-light"> Buscar </button>
  </form>

  </div>
  
  <a class="btn btn-primary btn-lg" href="./top10" role="button"> Top 10 usuarios </a>

</div>

</body> 
</html>