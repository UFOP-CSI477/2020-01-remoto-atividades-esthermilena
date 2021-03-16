function cadastrarInformacoes() {

    var  largada, nome, tempo;
    
      largada = document.getElementById("largada").value;
      nome = document.getElementById("nome").value;
      tempo = document.getElementById("tempo").value;
  
    var tabelaInfo, tr, tdPosicao, tdNome, tdTempo, tdVencedor;
  
      tabelaInfo = document.getElementById("conteudo");
      tr = document.createElement("tr");
      tdPosicao = document.createElement("td");
      tdNome = document.createElement("td");
      tdTempo = document.createElement("td");
      tdVencedor = document.createElement("td");
  
      tdPosicao.textContent = largada;
      tdNome.textContent = nome;
      tdTempo.textContent = tempo;
  
      tr.appendChild(tdPosicao);
      tr.appendChild(tdNome);
      tr.appendChild(tdTempo);
      tr.appendChild(tdVencedor);
      tabelaInfo.appendChild(tr);
  
  }
