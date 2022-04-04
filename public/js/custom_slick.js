 $(document).ready(function(){
        $('.single-item').slick({
        infinite: true,
        speed: 600,
        slidesToShow: 1,
        autoplay: true,
        adaptiveHeight: true
        }); 
        // end first slick

        $('.col-test-card').slick({
          slidesToShow: 3,
          autoplay: true,
          autoplaySpeed: 2000,
          dots: true,
          // this is to make the slick responsive 
          responsive: [{
            breakpoint: 768,
            settings: {
              slidesToShow: 1
            }
          }]

        });
        // end second slick for the testimony text

        $('.col-test-video').slick({
          slidesToShow: 3,
          autoplay: true,
          autoplaySpeed: 2000,
          dots: true,
          // this is to make the slick responsive 
          responsive: [{
            breakpoint: 768,
            settings: {
              slidesToShow: 1
            }
          }]

        });
        // end second slick for the testimony text

        // for the bootstrap tooltip.js
        $('[data-toggle="tooltip"]').tooltip();

        

         // scroll up for live bitcoin prices
           $('.live').cycle({
              fx: 'scrollUp',
              random:  1,
              delay:  9000,
              cleartypeNoBg: true,
              center: true,
              height: "fit"

            });
           // end of live price bitcoin counter
        
    });
