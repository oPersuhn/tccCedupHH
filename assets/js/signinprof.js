let btn = document.querySelector('.fa-eye');
let inputSenha = document.querySelector('#senha');

btn.addEventListener('click', () => {
  if (inputSenha.getAttribute('type') === 'password') {
    inputSenha.setAttribute('type', 'text');
  } else {
    inputSenha.setAttribute('type', 'password');
  }
});




function entrar() {
  let matricula = document.querySelector('#matricula');
  let matLabel = document.querySelector('#matLabel');

  let senha = document.querySelector('#senha');
  let senhaLabel = document.querySelector('#senhaLabel');

  let msgError = document.querySelector('#msgError');
  let listaMat = [];

  let matValid = {
    mat: null,
    senha: null
  };

  listaMat = JSON.parse(localStorage.getItem('listaMat'));

  listaMat?.forEach((item) => {
    if (matricula.value == item.matCad && senha.value == item.senhaCad) {
      matValid = {
        mat: item.matCad,
        senha: item.senhaCad
      };
    }
  });

  if (matricula.value == matValid.mat && senha.value == matValid.senha) {
    window.location.href = './assets/html/index_prof.html';

    let mathRandom = Math.random().toString(16).substr(2);
    let token = mathRandom + mathRandom;

    localStorage.setItem('token', token);
    localStorage.setItem('matLogado', JSON.stringify(matValid));
  } else {
    matLabel.style.color = 'red';
    matricula.style.borderColor = 'red';
    senhaLabel.style.color = 'red';
    senha.style.borderColor = 'red';
    msgError.style.display = 'block';
    msgError.innerHTML = 'Matrícula ou senha incorretos';
    matricula.focus();
  }
}
