
    $('#tag').keyup(function (e) { 
          key = $('#tag').val();
          var formData = new FormData();
          formData.append('action','search');
          formData.append('key',key);
          if(key!="") {
          $.ajax({
              type: "post",
              url: "site/controllers/ajax/searchTag.php",
              dataType: "JSON",
              cache: false,
              contentType: false,
              processData: false,
              data: formData,
              success: function (response) {
                $('#box-suggest li').remove();
                for (let i = 0; i < response.key.length; i++) {                   
                    $('#box-suggest').show();
                    $('#box-suggest').append("<li onclick='addTag("+response.key[i].id+")' id='"+ response.key[i].id +"'>"+response.key[i].tentag+"</li>");
                }
                //   alert(response.key.tentag);
                //   console.log(response.key);
                //   var tagList = JSON.parse(response.key);
                //   console.log(tagList);
              }
          });
        }    
    });


    function like(idbv) {
      alert("index.php?act=like&idbv="+idbv);
      $.ajax({
          type: "GET",
          url: "index.php?act=like&idbv="+idbv,
          success: function (data) {
              alert(data);
          }
      });
  }
