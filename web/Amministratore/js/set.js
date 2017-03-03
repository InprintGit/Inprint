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