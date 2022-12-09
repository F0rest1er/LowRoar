	$(window).load(function() {
	  "use strict";
	var $container = $('.gallery-main');
	$container.isotope({
		layoutMode: "masonry",
		itemSelector : '.gallery-item-main',
		transitionDuration: '0.5s'
	});
	var $optionSets = $('.gallery-item-filter'),
		$optionLinks = $optionSets.find('a');
	$optionLinks.click(function(){
		var $this = $(this);
		if ( $this.hasClass('active') ) {
			return false;
		}
		var $optionSet = $this.parents('.gallery-item-filter');
		$optionSet.find('.active').removeClass('active');
		$this.addClass('active');
	var options = {},
		key = $optionSet.attr('data-option-key'),
		value = $this.attr('data-option-value');
	value = value === 'false' ? false : value;
	options[ key ] = value;
		if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
		changeLayoutMode( $this, options );
	} else {
		$container.isotope( options );
	}    
	return false;
	});
});


