// This is the main script.

// Actions on loading of window
window.onload = function() {
  fadeAtLoad();
  addNavigatonStyling();
}

// Navigation bar CSS style script
function addNavigatonStyling() {
  // Get the url of the current page.
  var href = window.location.href;
  var url = href.substr(href.lastIndexOf('/') + 1);

  // Get all the anchors in the page
  var anchors = document.getElementsByTagName('a');

  // Searh for the anchor with the same url as the current page and add styling to that anchor.
  for (var i = 0; i < anchors.length; i++) {
    var anchor = anchors[i];
    var anchorUrl = anchor.href.substr(anchor.href.lastIndexOf('/') + 1);
    if (anchorUrl == url) {
      anchor.style.color = "black";
      anchor.style.fontWeight = "bold";
      break;
    }
  }
}

// Fade in script for images:
// Applies a fade in animation to all pages that have an image container.
function fadeAtLoad() {
  const bilder = document.getElementById('mainContainer')
  if (bilder != null) {
    bilder.style.opacity = 1;
  }
}
