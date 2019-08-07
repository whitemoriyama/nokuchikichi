/************************
Mouseover img fade
*************************/
$(function(){
	$("#footerBanner a img, .linkList dl dt a img").hover(
		function(){
			$(this).stop().fadeTo("fast",0.4);
		},
		function(){
			$(this).stop().fadeTo("fast",1);
		}
	);	
});

$(function(){
    $(".button-toggle").on("click", function() {
        $(".menu").slideToggle();
    });
});

/************************
Modal Show
*************************/
$(function(){
	modalShow();
});

function modalShow(){
	var target = $('#modal');
	var triggerOpen = $('#menu');
	var documentHeight = $(document).innerHeight() + 100;
	
	triggerOpen.click(function(){
		target.fadeIn(400)
			.addClass('modal-overlay')
				.height(documentHeight);
		return false;
	});
	
	$('#close,#modal').click(function(){
		target.fadeOut(0)
	});
};

/************************
SNS Share Button
*************************/
jQuery(document).ready(function($){
   /* サブウインドウ表示 */
   $(".opensub").click(function(){
      window.open(this.href,"WindowName","width=520,height=520,resizable=yes,scrollbars=yes");
      return false;
   });
});

/************************
Category Accordion
*************************/
$(function(){
	var $trigger = $('.sideNewsList ul li');
	$trigger.click(function(){
		$(this).children('ul').slideToggle(200);
	});
	$trigger.find('ul > li > a').click(function(e){
		e.stopPropagation();
	})
});

//$(function(){
	//カテゴリの折り畳み
//	$(".sideNewsList > ul.parents > li").on("click", function() {
//		$(this).children('ul').slideToggle(200);
//	});
//});

//$(function(){
//    $('.mainMenu').on('click', function() {
//        $(this).next('ul:not(:animated)').slideToggle();
//        $(this).children('.mainMenu').toggleClass('open');
        // メニューをクリックしたら他のサブメニューを閉じる
//        $('.children').not($(this).next('.children')).slideUp();
//        $('.mainMenu').children('.mainMenu').not($(this).children('.mainMenu')).removeClass('open');
//    });
//});

/************************
Add Phone Number
*************************/
if (navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)) {
  $(function() {
    $('.tel').each(function() {
      var str = $(this).html();
      if ($(this).children().is('img')) {
        $(this).html($('<a>').attr('href', 'tel:' + $(this).children().attr('alt').replace(/-/g, '')).append(str + '</a>'));
      } else {
        $(this).html($('<a>').attr('href', 'tel:' + $(this).text().replace(/-/g, '')).append(str + '</a>'));
      }
    });
  });
}

/************************
All Scroll
*************************/

$(function(){
  $('a[href^="#"]').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});


/************************
fadeIn
*************************/
$(document).ready(function() {
  $('.mainLogo,.mainCatch,#ourMisson h2,#ourMisson p').fadeIn(2000);
});