$(document).ready(function(e) {
	$('.methods_blocks_item').fancybox({ 'closeBtn': false});
	var is_main_screen = 1;
	$('header .tomain').click(function(){
		if(!is_main_screen){
			$('.screen').css('display','none');
			$('.home_screen').fadeIn();	
		}
		is_main_screen = 1;
		return false;
	});
	$('.new_deposit_button').click(function(){
		is_main_screen = 0;
		$('.screen').css('display','none');
		$('.new_deposit_screen').fadeIn();
	});

	$('.withdraw_button').click(function(){
		is_main_screen = 0;
		$('.screen').css('display','none');
		$('.withdraw_screen').fadeIn();
	});

	$('.transaction_button').click(function(){
		is_main_screen = 0;
		$('.screen').css('display','none');
		$('.transaction_history_screen').fadeIn();
	});
	$('.transaction_back').click(function(){
		is_main_screen = 1
		$('.screen').css('display','none');
		$('.home_screen').fadeIn();
		return false;
	});


	$('.affiliate_button').click(function(){
		is_main_screen = 0;
		$('.screen').css('display','none');
		$('.affiliate_screen').fadeIn();
	});


	$('.affiliate_button').click(function(){
		is_main_screen = 0;
		$('.screen').css('display','none');
		$('.affiliate_screen').fadeIn();
	});

	$('.back_link').click(function(){
		is_main_screen = 1;
		$('.screen').css('display','none');
		$('.home_screen').fadeIn();
	});



});


