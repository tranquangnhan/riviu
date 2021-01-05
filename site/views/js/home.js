window.onload = function() {
    $('.owl-carousel').owlCarousel({
        margin: 15,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
    if (document.getElementById("defaultOpen")) {
        document.getElementById("defaultOpen").click();
    }


}

function closest(e, t) {
    return !e ? false : e === t ? true : closest(e.parentNode, t);
}

container = document.getElementById("popup");
open = document.getElementById("open");

open.addEventListener("click", function(e) {
    container.style.display = "block";
    open.disabled = true;
    e.stopPropagation();
});

document.body.addEventListener("click", function(e) {
    if (!closest(e.target, container)) {
        container.style.display = "none";
        open.disabled = false;
    }
});


function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it

// $('#tag').blur(function (e) { 
//     e.preventDefault();
//     $('#box-suggest').hide();
// });

// $('#tag').focus(function (e) { 
//     e.preventDefault();
//     $('#box-suggest').show();
// });

$('.item').click(function() {

});
listidtag = '';

function addTag(i) {
    nameTag = $('#' + i).text();
    idTag = i;
    $('#box-suggest').hide();
    $('#boxinpt-tag').append('<span class="Tagselected">#' + nameTag + '</span>');
    $('#tag').val('');
    if (listidtag == "")
        listidtag += i;
    else
        listidtag += "," + i;

    $('#idTag').val(listidtag);

}

function chonquan(i) {
    $('#idquan').val(i);
    nameQuan = $('#q' + i).text();
    $('#tenquan').val(nameQuan);
    $('.boxqc').remove();
}


$(document).ready(function() {
    $("#changInfo").validate({
        rules: {
            hoten: {
                required: true,
                maxlength: 30
            },
            username: {
                required: true,
            },
            // pass: {
            //     required: true,
            //     minlength: 8
            // },
            // repass: {
            //     required: true,
            //     equalTo: "#pass"
            // }

        },
        messages: {
            hoten: {
                required: "<span class='badge badge-danger'>Bạn chưa nhập họ tên</span>",
                maxlength: "<span class='badge badge-danger'>Tên quá dài</span>"
            },
            username: {
                required: "<span class='badge badge-danger'>Bạn chưa điền tên đăng nhập</span>",
            },
            // pass: {
            //     required: "<span class='badge badge-danger'>Bạn chưa nhập mật khẩu</span>",
            //     minlength: "<span class='badge badge-danger'>Mật khẩu có ít nhất 8 kí tự</span>"
            // },
            // repass: {
            //     required: "<span class='badge badge-danger'>Bạn chưa nhập lại mật khẩu</span>",
            //     equalTo: "<span class='badge badge-danger'>Mật khẩu không khớp</span>"
            // }
            // ten: {
            // 	required: "Bạn chưa nhập tên",
            // },
        },

    });
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.l-bt-fixed-to-top').fadeIn();
        } else {
            $('.l-bt-fixed-to-top').fadeOut();
        }
    });
    $('#bt-to-top').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 500)
        return false;
    });
});