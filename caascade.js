jQuery(document).ready( function($)
{
  pubkey = caascadeAjax.recaptcha_pubkey
  if(pubkey.length)
  {
    recap_theme = caascadeAjax.recaptcha_theme
    recap_div = $('.caascade-recaptcha:first').attr('id')
    Recaptcha.create(pubkey, recap_div, { theme: recap_theme, callback: Recaptcha.focus_response_field })
  }

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
        arg4: $(cid + ' .caascade-arg4').val(),
        arg5: $(cid + ' .caascade-arg5').val(),
        arg6: $(cid + ' .caascade-arg6').val(),
        cmd:  $(cid + ' .caascade-cmd').val(),
        pdf:  $(cid + ' .caascade-pdf:checked').val(),
        id: caascadeAjax.caascade_id,
        recaptcha_challenge_field: $('#recaptcha_challenge_field').val(),
        recaptcha_response_field: $('#recaptcha_response_field').val(),
      },
      success : function(data)
      {
        if(data.input.match(/\$(.*)\$/g) == null)
        {
          data.input = '<pre>' + data.input + '</pre>'
        }
        if(data.output.match(/\$(.*)\$/g) == null)
        {
          data.output = '<pre>' + data.output + '</pre>'
        }
        $(cid + ' .caascade-output').html('<div class="caascade-out-input"><div class="caascade-prompt caascade-prompt-i">%i1</div>' + data.input + '</div><div class="caascade-out-output"><div class="caascade-prompt caascade-prompt-o">%o1</div>' + data.output + '</div><div class="caascade-out-pdf">' + data.pdf + '</div>')
        MathJax.Hub.Queue(["Typeset",MathJax.Hub])
        $(cid + ' .caascade-waiting').animate({opacity:0,height:'toggle'})
        $(cid + ' .caascade-output').animate({opacity:1,height:'toggle'})
        Recaptcha.reload_internal('t');
      },
    })
    return false;
  })
}(jQuery));

