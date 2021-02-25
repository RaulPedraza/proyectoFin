function nuevoPedido(){
    let form = document.getElementById("form")
    let botonPedir = document.getElementById("bPedir")
    botonPedir.setAttribute("Style", "display: none;")

    //Campo Direccion
    let divDireccion = document.createElement("div")
    divDireccion.setAttribute("class","form-group")
    let labelDireccion = document.createElement("label")
    labelDireccion.setAttribute("for", "direccion")
    let labelDireccionText = document.createTextNode("Direccion")
    labelDireccion.appendChild(labelDireccionText)

    let inputDireccion = document.createElement("input")
    inputDireccion.setAttribute("type","text")
    inputDireccion.setAttribute("name","direccion")
    inputDireccion.setAttribute("id","direccion")
    inputDireccion.setAttribute("class","form-control")
    inputDireccion.setAttribute("placeholder","Dirección")

    divDireccion.appendChild(labelDireccion)
    divDireccion.appendChild(inputDireccion)

    //Campo Piso
    let divPiso = document.createElement("div")
    divPiso.setAttribute("class","form-group")
    let labelPiso = document.createElement('label')
    labelPiso.setAttribute("for", "piso")
    let labelPisoText = document.createTextNode("Piso")
    labelPiso.appendChild(labelPisoText)

    let inputPiso = document.createElement("input")
    inputPiso.setAttribute("type","text")
    inputPiso.setAttribute("name","piso")
    inputPiso.setAttribute("id","piso")
    inputPiso.setAttribute("class","form-control")
    inputPiso.setAttribute("placeholder","Piso")

    divPiso.appendChild(labelPiso)
    divPiso.appendChild(inputPiso)

    //Campo Puerta
    let divPuerta = document.createElement("div")
    divPuerta.setAttribute("class","form-group")
    let labelPuerta = document.createElement('label')
    labelPuerta.setAttribute("for", "puerta")
    let labelPuertaText = document.createTextNode("Puerta")
    labelPuerta.appendChild(labelPuertaText)

    let inputPuerta = document.createElement("input")
    inputPuerta.setAttribute("type","text")
    inputPuerta.setAttribute("name","puerta")
    inputPuerta.setAttribute("id","puerta")
    inputPuerta.setAttribute("class","form-control")
    inputPuerta.setAttribute("placeholder","Puerta")

    divPuerta.appendChild(labelPuerta)
    divPuerta.appendChild(inputPuerta)

    //Boton enviar
    let inputPedir = document.createElement("input")
    inputPedir.setAttribute("type","submit")
    inputPedir.setAttribute("value","Pedir")
    inputPedir.setAttribute("class","btn btn-primary btn-lg btn-block")

    form.appendChild(divDireccion)
    form.appendChild(divPiso)
    form.appendChild(divPuerta)
    form.appendChild(inputPedir)

}
