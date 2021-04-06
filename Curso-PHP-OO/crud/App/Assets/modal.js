// Funções responsáveis pela apresentação do modal de exclusão.
function mostrar(id){
	document.getElementById("modal").classList.add("is-active");
	document.getElementById("id").value = id;
}

document.getElementById("btn-cancelar").addEventListener("click", function(){
	document.getElementById("modal").classList.remove("is-active");
});



