function verificarPeso() {
  // Obtém o valor do input de peso
  const pesoStr = document.getElementById("peso_produto").value.trim();

  // Extrai a quantidade e a unidade do peso
  const matches = pesoStr.match(/^(\d+(?:\.\d+)?)\s*([gk]?g)$/i);

  if (!matches) {
    // Mostra um alerta de Bootstrap com a mensagem de que o peso não está em um formato válido
    const alerta = `
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        O peso deve estar no formato 'Xg' ou 'Xkg', onde X é um número!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    `;
    document.body.querySelector("#span_te_teste").innerHTML = alerta;
    return;
  }

  // Converte a quantidade para gramas
  const quantidade = parseFloat(matches[1]);
  const unidade = matches[2].toLowerCase();
  const peso = unidade === "g" ? quantidade : quantidade * 1000;

  // Verifica se o peso é maior do que 12 kg
  if (peso > 12000) {
    // Mostra um alerta de Bootstrap com a mensagem de que o peso excede o limite
    const alerta = `
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        O peso da mercadoria excede o limite de 12 kg!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    `;
    document.body.querySelector("#span_te_teste").innerHTML = alerta;
  } else {
    // Mostra um alerta de Bootstrap com a mensagem de que o peso está dentro do limite
    // const alerta = `
    //   <div class="alert alert-success alert-dismissible fade show" role="alert">
    //     O peso da mercadoria está dentro do limite de 12 kg!
    //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //   </div>
    // `;
    // document.body.querySelector("#span_te_teste").innerHTML = alerta;
  }
}