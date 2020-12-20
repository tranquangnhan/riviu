
$('#tenquan').keyup(function (e) {
  quan = $('#tenquan').val();

  $.ajax({
    type: 'GET', //Sử dụng kiểu gửi dữ liệu 
    url: 'index.php?act=searchQuan&name=' + quan, //gửi dữ liệu sang trang data.php
    // data : quan, //dữ liệu sẽ được gửi
    success: function (data)  // Hàm thực thi khi nhận dữ liệu được từ server
    {
      if (quan != "") {
        $('.boxqc').remove();
        if (data == 'false') {
          alert('Không có người dùng');
        } else {
          //  $('#content').html(data);
          data = JSON.parse(data);
          for (let i = 0; i < data.quanarr.length; i++) {
            element = '<div class="boxqc"><div class="boxqc-left">' +
              '<img src="site/views/images/icon_place.png">' +
              '</div><div class="boxqc-right" id="q'+data.quanarr[i].id+'" onclick="chonquan('+data.quanarr[i].id+')">' + data.quanarr[i].tenquan + '</div></div>'
            $('#formqc').append(element);
          }
        }
      }
    }
  });
  return false;
});

