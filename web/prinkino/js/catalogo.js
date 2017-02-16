
function SottoCategorie(idCategoria){
    console.log(idCategoria);
    $.ajax({
                       type: "POST",
                       url: "/categoriaJson",
                       dataType: "json",
                       data: {idCategoria : idCategoria},
                       success : function(response) 
                         {
                        
                               temp= response;
                               $('#selezione').html(temp);
                         }
                           });
                       
                       
    $.ajax({
                        type: "POST",
                        url: "/categoriaNomeJson",
                        dataType: "json",
                        data: {idCategoria : idCategoria},
                        success : function(response) 
                          {
                                temp=$('#precedente').html()+"<h4>"+ response +"</h4>";
                                $('#precedente').html(temp);
                          }
                            });

    $.ajax({
                       type: "POST",
                       url: "/ProdotticategoriaNomeJson",
                       dataType: "json",
                       data: {idCategoria : idCategoria},
                       success : function(response) 
                         {
                        
                               temp= response;
                               $('#producibili').html(temp);
                         }
                           });
                            
};

