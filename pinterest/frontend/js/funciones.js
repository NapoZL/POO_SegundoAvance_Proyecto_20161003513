
function obtenerUsuarios(){
    axios({
        url: '../backend/api/usuarios.php',
        method: 'get',
        responseType: 'json'
    }).then(res=>{
        for (let i = 0; i < res.data.length; i++) {
            document.getElementById('usuarios').innerHTML +=
                `<option value="${res.data[i].codigoUsuario}">${res.data[i].nombre}</option>`;
        }
        document.getElementById('usuarios').value = null;
    }).catch(error=>{
        console.error(error);
    });
}

obtenerUsuarios();