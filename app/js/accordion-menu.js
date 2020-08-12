/***********************************************************************************************************************
DOCUMENT: scripts/accordian-menu.js
DEVELOPED BY: Ryan Stemkoski
COMPANY: Zipline Interactive
EMAIL: ryan@gozipline.com
PHONE: 509-321-2849
DATE: 3/26/2009
UPDATED: 3/25/2010
DESCRIPTION: This is the JavaScript required to create the accordion style menu.  Requires jQuery library
NOTE: Because of a bug in jQuery with IE8 we had to add an IE stylesheet hack to get the system to work in all browsers. I hate hacks but had no choice :(.
************************************************************************************************************************/
$(document).ready(function() {

	//ACCORDION BUTTON ACTION (ON CLICK DO THE FOLLOWING)
	$('.accordion-btn').click(function() {

		//REMOVE THE ON CLASS FROM ALL BUTTONS
		$('.accordion-btn').removeClass('on');

		//NO MATTER WHAT WE CLOSE ALL OPEN SLIDES
	 	$('.accordion-dropdown').slideUp('normal');

		//IF THE NEXT SLIDE WASN'T OPEN THEN OPEN IT
		if($(this).next().children().first().is(':hidden') == true) {

			//ADD THE ON CLASS TO THE BUTTON
			$(this).addClass('on');

			//OPEN THE SLIDE
			$(this).next().children().first().slideDown('normal');
		 }

	 });


	/*** REMOVE IF MOUSEOVER IS NOT REQUIRED ***/

	//ADDS THE .OVER CLASS FROM THE STYLESHEET ON MOUSEOVER
	$('.accordion-btn, .accordion-dropdown-btn').mouseover(function() {
		$(this).addClass('over');

	//ON MOUSEOUT REMOVE THE OVER CLASS
	}).mouseout(function() {
		$(this).removeClass('over');
	});

	/*** END REMOVE IF MOUSEOVER IS NOT REQUIRED ***/


	/********************************************************************************************************************
	CLOSES ALL S ON PAGE LOAD
	********************************************************************************************************************/
	$('.accordion-dropdown').hide();

});

jQuery(document).ready(function() {
	jQuery(".ticket-body").hide();
		//toggle the componenet with class msg_body
		jQuery(".ticket-stub").click(function()
	{
		jQuery(this).next(".ticket-body").slideToggle(300);
	});
});
