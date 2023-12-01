<?php
$template = new TEngine();
$app = new Module();

$use = $_SESSION;

?>

<!DOCTYPE html>
<html>

<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Orçamento</title>

  <?php $template->css(); ?>

</head>

<body>
  <div class="ui yellow three item inverted menu">
    <a class="item active">
      Home
    </a>
    <a class="item">
      Friends
    </a>
  </div>
  <h1 class="ui center aligned header">Orçamento</h1>
  <div class="ui container center aligned">
      <div class="ui grid centered">
          <div class="row">
            <select class="js-example-basic-single" >
              <option value="">Selecione o cliente</option>
            </select>
          </div>
      </div>
        <br>
        <div class="ui cards centered" id="card" style="display: none;" >
          <div class="card">
            <div class="content">
              <div class="header fluid" id="cliente_razao_social">
              </div>
              <div class="meta fluid">
                CNPJ :<span id="cliente_cnpj"></span>
              </div>
              <div class="description">
                <span id="cliente_logradouro">AV. B</span>,
                <span id="cliente_numero">711</span>
                -<span id="cliente_bairro">Conjuto Ceará</span>
                <span id="cliente_municipio">Fortaleza</span>
                -<span id="cliente_uf">CE</span>
              </div>
            </div>
          </div>
        </div>
        <br>
      <form method="POST" action="<?=$app->controller('inserir_orcamento','orcamento'); ?>" >
        <label>Itens dos Orçamento</label><br>
          <div class="field">
            <select id="select-produto">
              <option value="">Selecione um produto</option>
            </select>
          </div>
          <br>
        <input type="hidden" name="orcamento_cliente_id" id="id_cliente" requirid>
        <input type="hidden" name="orcamento_total_geral" id="orcamento_total_geral" requirid>
        <input type="hidden" name="orcamento_usuario_id" value="<?=$use['id_usuario']; ?>" requirid>      
        <div class="ui  grid">
        <div class="row">
          <div class="sixteen wide centered column">
            <table class="ui yellow  table">
              <thead>
                <tr>
                  <th>Produto/Serviço</th>
                  <th>Valor</th>
                  <th>Unid</th>
                  <th>valor Total</th> 
                  <th>Ações</th>                            
                </tr>
              </thead>
              <tbody>
              </tbody>              

            </table>
              <tfoot>
                <h3>Total geral : <span id="total_parcial"></span></h3>                       
              </tfoot>
            </div>          
          </div>
        </div>          
        <div class="ui grid">
          <div class="row">
            <div class="sixteen wide column">
              <div class="ui form">
                <div class="field">
                  <label>Laudo tecnico</label>
                  <textarea name="orcamento_laudo"></textarea>
                </div>
              </div>
            </div>
          </div>  
        </div> 
        <div class="ui grid">
          <div class="row">
            <div class="sixteen wide column">
              <div class="ui form">
                <div class="field">
                  <label>Objetivo</label>
                  <textarea name="orcamento_objetivo" rows="2"></textarea>
                </div>
              </div>
            </div>
          </div>  
        </div>
        <div class="ui grid">
          <div class="row">
            <div class="sixteen wide column">
              <div class="ui form">
                <div class="field">
                  <label>Local da Instalação</label>
                  <textarea name="orcamento_local_instalacao" rows="2"></textarea>
                </div>
              </div>
            </div>
          </div>  
        </div>                 
        <br>
        <button class="positive ui button">Salvar Orçamento</button>
      </form>
      <br>
  </div>
  <?php $template->js(); ?>
  <!-- $app->controller('buscar_cliente'); -->
<script>
  $(document).ready(function() {
    var selectElement = $('.js-example-basic-single');
    var cardCliente = $('#card');

    selectElement.select2({
      tags: true,
      tokenSeparators: [',', ' '],
      ajax: {
        url: '<?=$app->controller('buscar_cliente'); ?>',
        dataType: 'json',
        delay: 250,
        processResults: function(data) {
          return {
            results: data.map(function(item) {
              return { 
                id: item.id_cliente, 
                text: item.cliente_razao_social, 
                cnpj: item.cliente_cnpj,
                logradouro: item.cliente_logradouro,
                numero: item.cliente_numero,
                bairro: item.cliente_bairro,
                municipio: item.cliente_municipio,
                uf: item.cliente_uf
              };
            })
          };
        },
        cache: true
      },
      minimumInputLength: 3
    });

    selectElement.on('change', function() {
      var selectedData = $(this).select2('data')[0];
      
      // Preencha os campos no card com base nos dados selecionados
      $('#id_cliente').val(selectedData.id);
      $('#cliente_razao_social').text(selectedData.text);
      $('#cliente_cnpj').text(selectedData.cnpj);   
      $('#cliente_logradouro').text(selectedData.logradouro);
      $('#cliente_numero').text(selectedData.numero);
      $('#cliente_bairro').text(selectedData.bairro);
      $('#cliente_municipio').text(selectedData.municipio);
      $('#cliente_uf').text(selectedData.uf);

      cardCliente.show();
    });
  });
</script>

<script>
  $(document).ready(function() {
    var selectProduct = $('#select-produto');

    selectProduct.select2({
      tags: true,
      tokenSeparators: [',', ' '],
      ajax: {
        url: '<?=$app->controller('buscar_produtos'); ?>',
        dataType: 'json',
        delay: 250,
        processResults: function(data) {
          return {
            results: data.map(function(item) {
              return { 
                id: item.id_produto, 
                text: item.produto_nome, 
                valor: item.produto_valor_venda
              };
            })
          };
        },
        cache: true
      },
      minimumInputLength: 3
    });
  
    var selectProduct = $('#select-produto');
  var table = $(".ui.yellow.table tbody");
  var valoresTotais = []; // Array para armazenar os valores totais dos produtos

  // Função para calcular o valor total de um produto com base na quantidade
  function calcularValorTotal(quantidade, valor) {
    return quantidade * valor;
  }

  selectProduct.select2({
    tags: true,
    tokenSeparators: [',', ' '],
    ajax: {
      url: '<?=$app->controller('buscar_produtos'); ?>',
      dataType: 'json',
      delay: 250,
      processResults: function (data) {
        return {
          results: data.map(function (item) {
            return {
              id: item.id_produto,
              text: item.produto_nome,
              valor: item.produto_valor_venda,
            };
          }),
        };
      },
      cache: true,
    },
    minimumInputLength: 3,
  });

  var valoresTotais = []; // Declare a matriz para armazenar os valores totais das linhas

selectProduct.on("select2:select", function (e) {
  var Data = e.params.data;
  var rowIndex; // Declare a variável rowIndex para rastrear o índice da linha

  // Crie um input para o id_produto com o valor do id do produto selecionado
  var idInput = $("<input type='hidden' name='id_produto[]' value='" + Data.id + "'>");

  // Crie um input para a quantidade com valor inicial 1
  var quantityInput = $("<input type='number' name='quantidade[]' value='1' min='1'>");

  // Adicione um evento para calcular o total quando a quantidade mudar
  quantityInput.on("input", function () {
    var quant = parseInt($(this).val()) || 0; // Garanta que quant seja um número inteiro
    var total = calcularValorTotal(quant, Data.valor);

    // Atualize o valor do total na mesma linha da tabela
    newRow.find(".total-cell").text(total);

    // Atualize o valor total do produto no array
    valoresTotais[rowIndex] = total;

    // Atualize o valor total geral
    atualizarValorTotalGeral();
  });

  var quant = 1; // Quantidade inicial
  var total = calcularValorTotal(quant, Data.valor);

  // Adicione a linha à tabela
  var newRow = $("<tr>");
  newRow.append("<td>" + Data.text + "</td>");
  newRow.append("<td>" + Data.valor + "</td>");

  // Adicione o input de id_produto
  newRow.append(idInput);

  // Adicione o input de quantidade
  var quantityCell = $("<td>").append(quantityInput);
  newRow.append(quantityCell);

  // Adicione a célula do total com uma classe para facilitar a seleção
  newRow.append("<td class='total-cell'>" + total + "</td>");
  newRow.append('<td><i class="trash alternate icon"></i></td>');

  table.append(newRow);

  // Atualize o valor total do produto no array
  valoresTotais.push(total);

  // Atualize a variável rowIndex com o índice da linha atual
  rowIndex = valoresTotais.length - 1;

  // Atualize o valor total geral
  atualizarValorTotalGeral();

  // Limpe o campo de pesquisa
  selectProduct.val(null).trigger('change');
});

$(".ui.yellow.table").on("click", ".trash.alternate.icon", function () {
  var rowIndex = $(this).closest("tr").index();

  // Remova o valor total do produto excluído do array
  var valorTotalRemovido = valoresTotais.splice(rowIndex, 1)[0];

  // Atualize o valor total geral após a exclusão
  atualizarValorTotalGeral();

  // Remova a linha da tabela
  $(this).closest("tr").remove();
});

// Função para atualizar o valor total geral
function atualizarValorTotalGeral() {
  var totalGeral = valoresTotais.reduce(function (a, b) {
    return a + b;
  }, 0);

  // Atualize o valor total geral na página
  $("#total_parcial").text(totalGeral);
  $("#orcamento_total_geral").val(totalGeral); 
}



    $(".ui.yellow.table").on("click", ".trash.alternate.icon", function () {
      $(this).closest("tr").remove();
    });
  });
</script>



</body>
</html>