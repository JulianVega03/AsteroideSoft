document.querySelector('.agregarE').addEventListener('click', agregarE);
document.querySelector('.eliminarE').addEventListener('click', eliminarE);
let contenedorE = document.querySelector('.contentEntregables');
let numeroE = 1;
function agregarE() {
    numeroE++;
    contenedorE.innerHTML += `<div class="entregable e${numeroE}">
                                <div class="inputs">
                                    <input type="text" name="nomEntregable${numeroE}" placeholder="Nombre">
                                    <input type="number" name="costoEntregable${numeroE}" placeholder="Costo">
                                </div>
                                <textarea name="descEntregable${numeroE}" cols="30" rows="10"
                                        placeholder="Descripcion del entregable"></textarea>
                            </div>`;
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