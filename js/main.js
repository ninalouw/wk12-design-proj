$(function(){
    /*this jquery hides and shows job titles*/
    $('#our-work-overlay').hide();
    $('#our-work').on("mouseover", function () {
        $('#our-work-overlay').show();
        $('#our-work-content').hide();
    });

    $('#our-work').on("mouseout", function () {
        $('#our-work-overlay').hide();
        $('#our-work-content').show();
    });

    $('.team-overlay').hide();
    $('.team-image-div').on("mouseover", function () {
        $(this).children('.team-overlay').show();
        // ('.team-image-div').css({"opacity":0.8});
    });

    $('.team-image-div').on("mouseout", function () {
        $(this).children('.team-overlay').hide();
    });



        $slideshow = $(".gallery ul");
        $slideactive = $slideshow.find("li.each").first().addClass('active').show().fadeIn();
        //jquery to use next arrow btn
        $(".direction .next").click(function () {
            $slideactive = $slideshow.find("li.active").next().fadeIn();
            if (!$slideactive.size())
                $slideactive = $slideshow.find("li.each").first(); 
                $slideshow.find("li.active").removeClass("active");
            $slideactive.addClass("active");
        });

    /*image slider*/
    // var imageArray = ['img/about-work-hero.jpg', 'img/hero.jpg', 'img/contact-hero-1.jpg', 'img/contact-hero.jpg', 'img/hero-about.jpg'];
    
    // //make below func run onload? onmouseover?

    // function imageSlider(){
    //     var counter = 0;
    //     //set attr
    //     console.log(imageArray[counter]);
    //     $('#img-slider').attr("src", "imageArray[counter]");
    //     //increment counter
    //     counter += 1;
    //     if (counter > imageArray.length){
    //         counter = 0;
    //     }
    // }
    // //make a set interval that calls this func
    // // imageSlider();
    // setInterval(function () { 
    //     imageSlider();
    // }, 3000);

    /*this adds an image preview in the backend portfolio_form.php, so that 
    client can see what image they are selecting 
    */
    $('select, .imageSelect').change(function() {
        var selectedImage = $(this).val();
        var previewDiv = $(this).siblings('.image-preview');
        $(previewDiv).html('<p class="text-muted">Image Preview</p><img class="img-responsive" src="' + selectedImage + '" alt="image" />');
    });
});




