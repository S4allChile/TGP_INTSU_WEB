<!-- jQuary Script
============================================ -->
    <script src="<?= base_url(); ?>pagina/js/jquery-2.1.1.min.js"></script>
<!-- jQuary UI Slider -->
<script type="text/javascript" src="<?= base_url(); ?>pagina/lib/jquary-ui/jquery-ui.js"></script>
<!-- Bootstrap jQuary -->
    <script type="text/javascript" src="<?= base_url(); ?>pagina/js/bootstrap.min.js"></script>
<!-- jquery styleswitcher js -->
<script type="text/javascript" src="<?= base_url(); ?>pagina/lib/styleswitch/styleswitcher.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>pagina/lib/styleswitch/styleswitch_custom.js"></script>
<!-- jquery slick js -->
<script type="text/javascript" src="<?= base_url(); ?>pagina/lib/slick/slick.min.js"></script>
<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="<?= base_url(); ?>pagina/lib/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>pagina/lib/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>pagina/lib/rs-plugin/rs.home.js"></script>
<!-- jquery ntm js -->
<script type='text/javascript' src="<?= base_url(); ?>pagina/lib/ntm/jquery.ntm.js"></script>
<!-- jquery Chosen js -->
<script type="text/javascript" src="<?= base_url(); ?>pagina/lib/chosen/chosen.jquery.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>pagina/lib/chosen/chosen.proto.min.js"></script>
<!-- PrettyPhoto js -->
<script type="text/javascript" src="<?= base_url(); ?>pagina/lib/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<!-- Saharan js -->
    <script type="text/javascript" src="<?= base_url(); ?>pagina/js/saharan.js"></script>
    
    <script>
        $(document).ready(function(){
            var marca = <?= $marcaMenu; ?>;
            if(marca == "0"){
                
                $('#0').addClass('active-menu-item');
            }else{
                
                $('#<?= $marcaMenu; ?>').addClass('active-menu-item');
            }
            
            $('#frmEnviarCarro').submit(function(e){
                e.preventDefault();
                var data = $(this).serialize();
                
                $.ajax({
                        data:  data,
                        url:   '../../cotizacion/add_producto',
                        type:  'post',
                        beforeSend: function () {

                        },
                        success:  function (result) {
                            
                            if(result == 1){
                                
                                alert('Registro Agregado');
 
                            }
                            else{
                                alert('Error con la base de datos');
                            }

                        },
                        error: function(error){
                            alert('error en ajax'+error);
                        }
                });
                
                
            });
            
            
            
            
            
            
            
        });
    </script>
    
</body>
</html>
