/*!
 * mCMS 2.1 default template. For more details - https://marsislav.net, https://web-agency.org
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */
/*Resize header on scroll*/
$(function () {
  var header = $("header");
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 155) {
      header.removeClass("small").addClass("big");
    } else {
      header.removeClass("big").addClass("small");
    }
  });
});
/*END - Resize header on scroll*/

/*Image Pop-up */
/*END - Image Pop-up */

/*Smooth  scroll*/
/*END - Smooth scroll*/
