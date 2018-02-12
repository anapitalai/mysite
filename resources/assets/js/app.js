
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});


//js
function loadImage(id, targetId) {
    // Either an <img>, or an element with a "data-image" attribute
    var el = document.getElementById(id);
  
    // Either the same element as above, or the targetId element
    var targetEl = targetId ? document.getElementById(targetId) : el;
  
    // Either the loaded <img>, or the path specified by the "data-image" attribute
    var imageToLoad;
  
    if (el.dataset.image) {
      imageToLoad = el.dataset.image;
    } else if (typeof el.currentSrc === 'undefined') {
      imageToLoad = el.src;
    } else {
      imageToLoad = el.currentSrc;
    }
  
    if (imageToLoad) {
      var img = new Image();
      img.src = imageToLoad;
      img.onload = function() {
        targetEl.classList.add('is-loaded');
      };
    }
  }
  
  document.addEventListener('DOMContentLoaded', function() {
    loadImage('wallpaper');
    loadImage('pictureImage', 'picture');
  });