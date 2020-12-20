
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
                for (let i = 0; i < response.key.length; i++) {
                    console.log(response.key[i].tentag)
                    
                }
                //   alert(response.key.tentag);
                //   console.log(response.key);
                //   var tagList = JSON.parse(response.key);
                //   console.log(tagList);
              }
          });
        }    
    });
