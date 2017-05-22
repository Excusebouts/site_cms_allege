$('#timeline-button').click(function () {
  var TIMELINE_REVEAL_STEP = 4;
  var nbItemsRevealed = 0;
  $('#tline-ul li').each(function (index, elt) {
    if (nbItemsRevealed < TIMELINE_REVEAL_STEP && $(elt).css('display') == 'none') {
      nbItemsRevealed++;
      $(elt).show();
    }
  });
});
