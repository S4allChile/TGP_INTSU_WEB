<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tickets OnLIne SBS</title>
        
        <!-- ARCHIVOS CSS -->
        
        <link href="<?= base_url(); ?>vendors/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url(); ?>vendors/css/login.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url(); ?>vendors/vanadium/vanadium.css" rel="stylesheet" type="text/css"/>
        
        <!-- FIN ARCHIVOS CSS -->
        
        
        
        <!-- ARCHIVOS JavaScript -->
        <script src="<?= base_url(); ?>vendors/jquery/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>vendors/bootstrap-3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>vendors/vanadium/vanadium.js" type="text/javascript"></script>
        
        <!--  FIN ARCHIVOS JavaScript -->
        
        
        
        
    </head>
    
        <body>
            <div class="container">
                <div class="row vertical-offset-100">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <div class="row-fluid user-row">
                                   
                                    <img src="<?= base_url(); ?>vendors/img/brench.png" class="img-responsive" alt="Conxole Admin"/>
                                </div>
                            </div>
                            <div class="panel-body" align="center">
                                <h3 >SBS - Sistema de Tickets</h3>
                                <form accept-charset="UTF-8" role="form" class="form-signin">
                                    <fieldset>
                                        <label class="panel-login">
                                            <div class="login_result"></div>
                                        </label>
                                        <input class="form-control :required :email" placeholder="email" id="username" type="text">
                                        <input class="form-control :required" placeholder="Contraseña" id="password" type="password">
                                        <br></br>
                                        <input class="btn btn-lg btn-success btn-block" type="submit" id="login" value="Ingresar »">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
</html>
