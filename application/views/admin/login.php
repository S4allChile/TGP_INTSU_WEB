<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="<?= base_url(); ?>pagina/css/login.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url(); ?>pagina/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url(); ?>pagina/vanadium/vanadium.css" rel="stylesheet" type="text/css"/>
        
        
      
    </head>
    <body>
            <hgroup>
  <h1>Administracion Web</h1>
  <h3>Intsu SpA</h3>
</hgroup>
        <form id="fmrLogin" method="post">
  <div class="group">
      <input type="text" name="user" class=":required :email"><span class="highlight"></span><span class="bar"></span>
    <label>Email</label>
  </div>
  <div class="group">
      <input type="password" name="pass" class=":required"><span class="highlight"></span><span class="bar"></span>
    <label>Contraseña</label>
  </div>
  <button type="submit" class="button buttonBlue">Ingresar
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>
       
        
        
        
        <script src="<?= base_url(); ?>pagina/js/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>/pagina/js/login.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>pagina/vanadium/vanadium.js" type="text/javascript"></script>
       
         
    </body>
</html>
