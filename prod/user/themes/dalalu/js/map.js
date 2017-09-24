(function ($) {
  'use strict';

  jQuery(document).ready(function () {

    /* Google Map */

    $('#carte-page1').gMap({
      zoom: 15,
      scrollwheel: false,
      maptype: 'ROADMAP',
      markers: [
        {
          address: "152 Rue de Suzon 33400 talence",
          /* You can change your address from here */
          html: "<b>Address</b>: <br> 152 Rue de Suzon",
          /* You can change display address text from here */
          popup: true
        }
      ]
    });

    $('#carte-page2').gMap({
      zoom: 15,
      scrollwheel: false,
      maptype: 'ROADMAP',
      markers: [
        {
          address: "Quinconces, Bordeaux",
          /* You can change your address from here */
          html: "<b>Address</b>: <br> Quinconces, Bordeaux",
          /* You can change display address text from here */
          popup: true
        },
        {
          address: "Gambetta, Bordeaux",
          /* You can change your address from here */
          html: "<b>Address</b>: <br> Gambetta, Bordeaux",
          /* You can change display address text from here */
          popup: true
        }
      ]
    });


  });

})(jQuery);