// Captura a lista de histórico de registros
const historicoLista = document.getElementById('historico-lista');

// Captura os botões de entrada e saída
const btnEntrada = document.querySelector('.entrada');
const btnSaida = document.querySelector('.saida');

// Adiciona event listener para o botão de entrada
btnEntrada.addEventListener('click', registrarEntrada);

// Adiciona event listener para o botão de saída
btnSaida.addEventListener('click', registrarSaida);

// Função para registrar a entrada
function registrarEntrada() {
    const dataHora = new Date();
    const registro = document.createElement('li');
    registro.classList.add('registro');
    registro.textContent = `Entrada: ${formatarDataHora(dataHora)}`;
    historicoLista.appendChild(registro);
}

// Função para registrar a saída
function registrarSaida() {
    const dataHora = new Date();
    const registro = document.createElement('li');
    registro.classList.add('registro');
    registro.textContent = `Saída: ${formatarDataHora(dataHora)}`;
    historicoLista.appendChild(registro);
}

// Função para formatar a data e hora
function formatarDataHora(dataHora) {
    const dia = String(dataHora.getDate()).padStart(2, '0');
    const mes = String(dataHora.getMonth() + 1).padStart(2, '0');
    const ano = dataHora.getFullYear();
    const hora = String(dataHora.getHours()).padStart(2, '0');
    const minuto = String(dataHora.getMinutes()).padStart(2, '0');
    return `${dia}/${mes}/${ano} ${hora}:${minuto}`;
}
