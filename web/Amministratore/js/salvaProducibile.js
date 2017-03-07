c=0;
var categoria= [];
function salva(){
    c++;
    if(c==1){
        categoria[0]=document.getElementById("nome").value;
        document.getElementById("nome").disabled=true;
        $("#divDescrizione").toggle();
    }
    if(c==2){
        categoria[1]=document.getElementById("descrizione").value;
        document.getElementById("descrizione").disabled=true;
        $("#divCompenso").toggle();
    }
    if(c==3){
        categoria[2]=document.getElementById("compenso").value;
        document.getElementById("compenso").disabled=true;
        $("#divImmagine").toggle();
    }
     if(c==4){
        categoria[3]=document.getElementById("immagine").value;
        document.getElementById("immagine").disabled=true;
        $("#divGruppo").toggle();
    }
    if(c==5){
        categoria[4]=document.getElementById("gruppo").value;
        document.getElementById("gruppo").disabled=true;
        $("#divAlbero").toggle();
        $("#invia").toggle();
    }
    if(c>=6){
        var jsonProducibile = JSON.stringify(categoria);
        var  jsonAlbero= JSON.stringify(categorieAlbero);
        console.log(categoria);
        console.log(jsonProducibile);
        $.ajax({
                 type: "POST",
                 url: "/a/nuovoProducibileJson",
                 dataType: "json",
                 data: { producibile :jsonProducibile, albero:jsonAlbero}, 
                 success: function(response){
                 $("#content").html(response);
              }
        });
    }
};

function elimina(idProducibile){
    articoli=$("#articolo").html();
    if(articoli>0){
        alert("Il producibile ha "+articoli+" articoli. non può essere cancellato");
    }else{
        $.ajax({
                 type: "POST",
                 url: "/a/eliminaProducibileJson",
                 dataType: "json",
                 data: { idProducibile: idProducibile}, 
                 success: function(response){
                 $("#content").html(response);
              }
        });
    }
    
}
var producibile= [];
function modifica(idproducibile){
        producibile[0]=document.getElementById("nome").value;
        producibile[1]=document.getElementById("descrizione").value;
        producibile[2]=document.getElementById("compenso").value;
        producibile[3]=document.getElementById("immagine").value;
        $.ajax({
                 type: "POST",
                 url: "/a/Producibile/salvaModificaJson",
                 dataType: "json",
                 data: { producibile : producibile, idProduciile: idProducibile
                 }, 
                 success: function(response){
                 $("#content").html(response);
              }
        });
    };

