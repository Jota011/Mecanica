function deslogar(){
    var end = '../View/loginView.php';
    window.location.href = end;
}

function deletarVeiculo(idVeiculo){
    if (idVeiculo != null){
        if (confirm("DESEJA DELETAR O VEICULO SELECIONADO?") == true){
            var end = '../Controller/deletar.php?idVeiculo=' + idVeiculo;
            window.location.href = end;
        } else {
            var end = '../View/consCarroView.php';
            window.location.href = end;
        }
    }
}

function editarVeiculo(idVeiculo){
    if (idVeiculo != null){
        var end = '../View/cadCarroView.php?funcao=editar'
        + '&&idVeiculo='+idVeiculo;
        //PASSAR OS PARAMETROS DE MODELO, MARCA, COR, DESCRICAO, PARA PREENCHER OS CAMPOS NA EDIT
        window.location.href = end;
    } else {
        var end = '../View/consCarroView.php';
        window.location.href = end;
    }
}