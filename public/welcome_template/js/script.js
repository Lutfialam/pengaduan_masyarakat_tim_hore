AOS.init({
    duration: 1000,
    offset: 100,
    delay: 900,
  });



var rellax = new Rellax('.rellax'); 

jQuery(document).ready(function($) {
  function animateElements() {
          $('.pr-chart-ctrl').each(function() {
              var elementPos = $(this).offset().top;
              var topOfWindow = $(window).scrollTop();
              var animate = $(this).data('animate');
              if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                  $(this).data('animate', true);
                  $(this).find('.pr-chart').easyPieChart({
                      size: 160,
                      barColor: 'red',
                      trackColor: '#f1f1f1',
                      scaleColor: false,
                      scaleLength: 3,
                      lineWidth: 15,
                      lineCap: 'butt',
                      onStep: function(from, to, percent) {
                          $(this.el).find('i').text(Math.round(percent) + '%');
                      }
                  }).stop();
              }
          });
      }
  animateElements();
  $(window).scroll(animateElements);
});
