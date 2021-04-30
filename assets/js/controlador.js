function Passwordvalidet(X){
    var x1 = document.getElementById('passwordI');
    var x2 = document.getElementById('passwordII');
    if(X==1){
        //buttonPassword1
        x1.type = "text";
        x2.type = "text";
        var intro = document.getElementById('buttonPassword1');
        intro.style.display = "none";
        var intro2 = document.getElementById('buttonPassword2');
        intro2.style.display = "block";
    };
    if(X==2){
        x1.type = "password";
        x2.type = "password";
        var intro = document.getElementById('buttonPassword2');
        intro.style.display = "none";
        var intro2 = document.getElementById('buttonPassword1');
        intro2.style.display = "block";
    };
}
function HabilitarPassword(){
    var x1 = $('#passwordI').val();
    var x2 = $('#passwordII').val();
    if (x1==x2){
        //var intro = document.getElementById('SendNewUser');
        //intro.style.display = "block";
        document.getElementById('SendNewUser').disabled = false;
    }else{
        //SendNewUser
        //var intro = document.getElementById('SendNewUser');
        //intro.style.display = "none";
        document.getElementById('SendNewUser').disabled = true;
    }
}