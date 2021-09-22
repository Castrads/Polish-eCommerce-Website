jQuery(document).ready(function($){
	$('#buttonsearch').click(function(){
		$('#formsearch').slideToggle( "fast",function(){
			 $( '#content' ).toggleClass( "moremargin" );
		} );
		$('#searchbox').focus()
		$('.openclosesearch').toggle();
	})
  });


const menuIcon = document.getElementById("menu-icon");
const slideoutMenu = document.getElementById("slideout-menu");

if (menuIcon !== null && slideoutMenu !==null)
menuIcon.addEventListener('click', function () {
  if (slideoutMenu.style.opacity == "1") {
    slideoutMenu.style.opacity = '0';
    slideoutMenu.style.pointerEvents = 'none';
  } else {
    slideoutMenu.style.opacity = '1';
    slideoutMenu.style.pointerEvents = 'auto';
  }
})

