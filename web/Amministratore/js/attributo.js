$(document).ready(function () {
    $("#conferma").hide();
});


function attivaConferma(){
    if ($("#num").val()>0)
    {
        $("#conferma").show();
    }else{
        $("#conferma").hide();
    }
}

c=0;
function conferma(){
    c++;
    if(c==1){
        $("#divNum").hide();
        n=$("#num").val();
          $.ajax({       
                       type: "GET",
                       url: "/a/caricaAttributi",
                       dataType: "json",
                       data: {n},
                       success : function(response) 
                         {
                          temp=$("#cont").html()+response;
                           $("#cont").html(temp);
                        }
                           });
                       
    }
    if(c>=2){
        nome=$("#nome").val();
        var valori = [];
        for(i=0;i<n;i++){
            temp="#val"+(i+1);
            valori[i]=$(temp).val();
        }
        $.ajax({       
                       type: "GET",
                       url: "/a/salvaAttributi",
                       dataType: "json",
                       data: {valori:valori, nome:nome},
                       success : function(response) 
                         {
                          $("#cont").html(response);
                           console.log(response);
                        }
                           });
    }
    
}

function elimina(idAttributo){
    numProd=$("#numSet").html();
    if(numProd>0){
        alert("L'attributo presenta "+numProd+" producibili associati. Non è possibile eliminarlo");
    } else{
        $.ajax({       
                       type: "GET",
                       url: "/a/eliminaAttributoJSON",
                       dataType: "json",
                       data: {idAttributo: idAttributo},
                       success : function(response) 
                         {
                           $("#content").html(response);
                        }
                           });
    }
}   
    function modifica(idAttributo,num){
        attributo= $("#attributo").val();
        var valori = [];
        for (i=0; i<=num; i++){
            valori[i]=$("#"+(i+1));
        }
        $.ajax({       
                       type: "GET",
                       url: "/a/Attributo/modificaJSON",
                       dataType: "json",
                       data: {idAttributo: idAttributo, attributo: attributo, valori: valori},
                       success : function(response) 
                         {
                           $("#content").html(response);
                        }
                           });
}
        
