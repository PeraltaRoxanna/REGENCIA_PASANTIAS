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
/* const enviar = document.querySelector(".enviar"); */

dev.addEventListener("click", () => {
  fo.action = "devolver.php";
});
ret.addEventListener("click", () => {
  fo.action = "sacar.php";
});
mod.addEventListener("click", () => {
  fo.action = "mover.php";
});
/* enviar.addEventListener("click",()=>{
  fo.submit();
}); */