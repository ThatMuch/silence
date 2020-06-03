/*!
 * Essential javascript functions/variables
 *
 * @author      _a
 * @version     0.1.0
 * @since       _s_1.0.0.0
 *
 */

/*==================================================================================
  General Variables & Presets
==================================================================================*/


/* Viewport Width
/––––––––––––––––––––––––*/
var $vpWidth = jQuery(window).width();

/* Touch Device
/––––––––––––––––––––––––*/
var $root = $('html');
var isTouch = 'ontouchstart' in document.documentElement;
if (isTouch) {
  $root.attr('data-touch', 'true');
} else {
  $root.attr('data-touch', 'false');
}


/* Debouncer
/––––––––––––––––––––––––*/
// prevents functions to execute to often/fast
// Usage:
// var myfunction = debounce(function() {
//   // function stuff
// }, 250);
// window.addEventListener('resize', myfunction);
function debounce(func, wait, immediate) {
  var timeout;
  return function() {
    var context = this, args = arguments;
    var later = function() {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
}

/* Menu burger */
var menuBtn = document.querySelector('.btn-menu');
var closeBtn = document.querySelector('.close-search');
var nav = document.querySelector('.menu');

// This is a flag so the class open can be added and removed at the correct time.
// There are other ways of doing this such as multiplying 1 by -1 and storing the
// result each time but this way is clearer I think.
var menuOpen = false;

menuBtn.addEventListener('click', function() {
  if(!menuOpen) {
    nav.classList.add('d-block');
    menuOpen = true;
  } else {
    nav.classList.remove('d-block');
    menuOpen = false;
  }
});

closeBtn.addEventListener('click', function() {
    nav.classList.remove('d-block');
    menuOpen = false;
});

/* SELECT OPTIONS */

/*
Reference: http://jsfiddle.net/BB3JK/47/
*/

function generateListItems(select, list) {
  list.children().remove()
  for (var i = 1; i < select.children('option').length; i++) {
    $('<li />', {
        text: select.children('option').eq(i).text(),
        rel: select.children('option').eq(i).val()
    }).appendTo(list);
}

list.children('li').click(function() {
  // e.stopPropagation();
   select.next('div.select-styled').text($(this).text()).removeClass('active');
   select.val($(this).attr('rel')).trigger('change');
   list.hide();
});
}

$('select').each(function(){
  var $this = $(this);
  $this.addClass('select-hidden');
  $this.wrap('<div class="select"></div>');
  $this.after('<div class="select-styled"></div>');


  var $styledSelect = $this.next('div.select-styled');
  $styledSelect.text($this.children('option').eq(0).text());

  var $list = $('<ul />', {
      'class': 'select-options'
  }).insertAfter($styledSelect);


  generateListItems($this, $list)

  $styledSelect.click(function(e) {
    console.log("toto");
    if($this.is(':enabled')) {
      e.stopPropagation();
      $('div.select-styled.active').not(this).each(function(){
          $(this).removeClass('active').next('ul.select-options').hide();
      });
      $(this).toggleClass('active').next('ul.select-options').toggle();
    }
  });

  $(document).click(function() {
      $styledSelect.removeClass('active');
      $list.hide();
  });

});

/* DISPLAY SEARCH */

$(".btn-search").click(function() {
  $(".search").toggleClass("d-block");
  $('.site-content').toggle(function () {
    $(".site-content").css({height: "100%",overflow: "hidden"});
}, function () {
    $(".site-content").css({height: "100%"});
});
})

$(".close-search").click(function () {
  $(".search").toggleClass("d-block");
  $(".site-content").css({height: "100%", display: "block"});

})

/* Form search */
var select = $('#subCat');
var label = $('#subCat+.select-styled');
var legend = $('#card-sub legend');

select.parent().addClass('disabled');

$(".showMore").click(function(){
  var $this = $(this);
  $this.prev().toggleClass('full');
  if ($this.text() === "lire +") {
    $this.text('lire -')
  } else {
    $this.text('lire +')
  }
})



/* Button call scroll bottom */
$('.button_call').click(function () {
    $('html, body').animate({scrollTop:$(document).height()}, 'slow');
    return false;
});


$(window).on("scroll", function() {
	var scrollHeight = $(document).height();
	var scrollPosition = $(window).height() + $(window).scrollTop();
	if ((scrollHeight - scrollPosition) / scrollHeight === 0) {
    $('.button_call').css('display','none');
	}else{
    $('.button_call').css('display','block');
  }
});
