/*
  Created by Code the Change UBC
*/

/*
  for webpage sizes that are greater than 992px,
  the function will create the slide down/up effect seen
  when hovering over the dropdown menu
*/
$(document).ready(function() {
  $(".dropdown").hover(function() {
    if ($(document).width() > 992) {
      $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideDown();   // Change the number within the delay to slow down or increase the time before the dropdown slides down
    }
    }, function() {
    if ($(document).width() > 992) {
      $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
    }
    });
});
