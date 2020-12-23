function like(idbv, iduser) {
    $.ajax({
        type: "get",
        url: "?act=like&idbv="+idbv+"&iduser="+iduser,
        data: "data",
        dataType: "dataType",
        success: function (response) {
            alert("đã like");
        }
    });
}