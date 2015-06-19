$(document).ready(

    popOverSettings

    );

function popOverSettings(){

    $('[data-toggle="popover"]').popover({
        trigger: "manual" ,
        html: true,
        animation:false,
        container: 'body',
        content: function() {
        return $(this).siblings('div').html();
    }
    })
.on("mouseenter", function () {
    var _this = this;
    $(this).popover("show");
    $(".popover").on("mouseleave", function () {
        $(_this).popover('hide');
    }); 
}).on("mouseleave", function () {
    var _this = this;
    setTimeout(function () {
        if (!$(".popover:hover").length) {
            $(_this).popover("hide");
        }
    }, 300);
});
}


function chooseFile(input) {
      $(input).click();
   }

function loadGallery(gallery){
    $('.gallery').load('/travelink/Ajax_Controller/' + gallery + '/5');

}

$( document ).ajaxComplete(function() {
      popOverSettings();

});