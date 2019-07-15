function toggleContactInfoDiv (){
console.log("submit");
var name_regex = new RegExp("^[a-zA-Z ]+$");
var pattern = new RegExp(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
var pattern2 = new RegExp("^[a-zA-Z ]+$");
var name = $("#name").val();
var email = $("#email").val();
var message = $("#message").val();

if (name.length == 0) {
        $('#head').text("* All fields are mandatory *"); // This Segment Displays The Validation Rule For All Fields
        $("#name").focus();
        return false;
    }
    // Validating Name Field.
    else if (!name.match(name_regex)) {
        $('#head').text("* For your name please use alphabets only *"); // This Segment Displays The Validation Rule For Name
        $("#name").focus();
        return false;
    } else {
        $('#head').text("");  
}

if (email.length == 0) {
        $('#head2').text("* All fields are mandatory *"); // This Segment Displays The Validation Rule For All Fields
        $("#email").focus();
        return false;
    }
    // Validating Name Field.
    else if (!email.match(pattern)) {
        $('#head2').text("* email format is not correct *"); // This Segment Displays The Validation Rule For Name
        $("#email").focus();
        return false;
    } else {
        $('#head2').text(""); 
}

if (message.length == 0) {
        $('#head3').text("* All fields are mandatory *"); // This Segment Displays The Validation Rule For All Fields
        $("#email").focus();
        return false;
    }
    // Validating Name Field.
    else if (!message.match(pattern2) || message.length == 0) {
        $('#head3').text("* email format is not correct *"); // This Segment Displays The Validation Rule For Name
        $("#email").focus();
        return false;
    } else {
        $('#head3').text("");  
}
console.log("submitting form");
    $( "form" ).submit();
    $('.overlay').show();
    $('.popup').show();

}

$(".servicename ").hover(function(){
    $(this).addClass(' animate rubberBand')
})

$(".exitpopup").click(function(){
    $('.overlay').hide();
    $('.popup').hide();
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