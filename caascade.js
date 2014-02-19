jQuery(document).ready( function( $ )
{
	// The Caascade submit button triggers an AJAX POST to Wordpress
	$("#caascade-submit").click( function() 
  {
    jQuery.ajax({
      type : 'post',
      url : caascadeAjax.ajaxurl,
      dataType : 'json',
      data: {
        action: "caascade_compute",
        arg0: $('#caascade-arg0').val(),
        arg1: $('#caascade-arg1').val(),
        arg2: $('#caascade-arg2').val(),
        arg3: $('#caascade-arg3').val(),
        cmd: $('#caascade-cmd').val(),
        id: caascadeAjax.caascade_id,
      },
      success : function(data)
      {
        $('#caascade-output').html('<span class="caascade-maxima-output">' + data.output + '</span');
        MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
      },
    });
    return false;
  });
}(jQuery));
