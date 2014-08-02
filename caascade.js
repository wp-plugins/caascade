jQuery(document).ready( function($)
  $('.caascade-submit').click(function()
  {
    cid = '#' + $(this).parent('div').parent('div').attr('id')
    $(cid + ' .caascade-waiting').animate({opacity:1,height:'toggle'})
    $(cid + ' .caascade-output').animate({opacity:0,height:'toggle'})
    $.ajax({
      type : 'GET',
      url : Drupal.settings.caascade.path,
      dataType : 'jsonp',
      data: {
        arg0: $(cid + ' .caascade-arg0').val(),
        arg1: $(cid + ' .caascade-arg1').val(),
        arg2: $(cid + ' .caascade-arg2').val(),
        arg3: $(cid + ' .caascade-arg3').val(),
        cmd:  $(cid + ' .caascade-cmd').val(),
        id: Drupal.settings.caascade.id,
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

