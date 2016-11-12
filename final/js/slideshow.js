/*
FILE NAME: final/js/slideshow.js
WRITTEN BY: Torjus Sandviken, Ingrid Ege Tørres
WHEN: October 2016
PURPOSE: Show, hide and navigate between slide show images.
*/

// Slide show, based on the following tutorials:
// http://www.w3schools.com/howto/howto_js_slideshow.asp
// http://www.w3schools.com/howto/howto_css_modal_images.asp
// http://www.w3schools.com/howto/howto_js_lightbox.asp

// Gets the target for an event
// http://stackoverflow.com/questions/5116929/get-clicked-li-from-ul-onclick
function getEventTarget(e) {
  e = e || window.event;
  return e.target || e.srcElement;
}

// DOM elements
var mainContainer = document.getElementById("mainContainer");
var modalBox = document.getElementById("modalBox");
var slideImage = document.getElementById("slideImage");
var prevBtn = document.getElementById("prevBtn");
var nextBtn = document.getElementById("nextBtn");
var images = document.getElementsByClassName('image');

// Show slide show when an image is clicked
for (var i = 0; i < images.length; i++) {
  images[i].onclick = function() {
    showSlideImage(this);
    // Make the background content static when the slide show is active
    mainContainer.style.position = "fixed";
  }
}

// Hide the slide show when we click anywhere in the screen
modalBox.onclick = function(event) {
  // If "previous" or "next" button: do nothing
  var target = getEventTarget(event);
  if (target == prevBtn || target == nextBtn) {
    return;
  }

  // Hide the slide show and make the background content dynamic
  modalBox.style.display = "none";
  mainContainer.style.position = "relative";
}

// Slide backwards
prevBtn.onclick = function() {
  var dataId = slideImage.getAttribute("data-imageid");
  var currentId = parseInt(dataId);
  if (currentId == 1) {
    currentId = images.length + 1;
  }

  slide(currentId - 1);
}

// SLide forwards
nextBtn.onclick = function() {
  var dataId = slideImage.getAttribute("data-imageid");
  var currentId = parseInt(dataId);
  if (currentId == images.length) {
    currentId = 0;
  }

  slide(currentId + 1);
}

// Performs the slide by changing the image source
function slide(id) {
  id = String(id);
  var image = document.getElementById(id);
  showSlideImage(image);
}

// Shows the chosen image in the slide show
function showSlideImage(image) {
  modalBox.style.display = "block";
  slideImage.src = image.src;
  var h = image.height;
  var w = image.width;

  var slideShowContainer = document.getElementById("slideShowContainer");
  slideShowContainer.className = "";
  slideShowContainer.className = "slideShowContainer";

  if (h > w) {
    slideShowContainer.className += " tallImage";
  } else {
    slideShowContainer.className += " wideImage";
  }

  // Set the slide show image id equal to the source image "data-id".
  slideImage.setAttribute("data-imageid", image.id);
}
