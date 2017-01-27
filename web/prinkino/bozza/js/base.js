

function dettagli(riga, tabella) {
	$(document).ready(function(){
		var div= "#dettagli"+tabella+riga;
		var immagine="img.freccia"+"#img"+tabella+riga;
		if($(immagine).attr("src")=="../src/down.png")
			{$(immagine).attr("src","../src/up.png");}
			else{$(immagine).attr("src","../src/down.png");}
		$(div).toggle('slow');
		
	});
};

