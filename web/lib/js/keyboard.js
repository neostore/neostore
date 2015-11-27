// JavaScript Document
function keyboard(){
		// tecla enter
		$(document).keypress(function(e){
				console.log(e.which || e.keyCode);
				if(e.wich == 13 || e.keyCode == 13){
					alert('A tecla ENTER foi pressionada');
				}
				else if(e.wich == 37 || e.keyCode == 37){
					alert('A tecla Seta Esquerda foi pressionada');
				}
				else if(e.wich == 39 || e.keyCode == 39){
					alert('A tecla Seta Direita foi pressionada');
				}
				else if(e.wich == 27 || e.keyCode == 27){
					alert('A tecla Esc  foi pressionada');
				}
			  });

	
}