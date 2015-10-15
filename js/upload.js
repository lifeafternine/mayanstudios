jQuery(function($) {

$('.image-uploader').each(function() {
  var container = $(this),
      input = container.find('.upload_image');
  container.on('click', '.upload_image_button', function() {
    window.formfield = input.attr('name');
    tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
    window.send_to_editor = function(html) {
      var imgurl = jQuery('img',html).attr('src');
      input.val(imgurl);
      tb_remove();
    };
    return false;
  });
});
 
 
});

jQuery(function($) {
  $('.video-hero').each(function() {
    var container = $(this),
        video = container.find('video'),
        playing;
    function toggleClasses() {
      container
        .toggleClass('playing', playing)
        .toggleClass('paused', !playing);
    }
    function onPlayingStarted() {
      playing = true;
      toggleClasses();
    }
    function onPlayingStopped() {
      playing = false;
      toggleClasses();
    }

    // Create a DIV positioned over the video when it isn't playing (for iOS
    // primarily, which doesn't autoplay and always shows a big 'play' button)
    function createPoster() {
      video.each(function() {
        var el = $(this),
            poster = el.attr('poster'),
            div;
        if (poster) {
          el.after(
            div = $(document.createElement('div'))
              .addClass('poster')
              .css('background-image', 'url(' + poster + ')')
          );
        }
      });
    }

    if (video.length) {
      playing = !video[0].paused;
      // https://developer.mozilla.org/en-US/docs/Web/Guide/Events/Media_events
      video.on('play playing', onPlayingStarted);
      video.on('ended pause', onPlayingStopped);
      container.on('click', '.play, .pause', function() {
        video.each(function() {
          (this[playing ? 'pause' : 'play'])();
        });
        return false;
      });
      if (!playing) {
        createPoster();
      }
    }
  });
});