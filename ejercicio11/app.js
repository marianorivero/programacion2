//console.log('OK');
var formulario = document.getElementById('form');
var respuesta = document.getElementById('respuesta');


formulario.addEventListener('submit', function(e){
    e.preventDefault();
    var datos = new FormData(formulario);
    console.log(datos)
    console.log(datos.get('usuario'))
    console.log(datos.get('contraseña'))

    fetch('post.php', {
        method: 'POST',
        body: datos
    })
        .then(res => res.json())
        .then(data => {
            console.log(data)
            if (data == 'error'){
                respuesta.innerHTML = `      
                <div class="alert alert-danger" role="alert">
                    Llena todo los campos
                </div>`
            }else{
                respuesta.innerHTML = `      
                <div class="alert alert-primary" role="alert">
                    ${data}
                </div>
                `
            }
        })
})       