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
      header.css({
        "background-color": "#FF7900",
        "font-size": "200%",
        transition: "0.5s",
        height: "70px",
      });
    } else {
      header.css({
        "background-color": "#80C31C",
        "font-size": "200%",
        transition: "0.5s",
        height: "120px",
      });
    }
  });
});
/*END - Resize header on scroll*/

/*Image Pop-up */
/*END - Image Pop-up */

/*Smooth  scroll*/
/*END - Smooth scroll*/
