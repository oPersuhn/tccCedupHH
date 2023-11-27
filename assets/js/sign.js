function mostrarSenha(){
    var inputPass = document.getElementById('senha')
    var btnShowPass = document.getElementById('btn-senha')

    if(inputPass.type === 'password'){
        inputPass.setAttribute('type','text')
        btnShowPass.classList.replace('bi-eye-fill','bi-eye-slash-fill')
    }else{
        inputPass.setAttribute('type','password')
        btnShowPass.classList.replace('bi-eye-slash-fill','bi-eye-fill')
    }
}

function mostrarSenhaConfirm(){
    var inputPassConfirm = document.getElementById('confirmSenha')
    var btnShowPassConfirm = document.getElementById('btn-senha-confirm')

    if(inputPassConfirm.type === 'password'){
        inputPassConfirm.setAttribute('type','text')
        btnShowPassConfirm.classList.replace('bi-eye-fill','bi-eye-slash-fill')
    }else{
        inputPassConfirm.setAttribute('type','password')
        btnShowPassConfirm.classList.replace('bi-eye-slash-fill','bi-eye-fill')
    }
}
