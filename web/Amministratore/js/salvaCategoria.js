c=0;
var categoria= [];
function salva(){
    c++;
    if(c==1){
        categoria["nome"]=document.getElementById("nome").value;
        document.getElementById("nome").disabled=true;
        $("#divDescrizione").toggle();
    }
    if(c==2){
        categoria["descrizione"]=document.getElementById("descrizione").value;
        document.getElementById("descrizione").disabled=true;
        $("#divImmagine").toggle();
    }
    if(c==3){
        categoria["immagine"]=document.getElementById("immagine").value;
        document.getElementById("immagine").disabled=true;
        $("#divAlbero").toggle();
        $("#invia").toggle();
    }
    if(c==4){
        categoria["padre"]=$("#tree-container").jstree('get_selected')[0];
        console.log(categoria);
        
        $.ajax({       
                       type: "GET",
                       url: "/a/nuovaCategoriaJson",
                       dataType: "json",
                       data: {"nome":categoria["nome"], "descrizione":categoria["descrizione"],"immagine":categoria["immagine"],"padre":categoria["padre"]},
                       success : function(response) 
                         {
                           $("#content").html(response);
                        }
                           });
    }
};


