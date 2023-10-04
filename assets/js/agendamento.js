
const modalidadeProfessores = {
    yoga: "Pedro Barros",
    funcional: "Matheus Forquim",
    musculacao: "Ruan Mouzinho",
    boxe: "Ruan Mouzinho",
    dança: "Luiz Vinícius",
    corrida: "Augusto Persuhn",
  };
  
  // Função para atualizar o campo de professor com base na modalidade selecionada
  function atualizarProfessor() {
    const aulaSelect = document.getElementById("aula");
    const professorInput = document.getElementById("professor");
  
    const modalidadeSelecionada = aulaSelect.value;
    const nomeProfessor = modalidadeProfessores[modalidadeSelecionada];
  
    if (nomeProfessor) {
      professorInput.value = nomeProfessor;
    } else {
      professorInput.value = ""; // Limpa o campo se nenhuma modalidade for selecionada
    }
  }
  

  // Adicionar um ouvinte de evento para o evento "change" no elemento select
  const aulaSelect = document.getElementById("aula");
  aulaSelect.addEventListener("change", () => {
    atualizarProfessor(); // Atualize o professor primeiro
    bloquearProfessor(); // Em seguida, bloqueie o campo de professor
  });
  
  