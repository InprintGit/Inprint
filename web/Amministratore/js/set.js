function elimina(idSet,num){

    if(num>0){
        alert("Il set attributi presenta "+num+" producibili associati non è possibile eliminarlo");
    } else{
         $.ajax({       
                       type: "GET",
                       url: "/a/eliminaSetJSON",
                       dataType: "json",
                       data: {idSet: idSet},
                       success : function(response) 
                         {
                           $("#content").html(response);
                        }
                           });
     }
}

   function modifica(idGruppo){
        nome= $("#nome").val();
        $.ajax({       
                       type: "GET",
                       url: "/a/Set/modificaJSON",
                       dataType: "json",
                       data: {idGruppo: idGruppo, nome: nome},
                       success : function(response) 
                         {
                           $("#content").html(response);
                        }
                           });
}