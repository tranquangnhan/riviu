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

    // validate new blog

    $("#formnewblog").validate({
        rules: {
            tieude: {
                required: true,
            }
        },
        messages: {
            tieude: {
                required: "<script>fireErr('Vui lòng nhập tiêu đề')</script>",
            }
        }
    });


});