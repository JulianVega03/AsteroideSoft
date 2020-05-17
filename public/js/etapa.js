document.querySelector('.agregarE').addEventListener('click', agregarE);
document.querySelector('.eliminarE').addEventListener('click', eliminarE);
let contenedorE = document.querySelector('.contentEtapas');
let numeroE = 1;
function agregarE() {
    numeroE++;
    contenedorE.innerHTML += `<div class="etapa e${numeroE}">
                                <div class="inputs">
                                <textarea name="descEtapa${numeroE} tEtapa" cols="30" rows="10"
                                        placeholder="Descripcion de la etapa"></textarea>
                                    <input type="text" name="nomEntapa${numeroE}" placeholder="Nombre">
                                </div>
                            </div>`;
}

function eliminarE() {
    if (numeroE > 0) {
        let child = document.querySelector(`.e${numeroE}`);
        contenedorE.removeChild(child);
        numeroE--;
    }
}