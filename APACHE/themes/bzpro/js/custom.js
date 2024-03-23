(function ($) {
  "use strict";
  Drupal.behaviors.masonViews = {
    attach: function (context) {
      $('.imagecarroussel').click(function(){
    	 var now_src = $(this).attr('src');
         $('#imgprincipale').attr('src', now_src.replace('/styles/image_200x88/public',''));
   	});
    }
  };
})(jQuery);

(function ($) {
  "use strict";
  Drupal.behaviors.masonViews = {
    attach: function (context) {

  $(".chooseprivitem").on('click', function(event){
    event.stopPropagation();
    event.stopImmediatePropagation();
    var elmId = $(this).attr("id");
    var content=$('#desc_'+elmId).html();
    $('#testtext').html(content);
   });

     $('.imagecarroussel').click(function(){
         var now_src = $(this).attr('src');
         $('#imgprincipale').attr('src', now_src.replace('/styles/image_200x88/public',''));
        });



   	var chemin = window.location.pathname;
   	if(chemin.includes('/contactez-nous'))
       	{
              document.getElementById('home' ).setAttribute('data-header-bg', './sites/default/files/Contactez-nous-min.jpg');
              document.getElementById('home' ).style.backgroundImage = "url('./sites/default/files/Contactez-nous-min.jpg')";
        }
        if(chemin.includes('/node/132'))
	{
            $('#home .row .lead h1').css('display','none');
        }
        if(chemin.includes('/node/120'))
        {
            $('#home .row .lead h1').css('display','none');
        }
        if(chemin.includes('/node/174'))
        {
            $('#home .row .lead h1').css('display','none');
        }
        if(chemin.includes('/node/181'))
        {
            $('#home .row .lead h1').css('display','none');
        }
        if(chemin.includes('/node/168'))
        {
            $('#home .row .lead h1').css('display','none');
        }
        if(chemin.includes('/node/162'))
        {
            $('#home .row .lead h1').css('display','none');
        }
        if(chemin.includes('/node/114'))
        {
            $('#home .row .lead h1').css('display','none');
        }
        if(chemin.includes('/node/99'))
        {
            $('#home .row .lead h1').css('display','none');
        }
        if(chemin.includes('/node/100'))
        {
            $('#home .row .lead h1').css('display','none');
        }
        if(chemin.includes('/node/126'))
        {
            $('#home .row .lead h1').css('display','none');
        }


    }
  };
})(jQuery);
