(function ($) {
  'use strict';

  jQuery(document).ready(function () {

    /* Google Map */

    $('#carte-page1').gMap({
      zoom: 15,
      scrollwheel: false,
      maptype: 'ROADMAP',
      markers: markerMaps
    });
 
    $('#carte-page2').gMap({
      zoom: 5,
      latitude: 46.52863469527167,
      longitude: 2.43896484375,
      scrollwheel: true,
      maptype: 'ROADMAP',    
      markers: markerMaps
    });
  });

})(jQuery);