//Gestione Ricerca FullText Pagina Prinkino:Clienti!

$(document).ready(function(){
           
          		
            $('#cerca').keyup(function(event){
                    
                          if($(this).val().length>=0)
                                    Ricerca($(this).val());
                    

            });

            function Ricerca(text){ 
                    console.log(text);
                    

                    $.ajax({
                       type: "GET",
                       url: "/prova",
                       dataType: "json",
                       data: {searchText : text},
                       success : function(response) 
                         {
                            
                               $('#boxTable').html(response);
                         }
                           });
                       };
            

    });
