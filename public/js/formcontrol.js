

$(document).ready(function () {

    $('#hayForm').hide();
    $('#onay').hide();
    $('#btn-ekle').click(function(){

        var mustc= $("#mustc").val().trim();
        var musAdi=$("#musAdi").val().trim();
        var musSoyadi=$("#musSoyad").val().trim();
        var musTel= $("#musTel").val().trim();
        var musAdres=$("#musAdres").val().trim();
        // var mustc= $("#mustc").val().trim().value();

        if(musAdi==""){
            $("#musAdi").css("border","solid 1px red");

        }
        if(mustc==""){
            $("#mustc").css("border","solid 1px red");

        }
        if(musSoyadi==""){
            $("#musSoyad").css("border","solid 1px red");

        }
        if(musTel==""){
            $("#musTel").css("border","solid 1px red");

        }
        if(musAdres==""){
            $("#musAdres").css("border","solid 1px red");

        }
        //-------------------------------------------------------
        if(musAdi!=""){
            $("#musAdi").css("border","solid 1px #ddd");

        }
        if(mustc!=""){
            $("#mustc").css("border","solid 1px #ddd");

        }
        if(musSoyadi!=""){
            $("#musSoyad").css("border","solid 1px #ddd");

        }
        if(musTel!=""){
            $("#musTel").css("border","solid 1px #ddd");

        }
        if(musAdres!=""){
            $("#musAdres").css("border","solid 1px #ddd");

        }
        //--------------------------------------------------------------------
        if(musAdi!=""&&mustc!=""&&musSoyadi!=""&&musTel!=""&&musAdres!=""){

            $.ajax({
                type:"POST",
                url:"Pdo.php",
                data:{post_mustc:mustc,post_musAdi:musAdi,post_musSoyadi:musSoyadi,post_musTel:musTel,post_musAdres:musAdres},
                success:function (sonuc) {
                    if(sonuc=="Basarili"){
                       $("#onay").html("<div style='background: #00a65a;color: #fff;padding: 10px 20px ;'>İşleminiz Başarıyla Tamamlandı..!</div>").slideDown(400);
                        ;
                        $("#hayForm").slideUp().show(500);
                    }
                    else{
                        $("#onay").html("<div style='background: #801419;color: #fff;padding: 10px 20px ;'>İşleminiz Tamamlanamadi...!</div>");
                        ;
                    }
                }
            });


        }


    });

});
