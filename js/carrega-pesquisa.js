/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(function () {
    //pesquisar sem refresh
    $("#fixed-header-drawer-exp").keyup(function () {
        var pesquisa = $(this).val();

        //verificar se a variavel possui algo digitado
        if (pesquisa != '') {
            var dados = {
                palavra: pesquisa
            }
            $.post('../processamento/busca-sem-refresh-paciente.php', dados, function (retorna) {
                $(".resultado").html(retorna)
            });
        } else {
            $.ajax({
                url: '../js/busca-sem-refresh-paciente.php',
                type: 'POST',
                dataType: 'html',
                success: function (data) {
                    $(".resultado").empty().html(dados);
                }
            });
        }
    });
});