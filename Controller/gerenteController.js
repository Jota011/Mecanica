function deslogar() {
    var end = '../View/loginView.php';
    window.location.href = end;
}

//VEICULO------------------------------------------------------------------------------

function deletarVeiculo(idVeiculo) {
    if (idVeiculo != null) {
        if (confirm("DESEJA DELETAR O VEICULO SELECIONADO?") == true) {
            var end = '../Controller/deletar.php?idVeiculo=' + idVeiculo;
            window.location.href = end;
        } else {
            var end = '../View/consCarroView.php';
            window.location.href = end;
        }
    }
}

function editarVeiculo(idVeiculo, marca, modelo, cor, descricao) {
    var end = '../View/cadCarroView.php?funcao=editar&&idVeiculo=' + idVeiculo
        + '&&marca=' + marca
        + '&&modelo=' + modelo
        + '&&cor=' + cor
        + '&&descricao=' + descricao;
    window.location.href = end;
}

