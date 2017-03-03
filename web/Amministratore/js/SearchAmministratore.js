$(document).ready(function(){
           
        $('#cercaArticolo').keyup(function(event){
            if($(this).val().length>=0)
                Ricerca($(this).val(),"articolo");
            });
            
        $('#cercaAttributi').keyup(function(event){
            if($(this).val().length>=0)
                Ricerca($(this).val(),"attributo");
            });
            
        $('#cercaCategorie').keyup(function(event){
            if($(this).val().length>=0)
                Ricerca($(this).val(),"categoria");
            });
            
        $('#cercaProducibili').keyup(function(event){
        if($(this).val().length>=0)
            Ricerca($(this).val(),"producibile");
        });
            
            
        $('#cercaGruppo').keyup(function(event){
            if($(this).val().length>=0)
                Ricerca($(this).val(),"setAttributi");
            });
            function Ricerca(text,tab){ 
                    console.log(text);
                    

                    $.ajax({
                       type: "GET",
                       url: "/"+tab+"/SearchJSON",
                       dataType: "json",
                       data: {searchText : text},
                       success : function(response) 
                         {
                            $('#boxTable').html(response);
                         }
                           });
                       };
            

    });