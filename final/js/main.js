/**
 * This is the main script for the site.
 */

var ul = document.getElementById('nav-list');

/**
 * When the html page is loaded the loadMain function is run.
 */
window.onload = loadMain;

/**
 * getEventTarget - Gets the target for the event.
 *
  * http://stackoverflow.com/questions/5116929/get-clicked-li-from-ul-onclick
 * @param  {event} e event
 * @return {DOM element}   event target
 */
function getEventTarget(e) {
    e = e || window.event;
    return e.target || e.srcElement;
}

/**
 * loadMain - Loads the home page.
 */
function loadMain() {
    var inner = '<object type="text/html" data=home.html></object>';
    document.getElementById("content").innerHTML = inner;
}

/**
 * ul.onClick - onClick-handler for ul.
 *
 * @param  {event} event the click event.
 */
ul.onclick = function(event) {
    var li = getEventTarget(event);
    if (li === null) {
        console.log("List item was not found in the navigation bar.");
    } else {
        var url = li.dataset.url;
        var inner = '<object type="text/html" data=' + url + '.html></object>';
        document.getElementById("content").innerHTML = inner;
    }
};
