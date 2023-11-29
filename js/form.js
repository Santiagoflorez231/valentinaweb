console.log("hola mundo bello");
const expesiones={
    usuario: /^[a-zA-Z0-9\_\-]{4,16}$/,      // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,  
    apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,         // Letras y espacios, pueden llevar acentos.
    password: /^.{4,12}$/,                   // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/
}
var formulario= document.getElementById('formulario');
var inputs= document.querySelectorAll('#formulario input');


var nombre_error=document.getElementById('errornombre');
var apellido_error= document.getElementById('errorlastname');
var usuario_error=document.getElementById('erroruser');
var password_error=document.getElementById('errorpassword');
var password_error2=document.getElementById('errorpassword2');


const campos = {
	name: false,
	lastname: false,
    user:false,
	password1: false,
}


const validarFormulario= (e)=>{
    let campo;
    switch (e.target.name) {
        case "name":
            campo=validarcampo(expesiones.nombre,e.target,'name');
            if(campo== 'malo'){
                nombre_error.textContent="El nombre no puede tener números";
            }else{
                nombre_error.textContent=""
            }
            break;
        case "lastname":
            campo=validarcampo(expesiones.apellido,e.target,'lastname');
            if(campo== 'malo'){
                apellido_error.textContent="El apellido no puede tener números";
            }else{
                apellido_error.textContent=""
            }
            break;
        case "user":
            campo=validarcampo(expesiones.correo,e.target,'user');
            if(campo== 'malo'){
                usuario_error.textContent="El correo no es válido";
            }else{
                usuario_error.textContent=""
            }
            break;
        case "password1":
            campo=validarcampo(expesiones.password,e.target,'password1');
            if(campo== 'malo'){
                password_error.textContent="La contraseña debe tener 4-12 carácteres";
            }else{
                password_error.textContent=""
            }
            validatepassword2();
            break;
        case "password2":
            validatepassword2();
            break;
    
    }
}

const validarcampo=(expesion,input,campo)=>{
    if(expesion.test(input.value)){
        document.getElementById(`${campo}`).classList.remove('border');
        document.getElementById(`${campo}`).classList.remove('border-primary-subtle');
        document.getElementById(`${campo}`).classList.remove('incorrect');
        document.getElementById(`${campo}`).classList.add('correct');
        document.querySelector(`#grupo_${campo} i`).classList.remove('bi-x-lg');
        document.querySelector(`#grupo_${campo} i`).classList.add('bi-check2');
        document.querySelector(`#grupo_${campo} i`).classList.add('pos');
        campos[campo]=true;
        return "verdadero";

    }else{
        document.getElementById(`${campo}`).classList.remove('border');
        document.getElementById(`${campo}`).classList.remove('border-primary-subtle');
        document.getElementById(`${campo}`).classList.add('incorrect');
        document.querySelector(`#grupo_${campo} i`).classList.remove('bi-check2');
        document.querySelector(`#grupo_${campo} i`).classList.add('bi-x-lg');
        campos[campo]=false;
        return 'malo';
    }

}

const validatepassword2=()=>{
    const password1=document.getElementById('password1').value;
    const password2=document.getElementById('password2').value;
    if(password2!=""){
        if(password2 != password1){
            document.getElementById('password2').classList.remove('border');
            document.getElementById('password2').classList.remove('border-primary-subtle');
            document.getElementById('password2').classList.add('incorrect');
            document.querySelector('#grupo_password2 i').classList.remove('bi-check2');
            document.querySelector('#grupo_password2 i').classList.add('bi-x-lg');
            password_error2.textContent="La contraseña no coincide";
            campos['password']=false;
        }else{
            document.getElementById('password2').classList.remove('border');
            document.getElementById('password2').classList.remove('border-primary-subtle');
            document.getElementById('password2').classList.remove('incorrect');
            document.getElementById('password2').classList.add('correct');
            document.querySelector(`#grupo_password2 i`).classList.remove('bi-x-lg');
            document.querySelector(`#grupo_password2 i`).classList.add('bi-check2');
            document.querySelector(`#grupo_password2 i`).classList.add('pos');
            password_error2.textContent="";
            campos['password']=true;
        }
    }
}

inputs.forEach((input)=>{
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
    
});



formulario.addEventListener('submit',(e)=>{
    e.preventDefault();
    if(campos.name & campos.lastname & campos.user & campos.password1){
        formulario.reset()

       let mensaje=  Swal.fire({
        title: "¡Registro completado!",
        text: "You clicked the button!",
        icon: "success"
      });

      document.querySelectorAll('.correct').forEach((icono) => {
        icono.classList.remove('correct');
    });

    document.querySelectorAll('.pos').forEach((icono) => {
        icono.classList.remove('pos');
    });
    }
    

   
})
