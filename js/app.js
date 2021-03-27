/*!
 * mCMS 2.1 default template. For more details - https://marsislav.net, https://web-agency.org
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */
/*Resize header on scroll*/
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.querySelector(".navbar").style.fontSize = "30px";
  } else {
    document.querySelector(".navbar").style.fontSize = "90px";
  }
}
/*END - Resize header on scroll*/

/*Image Pop-up */
/*END - Image Pop-up */

/*Smooth  scroll*/
/*END - Smooth scroll*/
