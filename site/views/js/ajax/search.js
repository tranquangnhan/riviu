$('#search').keyup(function (e) { 
    key = $('#search').val();
    var formData = new FormData();
    formData.append('key', key);
    if(key!="") {
        $.ajax({
            type: "POST",
            url: "?act=search",
            dataType: "JSON",
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: function (response) {
                $('#listSearch a').remove();
                // console.log(response);
                for (let i = 0; i < response.length; i++) {
                    element = '<a href="?act=monan&idmon='+response[i]['id']+'">'+response[i]['name']+'</a>';     
                $('#listSearch').append(element);
                }
            }
        });
    }else
    $('#listSearch a').remove();
});