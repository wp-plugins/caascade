jQuery(document).ready( function($)
{
  $('.caascade-submit').click(function()
  {
    cid = '#' + $(this).parent('div').parent('div').attr('id')
    $(cid + ' .caascade-waiting').animate({opacity:1,height:'toggle'})
    $(cid + ' .caascade-output').animate({opacity:0,height:'toggle'})
    jQuery.ajax({
      type : 'post',
      url : caascadeAjax.ajaxurl,
      dataType : 'json',
      data: {
        action: "caascade_compute",
        arg0: $(cid + ' .caascade-arg0').val(),
        arg1: $(cid + ' .caascade-arg1').val(),
        arg2: $(cid + ' .caascade-arg2').val(),
        arg3: $(cid + ' .caascade-arg3').val(),
        cmd:  $(cid + ' .caascade-cmd').val(),
        id: caascadeAjax.caascade_id,
      },
      success : function(data)
      {
        $(cid + ' .caascade-output').html('<div class="caascade-out-input"><div class="caascade-prompt caascade-prompt-i">%i1</div>' + data.input + '</div><div class="caascade-out-output"><div class="caascade-prompt caascade-prompt-o">%o1</div>' + data.output + '</div><div class="caascade-out-pdf">' + data.pdf + '</div>')
        MathJax.Hub.Queue(["Typeset",MathJax.Hub])
        $(cid + ' .caascade-waiting').animate({opacity:0,height:'toggle'})
        $(cid + ' .caascade-output').animate({opacity:1,height:'toggle'})
      },
    })
    return false;
  })
}(jQuery));

