<?php 	
	$app = new Module();
	$uri = $app->uri();
 ?>



<script>
$(document).ready(function() {
    // Função para realizar a requisição AJAX
    function fazerRequisicao(cnpj) {
        $.ajax({
            url: 'https://api-publica.speedio.com.br/buscarcnpj?cnpj=' + cnpj,
            dataType: 'json',
            success: function(data) {
                // Populate os campos do formulário com os dados JSON
                $('#projectinput1[name="cliente_nome"]').val(data["NOME FANTASIA"]);
                $('#projectinput1[name="cliente_razao_social"]').val(data["RAZAO SOCIAL"]);
                $('#projectinput1[name="cliente_inscricao"]').val(""); // Inscrição estadual (não fornecida no JSON)
                $('#projectinput2[name="cliente_nome_fantasia"]').val(data["NOME FANTASIA"]);
                $('#projectinput3[name="cliente_telefone"]').val(data["TELEFONE"]);
                $('#projectinput3[name="cliente_email"]').val(data["EMAIL"]);
                $('#projectinput3[name="cliente_CEP"]').val(data["CEP"]);
                $('#projectinput3[name="cliente_logradouro"]').val(data["TIPO LOGRADOURO"] + " " + data["LOGRADOURO"]);
                $('#projectinput3[name="cliente_numero"]').val(data["NUMERO"]);
                $('#projectinput3[name="cliente_complemento"]').val(data["COMPLEMENTO"]);
                $('#projectinput3[name="cliente_bairro"]').val(data["BAIRRO"]);
                $('#projectinput3[name="cliente_municipio"]').val(data["MUNICIPIO"]);
                $('#projectinput3[name="cliente_uf"]').val(data["UF"]);
            },
            error: function() {
                // Trate o erro se a requisição à API falhar
                alert('Erro ao buscar dados da API');
            }
        });
    }

    // Adicione um ouvinte de eventos para o campo #cnpj quando o evento "input" for acionado
    $('#cnpj').on('input', function() {
        var cnpj = $(this).val();
        // Remove a máscara do CNPJ
        cnpj = cnpj.replace(/\D/g, '');

        if (cnpj.length === 14) { // Verifica se o CNPJ tem 14 caracteres
            fazerRequisicao(cnpj);
        }
    });
    // Mask for CNPJ (##.###.###/####-##)
    $('#cnpj').mask('00.000.000/0000-00', { reverse: true });

    // Mask for Telephone (e.g., (##) ####-####)
    $('#telefone').mask('(00)0 0000-0000');

    // Mask for CEP (#####-###)
    $('#CEP"]').mask('00000-000');

    $('#valor_base').mask('000.000.000.000,00');
    $('#valor_venda').mask('000.000.000.000,00');
});

$(document).ready( function () {
    var table = new DataTable('#myTable', {
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/pt-BR.json',
            decimal: ',',
            thousands: '.'

        },
        "order": [[ 0, 'desc' ]],
    });
} );
</script>
<script>
$(document).ready(function() {
    // Initialize the Mask Money plugin for produto_valor_base input
    $('#base').maskMoney({
        thousands: '.',     // Thousands separator
        decimal: ',',       // Decimal separator
        allowZero: true,    // Allow zero as a valid input
        precision: 2        // Number of decimal places
    });

    // Initialize the Mask Money plugin for produto_valor_venda input
    $('#venda').maskMoney({
        thousands: '.',
        decimal: ',',
        allowZero: true,
        precision: 2
    });
});
</script>

    
