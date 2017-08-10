$(function(){
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
});

