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


// $(document).ready(function() {
//     if (window.File && window.FileList && window.FileReader) {
//         var filesInput = document.getElementById("inputhinh");
//         filesInput.addEventListener("change", function(event) {
//             var files = event.target.files;
//             var output = document.getElementById("output");
//             for (var i = 0; i < files.length; i++) {
//                 var file = files[i];
//                 if (!file.type.match('image'))
//                     continue;
//                 var picReader = new FileReader();
//                 picReader.addEventListener("load", function(event) {
//                     var picFile = event.target;
//                     var div = document.createElement("div");
//                     div.innerHTML = "<img class='thumbnail' src='" + picFile.result + "'" +
//                         "title='" + picFile.name + "'/>";
//                     output.insertBefore(div, null);
//                 });
//                 picReader.readAsDataURL(file);
//             }

//         });
//     }

// });
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