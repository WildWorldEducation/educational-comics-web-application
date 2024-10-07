



// checking answers in "My Family" section

$("#submit1").click(function (e) {
    if ($("#question").val() == 1) {
        $('#result').text("correct").addClass('bg-success').removeClass('bg-danger');
    }
    else {
        $('#result').text("incorrect").addClass('bg-danger').removeClass('bg-success');
    }
});

$("#submit2").click(function (e) {
    if ($("#question").val() == 3) {
        $('#result').text("correct").addClass('bg-success').removeClass('bg-danger');
    }
    else {
        $('#result').text("incorrect").addClass('bg-danger').removeClass('bg-success');
    }
});

$("#submit3").click(function (e) {
    if ($("#question").val() == 4) {
        $('#result').text("correct").addClass('bg-success').removeClass('bg-danger');
    }
    else {
        $('#result').text("incorrect").addClass('bg-danger').removeClass('bg-success');
    }
});

$("#submit4").click(function (e) {
    if ($("#question").val() == 3) {
        $('#result').text("correct").addClass('bg-success').removeClass('bg-danger');
    }
    else {
        $('#result').text("incorrect").addClass('bg-danger').removeClass('bg-success');
    }
});

$("#submit5").click(function (e) {
    if ($("#question").val() == 1) {
        $('#result').text("correct").addClass('bg-success').removeClass('bg-danger');
    }
    else {
        $('#result').text("incorrect").addClass('bg-danger').removeClass('bg-success');
    }
});



// text transition on website page


$('#website-intro-line1').animate({'opacity': 0}, 3000, function () {
    $(this).text('学英语');
}).animate({'opacity': 1}, 3000);



$('#website-intro-line2').animate({'opacity': 0}, 3000, function () {
    $(this).text('与漫画');
}).animate({'opacity': 1}, 3000);



