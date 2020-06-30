function validate()
{
    let name = document.getElementById('name').value;
    let lastname = document.getElementById('lastname').value;
    let typeident = document.getElementById('typeident').value;
    let identification = document.getElementById('identification').value;
    let email = document.getElementById('email').value;
    let passwords = document.getElementById('passwords').value;   
    let regularExpression  = /^[a-zA-Z0-9!@#$%^&*]{6,16}$/;
    let com = ".com"
    let net = ".net"
    let ar = "@"
     
    

    if(name === "")
    {
        alert("El campo de nombre es requerido");
        return false;
    }

    if(lastname === "")
    {
        alert("El campo de apellido es requerido");
        return false;
    }

    if(typeident === "")
    {
        alert("El campo Tipo de identificación es requerido");
        return false;
    }

       

    if(identification === "")
    {
        alert("El campo de identificación, máximo 10 digitos");
        return false;
    }

    if(isNaN(identification))
    {
       
        alert("El campo de identificación debe ser un número");
        return false;
    
    } 

    if(email === "")
    {
        alert("El campo de email es requerido");
        return false;
    }

    if(!ar.test(email))
    {
        alert("Este campo debe contener @");
        return false;
    }

    if(!com.test(email) || !net.test(email))
    {
        alert("Este campo debe terminar en '.com' o '.net'")
        return false;
    }

    if(passwords === "")
    {
        alert("El campo password es requerido");
        return false;
    }  
   

    if(!regularExpression.test(passwords)) {
        alert("password should contain atleast one number and one special character");
        return false;
    }
    
    
   
}