<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="<?= base_url(); ?>pagina/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url(); ?>pagina/lib/bootstrap3-wysiwyg/dist/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url(); ?>pagina/lib/bootstrap-fileinput/css/fileinput.min.css" rel="stylesheet" type="text/css"/>
        <script>
            function formato_numero(input){
                    var num = input.value.replace(/\./g,"");
                    if(!isNaN(num)){
                      num = num.toString().split("").reverse().join("").replace(/(?=\d*\.?)(\d{3})/g,'$1.');
                      num = num.split("").reverse().join("").replace(/^[\.]/,"");
                      input.value = num;
                    }else{ 
                      alert('Solo se permiten numeros');
                      input.value = input.value.replace(/[^\d\.]*/g,"");
                    }
                }
        </script>
    </head>
