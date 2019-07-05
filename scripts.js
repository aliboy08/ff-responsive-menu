function ff_responsive_menu() {
	var $responsive_menu_trigger = $('.responsive-menu-trigger-button');
	$responsive_menu_trigger.click(ff_responive_menu_toggle);
	$('.ff-responsive-menu-mask').click(ff_responive_menu_toggle);
	function ff_responive_menu_toggle(){
		$responsive_menu_trigger.toggleClass('active');
		$('body').toggleClass('responsive-menu-open');
	}
	// Sub-menu toggle
	$('.ff-responsive-menu .menu-item-has-children .sub-menu').each(function(){
		var sub_menu_trigger = $('<span class="sub-menu-trigger"><i class="fa"></i></span>');
		$(this).before(sub_menu_trigger);
		sub_menu_trigger.click(function(){
			$(this).toggleClass('active');
			$(this).next('.sub-menu').toggleClass('active');
		});
	});
	$('.ff-responsive-menu .current-menu-item .sub-menu-trigger, .ff-responsive-menu .current-menu-item .sub-menu').addClass('active');
}
ff_responsive_menu();
