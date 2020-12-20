$(function() {

    $("#rateYo").rateYo({
        rating: 5,
        fullStar: true,
        starWidth: "25px",
        startImg: "../images/star_fill (1).png", //RED
        onChange: function(rating, rateYoInstance) {

            $("#counter").val(rating);
        }
    });
});
// $(function() {

//     $("#rateYo").rateYo({

//         onChange: function(rating, rateYoInstance) {

//             $(this).next().text(rating);
//         }
//     });
// });