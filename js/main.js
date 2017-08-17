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

    /*this adds an image preview in the portfolio_form 
    */
    var idArray = [['#imageSelect1', '#image-preview1'], ['#imageSelect2', '#image-preview2'],
    ['#imageSelect3', '#image-preview3'], ['#imageSelect4', '#image-preview4'],
    ['#imageSelect5', '#image-preview5'], ['#imageSelect6', '#image-preview6'],
    ['#imageSelect7', '#image-preview7'], ['#imageSelect8', '#image-preview8']];
    var myMap = new Map(idArray);
    myMap.forEach(function (imgDivId, selectBoxId) {
        $(selectBoxId).change(function () {
            var selectedImage = $(this).val();
            $(imgDivId).html('<p class="text-muted">Image Preview</p><img class="img-responsive" src="' + selectedImage + '" alt="image" />');
        });

    });
});


