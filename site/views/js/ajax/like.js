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
async function like(idbv) {
    let formData = new FormData();
    formData.append('action', 'checkIsLogin');
    await $.ajax({
        type: "POST",
        url: "site/controllers/ajax/like.php",
        dataType: 'JSON',
        cache: false,
        contentType: false,
        processData: false,
        data: formData,
        success: async function(response) {
            if (response.StatusCode == 0) {
                window.location.href = "index.php?act=login";
            } else {
                let formData = new FormData();
                formData.append('action', 'likeAndUnlike');
                formData.append('idbv', idbv);
                await $.ajax({
                    type: "POST",
                    url: "site/controllers/ajax/like.php",
                    dataType: 'JSON',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,
                    success: function(response) {
                        refreshLike(idbv);
                        if (response.Data == 0) {
                            $("#btn_like_" + idbv).attr("src", "./site/views/images/btnlike.png");

                        } else {
                            $("#btn_like_" + idbv).attr("src", "./site/views/images/heart_fill.png");
                        }
                        refreshLike(idbv);
                    }
                });
            }
        }
    });
}


function refreshLike(idbv) {
    $.ajax({
        type: "GET",
        url: "index.php?act=countLike&idbv=" + idbv,
        success: function(response) {
            $('#soLike_' + idbv).html(response);
        }
    });
};