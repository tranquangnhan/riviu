$('#tag').keyup(function(e) {
    key = $('#tag').val();
    var formData = new FormData();
    formData.append('action', 'search');
    formData.append('key', key);
    if (key != "") {
        $.ajax({
            type: "post",
            url: "site/controllers/ajax/searchTag.php",
            dataType: "JSON",
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: function(response) {
                if (response.key == '') {

                    $('#box-suggest').show();
                    $('#box-suggest').html("<li id='newtag' >" + key + "<span class='spanclick'>Click để thêm tags</span> </li>");

                    $('#newtag').click(function() {
                        var formData = new FormData();
                        formData.append('action', 'addtag');
                        formData.append('tag', key);
                        Swal.fire({
                            title: 'Bạn có chắc thêm tag mới?',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#f60',
                            cancelButtonColor: '#ccc',
                            confirmButtonText: 'Thêm',
                            cancelButtonText: 'Huỷ'
                        }).then(async(result) => {
                            if (result.isConfirmed) {
                                await $.ajax({
                                    type: "post",
                                    url: "site/controllers/ajax/searchTag.php",
                                    dataType: "JSON",
                                    cache: false,
                                    contentType: false,
                                    processData: false,
                                    data: formData,
                                    success: function(response) {
                                        $('#box-suggest li').remove();
                                        element = '<span class="Tagselected">#' + response.tag.tentag + '</span>';
                                        $('#boxinpt-tag').append(element);
                                        listidtag = $('#idTag').val();
                                        if (listidtag == "")
                                            listidtag += response.tag.id;
                                        else
                                            listidtag += "," + response.tag.id;
                                        $('#idTag').val(listidtag);
                                        // console.log(response.tag);
                                        for (let i = 0; i < response.tag.length; i++) {
                                            $('#box-suggest').show();
                                            $('#box-suggest').append("<li onclick='addTag(" + response.tag[i].id + ")' id='" + response.tag[i].id + "'>" + response.tag[i].tentag + "</li>");
                                        }
                                    }
                                });
                            }
                        })
                    })
                } else {
                    $('#box-suggest li').remove();
                    for (let i = 0; i < response.key.length; i++) {
                        $('#box-suggest').show();
                        $('#box-suggest').append("<li onclick='addTag(" + response.key[i].id + ")' id='" + response.key[i].id + "'>" + response.key[i].tentag + "</li>");
                    }
                }

            }
        });
    }
});