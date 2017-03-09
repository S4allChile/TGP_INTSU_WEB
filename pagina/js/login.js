$(window, document, undefined).ready(function() {

  $('input').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
  });

  var $ripples = $('.ripples');

  $ripples.on('click.Ripples', function(e) {

    var $this = $(this);
    var $offset = $this.parent().offset();
    var $circle = $this.find('.ripplesCircle');

    var x = e.pageX - $offset.left;
    var y = e.pageY - $offset.top;

    $circle.css({
      top: y + 'px',
      left: x + 'px'
    });

    $this.addClass('is-active');

  });

  $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
  	$(this).removeClass('is-active');
  });
  
  
  $('#fmrLogin').submit(function(e){
        e.preventDefault();
        var data = $(this).serialize();
        
        $.ajax({
            data: data,
            url: 'ajax/validaLogin',
            type: 'post',
            beforeSend: function () {
                
            },
            success: function (result) {
                
                if(result == 1){
                    location.replace('index.php/administracion');
                }else{
                    
                    alert('usuario o contraseña no corresponden');
                    
                }
                
            },
            error: function (error) {
                alert('error en ajax' + error);
            }
        });
        
    });

});


