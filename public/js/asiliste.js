$(document).ready(function () {


//--------------------------------------------------
var asi;
 $('.duzenle').click(function(){
   $('#divarka').fadeIn(200).show();
   $('#div2').fadeIn(1000).show();
       asi=$(this).attr('name');
      $.ajax({

        type:'post',
        url:'asigetir.php',
        data:{id:asi},
        success:function (result) {
          var deger=$.parseJSON(result);
        $('#asi_adi').val(deger.adi);
        $('#asi_turu').text(deger.turu);
          $('#image').val(deger.resim);

        }
      });
  });

  //--------------------------------------------------

  $('#btn-diger').click(function () {
    $('#yeniEkle').toggle(500);
  });
  $('#kapat').click(function () {
    $('#div2').hide(200);
    $('#divarka').hide(500);});

    $('#divarka').click(function () {
      $('#div2').hide(200);
      $('#divarka').hide(500);

  });
  $('#vazgec').click(function () {
    $('#div2').hide(200);
    $('#divarka').hide(500);

});

//--------------------------------------------------

$('#btn-guncelle').click(function () {
    var asi_adi=$('#asi_adi').val();
      var asi_turu=$('#asi_turu_select').val();
      var resim=$('#image').val();
    $.ajax({

        type:'post',
        url:'asi_update.php',
        data:{id:asi,asi_adi:asi_adi,asi_tur:asi_turu,asi_resim:resim},
        success:function (result) {
            alert(result);
            $('#div2').hide(200);
            $('#divarka').hide(500);
            location.reload();

        }
      });

});

//--------------------------------------------------
$('.sil').click(function() {


 asi=$(this).attr('name');

  $.ajax({

      type:'post',
      url:'asi_delete.php',
      data:{id:asi},
      success:function (result) {
          alert(result);
          $('#div2').hide(200);
          $('#divarka').hide(500);
          location.reload();

      }
    });
});

  //--------------------------------------------------
});
