window.onload = function() {
    $('.owl-carousel').owlCarousel({
        loop: true,
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
    $('#boxinpt-tag').append('<span class="Tagselected">' + nameTag + '</span>');
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