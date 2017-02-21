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
        <link href="<?= base_url(); ?>/pagina/css/login.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
          <hgroup>
            <h1>INTSU - Administracion Web</h1>
            <h3>By Eduardo y Pablo Frias</h3>
          </hgroup>
        <form>
            <div class="group">
                <input type="email" name="email"><span class="highlight"></span><span class="bar"></span>
              <label>Email</label>
            </div>
            <div class="group">
                <input type="password" name="pass"><span class="highlight"></span><span class="bar"></span>
              <label>Contraseña</label>
            </div>
            <button type="button" class="button buttonBlue">Ingresar
              <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
            </button>
        </form>
    </body>
</html>
