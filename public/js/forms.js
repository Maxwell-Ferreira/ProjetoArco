$(document).ready(function() {

    $("#formOrcamento").submit(function(){
        $.ajax({
            type: "POST",
			url: "/api/orcamento",
			dataType: "json",
            data:  $(this).serialize(),

            beforeSend: function(){
                $(".loading").html("carregando...");
            },

			success: function(dataResponse){
                if(dataResponse['status'] == 0){
                    Swal.fire(
                        'Ops!',
                        dataResponse['msg'],
                        'error'
                      )
                      $(".loading").html("");
                }else{
                    Swal.fire(
                        'Pronto!',
                        'O seu pedido foi enviado!',
                        'success'
                      );
                      $(".loading").html("");
                      window.location.href = "/orcamento";
                }
			}
        })

        return false;
    });

    $("#formContato").submit(function(){
        $.ajax({
            type: "POST",
			url: "/api/contato",
			dataType: "json",
            data:  $(this).serialize(),

            beforeSend: function(){
                $(".loading").html("carregando...");
            },

			success: function(dataResponse){
                if(dataResponse['status'] == 0){
                    Swal.fire(
                        'Ops!',
                        dataResponse['msg'],
                        'error'
                      );
                      $(".loading").html("");
                }else{
                    Swal.fire(
                        'Pronto!',
                        'Sua mensagem foi enviada!',
                        'success'
                      )
                      window.location.href = "/contato";
                }
			}
        })
        return false;
    });
});