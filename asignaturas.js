var mensaje = document.getElementById("mensaje");
var contenido1 = document.getElementById("contenido-integral");
var contenido2 = document.getElementById("contenido-diferencial");
var contenido3 = document.getElementById("contenido-trigo");
var contenido4 = document.getElementById("contenido-analitica");
function mostrar(n) {
	switch (n) {
		case 1:
			contenido2.style.display = "none";
			contenido3.style.display = "none";
			contenido4.style.display = "none";
			mensaje.style.display = "none";
			contenido1.style.display = "block";
		break;
		case 2:
			contenido1.style.display = "none";
			contenido3.style.display = "none";
			contenido4.style.display = "none";
			mensaje.style.display = "block";
			mensaje.innerHTML = "";
			mensaje.innerHTML = "Lo sentimos, aún no contamos con contenido para la asignatura de 'Calculo Diferencial' ):";
		break;
		case 3:
			contenido1.style.display = "none";
			contenido2.style.display = "none";
			contenido4.style.display = "none";
			mensaje.style.display = "block";
			mensaje.innerHTML = "";
			mensaje.innerHTML = "Lo sentimos, aún no contamos con contenido para la asignatura de 'Trigonometria' ):";
		break;
		case 4:
			contenido2.style.display = "none";
			contenido3.style.display = "none";
			contenido1.style.display = "none";
			mensaje.style.display = "block";
			mensaje.innerHTML = "";
			mensaje.innerHTML = "Lo sentimos, aún no contamos con contenido para la asignatura de 'Geometria Analitica' ):";
		break;
			
		default: 
			mensaje.innerHTML = "";
			mensaje.innerHTML = "Presiona un botón para visualizar la información :)";
		break;
	}
}
	