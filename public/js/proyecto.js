document.querySelector('.agregarE').addEventListener('click', agregarE);
document.querySelector('.eliminarE').addEventListener('click', eliminarE);
let contenedorE = document.querySelector('.contentEntregables');
let numeroE = 1;
function agregarE() {
  numeroE++;
  var child = document.createElement('DIV');
  child.classList.add('divisorSecundario', `e${numeroE}`);
  child.innerHTML = `<div class="inputs">
                            <input type="text" name="nomEntregable${numeroE}" placeholder="Nombre">
                            <input type="number" name="costoEntregable${numeroE}" placeholder="Costo">
                        </div>
                        <textarea name="descEntregable${numeroE}" cols="30" rows="10"
                                placeholder="Descripcion del entregable"></textarea>`;
  contenedorE.appendChild(child);
}

function eliminarE() {
  if (numeroE > 1) {
    let child = document.querySelector(`.e${numeroE}`);
    contenedorE.removeChild(child);
    numeroE--;
  } else {
    alert('Debe tener al menos un entregable')
  }

}



var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function () {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}