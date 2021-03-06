/*!
 * mCMS 2.1 default template. For more details - https://marsislav.net, https://web-agency.org
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */
/*Resize header on scroll*/
$(function () {
  var header = $("header");
  var logo = $("header .logoImg");
  var navbar = $(".navbar-nav");
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 170) {
      header.css({
        "background-color": "#FF7900",
        "font-size": "200%",
        transition: "0.5s",
        height: "70px",
        "box-shadow": "0 4px 10px -2px gray",
      });
      logo.css({
        height: "60px",
        transition: "0.5s",
      });
      navbar.css({
        margin: "4% 0 0 0",
        transition: "0.5s",
      });
    } else {
      header.css({
        "background-color": "#80C31C",
        transition: "0.5s",
        height: "120px",
        "box-shadow": "0 4px 10px -2px gray",
      });
      logo.css({
        height: "110px",
      });
      navbar.css({
        margin: "13% 0 0 0",
        transition: "0.5s",
      });
    }
  });
});
/*END - Resize header on scroll*/

/*Image Pop-up */
/*END - Image Pop-up */

/*Smooth  scroll*/
/*END - Smooth scroll*/
