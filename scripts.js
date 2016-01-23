!function ($) {

  /** Set up initial load and load on option updates (.pl-trigger will fire this) */  /** Set up initial load and load on option updates (.pl-trigger will fire this) */
  $( '.pl-expandshortcode-toggle' ).on('template_ready', function(){

    $.expandshortcode-toggle.init( $(this) )

  })

  
  $(document).ready(function () {
    $('.pl-expandshortcode-toggle').on('click', function(event){
    	event.preventDefault();
    	// create expandshortcode variables
    	var expandshortcode = $(this);
    	var expandshortcodeContent = expandshortcode.next('.pl-expandshortcode-content');
    	
    	// toggle expandshortcode link open class
    	expandshortcode.toggleClass("open");
    	// toggle expandshortcode content
    	expandshortcodeContent.slideToggle(350);
    	
    });
});

 

}(window.jQuery);
