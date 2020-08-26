<!DOCTYPE html>
<html lang="pt-br">
<header>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Rodrigo Alface</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
</header>
<body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
  <script src="notify.js"></script>
<div class="card amianto w3-animate-top">
<h1>Parabéns!</h1>
<p>Agora falta muito pouco para você receber seu super presente...</p>
<form>
<p>Dados para agendamento:</p>
<div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1">
    <span class="bmd-help">Insira aqui o seu endereço de e-mail.</span>
</div>
<p>Data para entrega:</p>
<div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios1" value="31/08/2020" checked>31/08/2020
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="01/09/2020">01/09/2020
    </label>
  </div>
  <button type="submit" class="btn btn-primary btn-raised">Enviar</button>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
</body>
</html>