$(window).scroll(function() {
	
    var scroll = $(window).scrollTop();
    
	if (scroll > 70) {
        $("body").addClass("t-80");
    } else {
        $("body").removeClass("t-80");
    }
    
	if (scroll > 108) {
        $("body").addClass("t-180");
    } else {
        $("body").removeClass("t-180");
    }
});

 var	lastScrollY = 0;
 		ticking = false;

function onScroll() {
	lastScrollY = window.scrollY;
	requestTick();
}

function requestTick() {
	if (!ticking) {
		requestAnimFrame(update);
		ticking = true;
	}
}

/**
 * Our animation callback
 */
function update() {

	var scroll = $(window).scrollTop();
	
	$(".parallaxBG").each(function () {
		var parallaxBG = $(this);
		parallaxBG.css("background-position", "center " + Math.round((scroll) / parallaxBG.data("rate")) + "px");
	});	

	$(".parallaxDown").each(function () {
		var paraDown = $(this);
		paraDown.css("transform", "translate3d(0," + Math.round((scroll) / paraDown.data("rate")) + "px" + ",0)");
	});

	$(".parallaxUp").each(function () {
		var paraUp = $(this);
		paraUp.css("transform", "translate3d(0," + Math.round((scroll) / -paraUp.data("rate")) + "px" + ",0)");

		//console.log(paraUp.data("rate"));
	});


	// allow further rAFs to be called
	ticking = false;
}

 // only listen for scroll events
window.addEventListener('scroll', onScroll, false);

 // shim layer with setTimeout fallback
window.requestAnimFrame = (function () {
	return window.requestAnimationFrame ||
		window.webkitRequestAnimationFrame ||
		window.mozRequestAnimationFrame ||
		window.oRequestAnimationFrame ||
		window.msRequestAnimationFrame ||
		function (callback) {
			window.setTimeout(callback, 1000 / 60);
		};
})();

$(document).ready(function() {
	$('a[href^="#"], li.on li.scrollThis a').click(function(e) {
		e.preventDefault();
		$(window).stop(true).scrollTo(this.hash, {duration:600,  offset:-70});
  	});
  
	$('#heroslides').on('cycle-after', function (e, optionHash, outgoingSlideEl, incomingSlideEl, forwardFlag) {
		$(outgoingSlideEl).children('.heroslides').removeClass('motion');
		$(outgoingSlideEl).children('.words').removeClass('active-words');
	});

	$('#heroslides').on('cycle-before', function (e, optionHash, outgoingSlideEl, incomingSlideEl, forwardFlag) {	
		$(incomingSlideEl).children('.heroslides').addClass('motion');		
		$(incomingSlideEl).children('.words').addClass('active-words');		
	});
	
	//exand the cycle gallery 	
	$('.ev_toggle').click(function() {	
		
		var ex_this_button = $(this);
		var ex_this = ex_this_button.parent().parent().find(".expand_view").eq(0);
		console.log(ex_this);
		
		if (ex_this.hasClass('ev_expanded')){
			ex_this.removeClass('ev_expanded'); 
			ex_this_button.removeClass('ev_button_expanded');
		} else {
			ex_this.addClass('ev_expanded');
			ex_this_button.addClass('ev_button_expanded');
		}
	
	});
	
	//find the last slide and change to one slide before and one slide after
	
	/*$('.btn-floorplan').click(function(e){
		var listing = $(this).attr('data-listing');
		alert(listing);


		
		$('#listing1').on('cycle-initialized', function (e, optionHash) {
			var caption = optionHash.slideCount;
				$('.slideCount').html(caption);
			});

		$('.btn-floorplan').click(function(e){
		var number = document.getElementsByClassName('slideCount').innerHTML;
		//images are indexed from 0, there slide has 3 images indexed at 0, 1, 2
		number = number-1;
		$('.cycle-slideshow').cycle('goto', number);
			//});
	
		});
});

	$('.btn-floorplan').click(function(e){
		var listing = $(this).attr('data-listing');
		alert(listing);
		//$("#" + listing).hide();
		
	});
	$('.cycle-slideshow').on('cycle-initialized', function (e, optionHash) {
			var caption = optionHash.slideCount;
			$('.slideCount').html(caption);
		});
	//$("#listing1").on('cycle-initialized', function (e, optionHash) {
	//		var caption = optionHash.slideCount;
	//		alert(caption);
	//		$('.slideCount').html(caption);
	//	});

	//$('.btn-map').click(function(e){
	//	var number = document.getElementsByClassName('slideCount').innerHTML;
	//	alert(number);
		//images are indexed from 0, there slide has 3 images indexed at 0, 1, 2
	//	number = number-4;
	//	$('#listing1').cycle('goto', number);
	//});

*/
	



	
	$('#f_call').click(function() {
		
		var f_emailaddress = $('input#f_emailaddress').val();
		
		if(f_emailaddress === ''){
		  $('input#f_emailaddress').val("pleasecall@notsupplied.com");
	  	}
		
		$('#t_f_email').hide();		
		$('#t_f_call').show();
		$(this).addClass('btn-solid-enq').removeClass(' btn-smoke');
		$('#f_email').removeClass('btn-solid-enq').addClass(' btn-smoke');
		$('#f_email_call').removeClass('btn-solid-enq').addClass('btn-smoke');
	});	
	
	$('#f_email').click(function() {
			
		if($('input#f_emailaddress').val() === 'pleasecall@notsupplied.com'){	
		  $('input#f_emailaddress').val('');
	  	}	
			
		$('#t_f_call').hide();		
		$('#t_f_email').show();
		$(this).addClass('btn-solid-enq').removeClass('btn-smoke');
		$('#f_call').removeClass('btn-solid-enq').addClass(' btn-smoke');
		$('#f_email_call').removeClass('btn-solid-enq').addClass(' btn-smoke');
	});	
	
	$('#f_email_call').click(function() {
		
		$('#t_f_call').show();		
		$('#t_f_email').show();
		
		$(this).addClass('btn-solid-enq').removeClass(' btn-smoke');		
		$('#f_call').removeClass('btn-solid-enq').addClass(' btn-smoke');
		$('#f_email').removeClass('btn-solid-enq').addClass(' btn-smoke');
			
	});	
/*
	$('.cycle-slideshow').cycle();
	
	$('#cycle_aus_4503p3').on('cycle-initialized', function (e, optionHash) {
			//var caption = optionHash.slideCount;
			var caption =2;
			$('.slideCount').html(caption);
		});

		$('#btn_aus_4503p3').click(function(e){
			var number = document.getElementsByClassName('slideCount').innerHTML;
			number = number-1;
			$('#aus_4503p3').cycle('goto', number);
		});

		$('#btn_map_aus_4503p3').click(function(e){
			var number = document.getElementsByClassName('slideCount').innerHTML;
			number = number-2;
			$('#aus_4503p3').cycle('goto', number);
	});*/
});

$('#cycle_aus_4503p3').on('cycle-initialized', function (e, optionHash) {
    var caption = optionHash.slideCount;
    	$('#slideCount_aus_4503p3').html(caption);
    	$('#slideCount_aus_4503p3').hide();
	});

$('#btn_aus_4503p3').click(function(e){
	var number = document.getElementById('slideCount_aus_4503p3').innerHTML;
	//images are indexed from 0, there slide has 3 images indexed at 0, 1, 2
	number = number-1;
	$('#cycle_aus_4503p3').cycle('goto', number);
	$(window).stop(true).scrollTo($('#cycle_aus_4503p3'), {duration:600, offset:-90});
});

$('#btn_map_aus_4503p3').click(function(e){
	var number = document.getElementById('slideCount_aus_4503p3').innerHTML;
	//images are indexed from 0, there slide has 3 images indexed at 0, 1, 2
	number = number-2;
	$('#cycle_aus_4503p3').cycle('goto', number);
	$(window).stop(true).scrollTo($('#cycle_aus_4503p3'), {duration:600,   offset:-90});
});


$('#cycle_aus_4502p2').on('cycle-initialized', function (e, optionHash) {
    var caption = optionHash.slideCount;
    	$('#slideCount_aus_4502p2').html(caption);
    	$('#slideCount_aus_4502p2').hide();
	});

$('#btn_fp_aus_4502p2').click(function(e){
	var number = document.getElementById('slideCount_aus_4502p2').innerHTML;
	//images are indexed from 0, there slide has 3 images indexed at 0, 1, 2
	number = number-1;
	$('#cycle_aus_4502p2').cycle('goto', number);
	$(window).stop(true).scrollTo($('#cycle_aus_4502p2'), {duration:600, offset:-90});
});

$('#btn_map_aus_4502p2').click(function(e){
	var number = document.getElementById('slideCount_aus_4502p2').innerHTML;
	//images are indexed from 0, there slide has 3 images indexed at 0, 1, 2
	number = number-2;
	$('#cycle_aus_4502p2').cycle('goto', number);
	$(window).stop(true).scrollTo($('#cycle_aus_4502p2'), {duration:600, offset:-90});
});


$('#cycle_m1_4503ph3').on('cycle-initialized', function (e, optionHash) {
    var caption = optionHash.slideCount;
    	$('#slideCount_m1_4503ph3').html(caption);
    	$('#slideCount_m1_4503ph3').hide();
	});

$('#btn_fp_m1_4503ph3').click(function(e){
	var number = document.getElementById('slideCount_m1_4503ph3').innerHTML;
	//images are indexed from 0, there slide has 3 images indexed at 0, 1, 2
	number = number-1;
	$('#cycle_m1_4503ph3').cycle('goto', number);
	$(window).stop(true).scrollTo($('#cycle_m1_4503ph3'), {duration:600, offset:-90});
});

$('#btn_map_m1_4503ph3').click(function(e){
	var number = document.getElementById('slideCount_m1_4503ph3').innerHTML;
	//images are indexed from 0, there slide has 3 images indexed at 0, 1, 2
	number = number-2;
	$('#cycle_m1_4503ph3').cycle('goto', number);
	$(window).stop(true).scrollTo($('#cycle_m1_4503ph3'), {duration:600, offset:-90});
});	

$('#cycle_m1_4501ph1').on('cycle-initialized', function (e, optionHash) {
    var caption = optionHash.slideCount;
    	$('#slideCount_m1_4501ph1').html(caption);
    	$('#slideCount_m1_4501ph1').hide();
	});

$('#btn_fp_m1_4501ph1').click(function(e){
	var number = document.getElementById('slideCount_m1_4501ph1').innerHTML;
	//images are indexed from 0, there slide has 3 images indexed at 0, 1, 2
	number = number-1;
	$('#cycle_m1_4501ph1').cycle('goto', number);
	$(window).stop(true).scrollTo($('#cycle_m1_4501ph1'), {duration:600, offset:-90});
});

$('#btn_map_m1_4501ph1').click(function(e){
	var number = document.getElementById('slideCount_m1_4501ph1').innerHTML;
	//images are indexed from 0, there slide has 3 images indexed at 0, 1, 2
	number = number-2;
	$('#cycle_m1_4501ph1').cycle('goto', number);
	$(window).stop(true).scrollTo($('#cycle_m1_4501ph1'), {duration:600, offset:-90});
});	

$('#cycle_sbc_4703z').on('cycle-initialized', function (e, optionHash) {
    var caption = optionHash.slideCount;
    	$('#slideCount_sbc_4703z').html(caption);
    	$('#slideCount_sbc_4703z').hide();
	});

$('#btn_sbc_4703z').click(function(e){
	var number = document.getElementById('slideCount_sbc_4703z').innerHTML;
	//images are indexed from 0, there slide has 3 images indexed at 0, 1, 2
	number = number-1;
	$('#cycle_sbc_4703z').cycle('goto', number);
	$(window).stop(true).scrollTo($('#cycle_sbc_4703z'), {duration:600, offset:-90});
});

$('#btn_map_sbc_4703z').click(function(e){
	var number = document.getElementById('slideCount_sbc_4703z').innerHTML;
	//images are indexed from 0, there slide has 3 images indexed at 0, 1, 2
	number = number-2;
	$('#cycle_sbc_4703z').cycle('goto', number);
	$(window).stop(true).scrollTo($('#cycle_sbc_4703z'), {duration:600, offset:-90});
});	

