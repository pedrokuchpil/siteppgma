﻿<script type="text/javascript">
	var cont = 0;
	function resizeText(multiplier) {
	if (cont >= 4){
		if (multiplier==1){
			return;
		}
	}
	else if (cont <= -2){
		if (multiplier==-1){
			return;
		}
	}
	var elementos = document.getElementsByClassName("conteudo");
	for (var i = 0; i < elementos.length; i++){			
		var elemento = elementos[i];
    		var currentSize = elemento.style.fontSize || 1;
	   		elemento.style.fontSize = ( parseFloat(currentSize) + (multiplier * 0.2)) + "em";
	}
	cont+=multiplier;
}</script>

<a href="javascript:void(0);" onclick="resizeText(1)" id="plustext">Aumentar texto</a>
| 
<a href="javascript:void(0);" onclick="resizeText(-1)" id="minustext">Diminuir texto</a>
