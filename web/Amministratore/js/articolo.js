
$(document).ready(function () {
    $("#conferma").hide();
});


function caricaSpecifiche(){
    idProducibile=$("#producibile").val();
    if(idProducibile==0){
        $("#divSpecifiche").html("");
    }else{
         $.ajax({       
                       type: "GET",
                       url: "/a/specifiche",
                       dataType: "json",
                       data: {idProducibile:idProducibile},
                       success : function(response) 
                         {
                          $("#divSpecifiche").html(response);
                          $("#conferma").show();
                        }
            });
    }
}

function salva(){
    c=1;
    var articolo = new Array();
    articolo[0]=$("#nome").val();
    articolo[1]=$("#prezzo").val();
    articolo[2]=$("#producibile").val();
    while($("#valAttributo"+c).val()){
        articolo[2+c]=$("#valAttributo"+c).val();
        c++;
    }
    jsonArticolo= JSON.stringify(articolo);
     $.ajax({
                 type: "POST",
                 url: "/a/salvaArticoloJson",
                 dataType: "json",
                 data: { articolo :jsonArticolo}, 
                 success: function(response){
                 $("#ContentNuovo").html(response);
              }
    });
}

function elimina(idArticolo){
    num=$("#inCorso").html();
    if(num>0){
        alert("L'articolo presenta "+num+" ordini in corso non è possibile eliminarlo");
    } else{
         $.ajax({       
                       type: "GET",
                       url: "/a/articoloEliminaJSON",
                       dataType: "json",
                       data: {idArticolo:idArticolo},
                       success : function(response) 
                         {
                           $("#content").html(response);
                        }
                           });
        }
    
        
}

function modifica(idArticolo){
    c=1;
    var articolo = new Array();
    articolo[0]=$("#nome").val();
    articolo[1]=$("#prezzo").val();
    
     $.ajax({
                 type: "POST",
                 url: "/a/Articolo/salvaModificaJson",
                 dataType: "json",
                 data: { articolo : articolo, idArticolo: idArticolo}, 
                 success: function(response){
                 $("#ContentNuovo").html(response);
              }
    });
}