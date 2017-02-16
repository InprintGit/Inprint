c=0;
function attributo(idproducibile){
    c=c+1;
    temp="pval"+c;
    console.log(temp);
    pval = document.getElementById(temp).value;
    document.getElementById(temp).disabled = true;
    console.log(pval);
   
    $.ajax({
                       type: "POST",
                       url: "/articoloJson",
                       dataType: "json",
                       data: { idproducibile : idproducibile, pval: pval, precedente:c },
                       success : function(response) 
                         {
                            console.log(response[1]);
                            if(response[1]){
                                temp=$('#select').html() + response[0];
                                $('#select').html(temp);
                            }
                            else{
                                temp= $('#select').html() + response[0];
                                $('#select').html(temp);
                                $('#ok').toggle();
                           }
                        }
                           });
};