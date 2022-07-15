/* obtener el nombre de los registros y ponerlo en el buscador */
const searcher = document.querySelector("#rta");

function setSearch(txt_php) {
	searcher.value = txt_php;
}

/* Selecionar las opciones de acción y agregar al form el action correspondiente */
const dev = document.querySelector(".dev");
const ret = document.querySelector(".ret");
const mod = document.querySelector(".mod");
const fo = document.querySelector(".main");
const enviar = document.querySelector(".send");

/* cambiar pro el cheked del input */
dev.addEventListener("click", () => {
	fo.action = "devolver.php";
	enviar.removeAttribute("disabled");
});
ret.addEventListener("click", () => {
	fo.action = "sacar.php";
	enviar.removeAttribute("disabled");
});
mod.addEventListener("click", () => {
	fo.action = "mover.php";
	enviar.removeAttribute("disabled");
});
