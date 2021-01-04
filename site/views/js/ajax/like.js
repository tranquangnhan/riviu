// function like(idbv) {
//     $.ajax({
//         type: "GET",
//         url: "index.php?act=like&idbv=" + idbv,
//         dataType: 'JSON',
//         cache: false,
//         contentType: false,
//         processData: false,
//         success: function(data) {
//             if (data.StatusCode == 0) {
//                 window.location.href = "index.php?act=login";
//             } else {
//                 if (data.Data == 0) {
//                     $("#btn_like_" + idbv).attr("src", "./site/views/images/btnlike.png");

//                 } else {
//                     $("#btn_like_" + idbv).attr("src", "./site/views/images/heart_fill.png");
//                 }
//                 refreshLike(idbv);
//             }
//         }
//     });
// }



function refreshLike(idbv) {
    $.ajax({
        type: "GET",
        url: "index.php?act=countLike&idbv=" + idbv,
        success: function(response) {
            $('#soLike_' + idbv).html(response);
        }
    });
};