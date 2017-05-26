var TIMELINE_REVEAL_STEP = 3; // Step to show/hide more timeline items
var TIMELINE_ITEMS_SHOWED = 4; // Number of timeline items displayed
var TIMELINE_NB_ITEMS = $('#tline-ul .tline-item').length;
var timelineCursor = 0;


$('#timeline-button-less').click(function () {
  $('#timeline-button-more').removeClass('disabled');
  for (var i = 0; i < TIMELINE_REVEAL_STEP; i++) {
    if (timelineCursor > 0) {
      $('#tline-ul .tline-item').eq(timelineCursor - 1).fadeIn(500);
      $('#tline-ul .tline-item').eq(timelineCursor + TIMELINE_ITEMS_SHOWED - 1).hide();
      timelineCursor--;
    }
  }
  if (timelineCursor == 0) {
    $('#timeline-button-less').addClass('disabled');
  }
});

$('#timeline-button-more').click(function () {
  $('#timeline-button-less').removeClass('disabled');
  for (var i = 0; i < TIMELINE_REVEAL_STEP; i++) {
    if (timelineCursor + TIMELINE_ITEMS_SHOWED < TIMELINE_NB_ITEMS) {
      $('#tline-ul .tline-item').eq(timelineCursor + TIMELINE_ITEMS_SHOWED).fadeIn(500);
      $('#tline-ul .tline-item').eq(timelineCursor).hide();
      timelineCursor++;
    }
  }
  if (timelineCursor >= TIMELINE_NB_ITEMS - TIMELINE_ITEMS_SHOWED) {
    $('#timeline-button-more').addClass('disabled');
  }
});

$('.hover-extend > div').mouseenter(function () {
  $(this).find('.reveal').slideToggle(500);
});

$('.hover-extend > div').mouseleave(function () {
  $(this).find('.reveal').slideToggle(500);
});