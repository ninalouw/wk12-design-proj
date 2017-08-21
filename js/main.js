$(function(){
    /*this jquery hides and shows job titles*/
    $('.team-overlay').hide();
    $('.team-image-div').on("mouseover", function () {
        $(this).children('.team-overlay').show();
        // ('.team-image-div').css({"opacity":0.8});
    });

    $('.team-image-div').on("mouseout", function () {
        $(this).children('.team-overlay').hide();
    });

    /*Jquery image slider
    This is the func that makes the slides auto play on
    the index and about pages
    */
    var counter = 0;
    function autoImageSlider(){
        $slideshow = $(".gallery ul");
        $slideActive = $slideshow.find("li.each").eq(counter).addClass('active').show().fadeIn(4000);
        counter += 1;
        $slideshow.find("li.each").eq(counter - 1).removeClass("active");
        $slideActive = $slideshow.find("li.each").eq(counter).addClass('active').fadeIn(4000);
        if (!$slideActive.size()){
            counter = 0;
            $slideActive = $slideshow.find("li.each").first();
            $slideshow.find("li.active").removeClass("active");
            $slideActive.addClass("active");
        }
    }
    /*Jquery image slider
    This jquery makes the slides go from one to the next
    when the user presses the arrow button
    */
    $slideshow = $(".gallery ul");
    $slideActive = $slideshow.find("li.each").first().addClass('active').show().fadeIn(4000);
    $(".direction .next").click(function () {
        $slideActive = $slideshow.find("li.active").next().fadeIn(4000);
        if (!$slideActive.size())
            $slideActive = $slideshow.find("li.each").first();
        $slideshow.find("li.active").removeClass("active");
        $slideActive.addClass("active");
    });

    $('.about-image-slider-container, .image-slider-container').on('click', function(){
        stopSlider();
    });
    /* sets the interval and calls autoImageSlider*/
    var autoSlide = setInterval(function () { 
                        autoImageSlider();
                    }, 4000);
    /* stops the interval and the slider
    called by onlick of stop-slider btn*/
    function stopSlider() {
        clearInterval(autoSlide);
    }

    /*this adds an image preview in the backend portfolio_form.php, so that 
    client can see what image they are selecting 
    */
    $('select, .imageSelect').change(function() {
        var selectedImage = $(this).val();
        var previewDiv = $(this).siblings('.image-preview');
        $(previewDiv).html('<p class="text-muted">Image Preview</p><img class="img-responsive" src="' + selectedImage + '" alt="image" />');
    });
});




