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

// /* Menu burger */
// var menuBtn = document.querySelector('.btn-menu');

// var nav = document.querySelector('.menu');

// // This is a flag so the class open can be added and removed at the correct time.
// // There are other ways of doing this such as multiplying 1 by -1 and storing the
// // result each time but this way is clearer I think.
// var menuOpen = false;

// menuBtn.addEventListener('click', function() {
//   if(!menuOpen) {
//     nav.classList.add('d-block');
//     menuOpen = true;
//   } else {
//     nav.classList.remove('d-block');
//     menuOpen = false;
//   }
// });
