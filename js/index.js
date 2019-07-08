$(".servicename ").hover(function(){
    $(this).addClass(' animate rubberBand')
})

$(document).ready(function(){
    $(".burger").click(function(){
        $('.sidebar').show();
        $('.overlay').show();
    })

    $(".overlay").click(function(){
        $('.sidebar').hide();
        $('.overlay').hide();
    })
});