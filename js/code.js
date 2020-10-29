function validacionForm() {
    // alert('Hello world');
    var user=document.getElementById('user').value;  
    var passwd=document.getElementById('passwd').value;

    if(user=='' && passwd==''){
        //primero
        document.getElementById("message").innerHTML='<p style="color: red">Ambos campos están vacíos</p>';
        document.getElementById("user").style.borderColor = "red";
        document.getElementById("passwd").style.borderColor = "red";
        //segundo
        document.getElementById("submit").style.backgroundColor = "#FF748D";
        document.getElementById("submit").style.borderColor = "blue";
        document.getElementById("submit").style.color = "red";
        //tercero
        document.getElementById("message").innerHTML='<p style="color: black">Inténtalo de nuevo</p>';
        document.getElementById("message").style.backgroundColor = "#FF748D";
        document.getElementById("message").style.borderRadius = "5px";
        document.getElementById("message").style.padding = " 0.5px 0.5px"; 
        //cuarto
        document.getElementsByTagName("label")[0].style.color = "red";
        document.getElementsByTagName("label")[1].style.color = "red";

     }else if(user==''){
        //primero
        document.getElementById("message").innerHTML='<p style="color: red">El usuario está vacío</p>';
        document.getElementById("user").style.borderColor = "red";
        document.getElementById("passwd").style.borderColor = "grey";
        //segundo
        document.getElementById("submit").style.backgroundColor = "#FF748D";
        document.getElementById("submit").style.borderColor = "blue";
        document.getElementById("submit").style.color = "red"; 
        //tercero
        document.getElementById("message").innerHTML='<p style="color: black">Inténtalo de nuevo</p>';
        document.getElementById("message").style.backgroundColor = "#FF748D";
        document.getElementById("message").style.borderRadius = "5px";
        document.getElementById("message").style.padding = " 0.5px 0.5px";
        //cuarto
        document.getElementsByTagName("label")[0].style.color = "red";
        document.getElementsByTagName("label")[1].style.color = "grey";

     }else if(passwd==''){
        //primero
        document.getElementById("message").innerHTML='<p style="color: red">El password está vacío</p>';
        document.getElementById("passwd").style.borderColor = "red";
        document.getElementById("user").style.borderColor = "grey";
        //segundo
        document.getElementById("submit").style.backgroundColor = "#FF748D";
        document.getElementById("submit").style.borderColor = "blue";
        document.getElementById("submit").style.color = "red";
        //tercero
        document.getElementById("message").innerHTML='<p style="color: black">Inténtalo de nuevo</p>';
        document.getElementById("message").style.backgroundColor = "#FF748D";
        document.getElementById("message").style.borderRadius = "5px";
        document.getElementById("message").style.padding = " 0.5px 0.5px";
        //cuarto
        document.getElementsByTagName("label")[0].style.color = "grey";
        document.getElementsByTagName("label")[1].style.color = "red";

     }else{
         return true;
     }

     return false;

}