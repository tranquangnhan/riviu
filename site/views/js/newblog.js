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


// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    // preview images when uploaded
$(document).ready(function() {


    jQuery(function($) {
        $("#clear").click(function(event) {
            event.preventDefault();
            $("#inputhinh").replaceWith('<input type="file" class="imagefet" name="img[]" id="inputhinh" accept="image/png, image/jpg, image/jpeg" multiple="multiple" style="display: none">');
            $("div.output-fet").replaceWith('<div class="output-fet"><output id="list"></output></div>');
            $(".boxshowimg").addClass("hidden");
        });
    })

    jQuery(function($) {

        var count = 0;

        function handleFileSelect(evt) {
            var $fileUpload = $(".imagefet");
            count = count + parseInt($fileUpload.get(0).files.length);

            var files = evt.target.files;
            for (var i = 0, f; f = files[i]; i++) {
                if (!f.type.match('image.*')) {
                    continue;
                }
                var reader = new FileReader();

                reader.onload = (function(theFile) {
                    return function(e) {
                        var span = document.createElement('span');
                        span.innerHTML = ['<img class="thumb" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
                        document.getElementById('list').insertBefore(span, null);
                    };
                })(f);

                reader.readAsDataURL(f);
            }
        }

        $('.imagefet').change(function(evt) {
            handleFileSelect(evt);
            $(".boxshowimg").removeClass("hidden");
        });

    })





});

// validate new blog
function validateNewBlog() {
    var tieude = document.getElementById('tieude').value;
    var noidung = document.getElementById('noidung').value;
    var tag = document.querySelectorAll('.Tagselected');
    var img = document.getElementById('control').value;
    var tenquan = document.getElementById('tenquan').value;
    var loaimon = document.getElementById('loaimon').value;
    var star = document.getElementById('counter').value;
    if (tieude.length <= 5) {
        fireErr('Tiêu đề quá ngắn.')
        return false;
    } else if (noidung.length <= 20) {
        fireErr('Nội dung quá ngắn.')
        return false;
    } else if (tag.length <= 0) {
        fireErr('Phải thêm tag.')
        return false;
    } else if (img.length <= 0) {
        fireErr('Phải thêm ảnh.')
        return false;
    } else if (tenquan.length <= 0) {
        fireErr('Tên quán không được bỏ trống.')
        return false;
    } else if (loaimon.length <= 0) {
        fireErr('Phải chọn loại món.')
        return false;
    } else if (star.length <= 0 || star.length >= 6) {
        fireErr('Đánh giá sai.')
        return false;
    }
    return true;
}