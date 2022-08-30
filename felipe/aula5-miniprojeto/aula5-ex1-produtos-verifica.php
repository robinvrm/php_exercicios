<?php
$produtosCatalogo = [
['codigo' => '100', 'produto' => 'Cachorro Quente', 'preco_unitario' => '12.70'],
['codigo' => '101', 'produto' => 'Bauru Simples', 'preco_unitario' => '4.00'],
['codigo' => '102', 'produto' => 'Bauru com ovo', 'preco_unitario' => '4.60'],
['codigo' => '103', 'produto' => 'Hambúrguer', 'preco_unitario' => '15.00'],
['codigo' => '104', 'produto' => 'Cheeseburger', 'preco_unitario' => '13.50'],
['codigo' => '105', 'produto' => 'Refrigerante', 'preco_unitario' => '4.50']
];
?>
<?php
$produtos = $_POST['codigo'];
$produtosAdicionados[] = explode(",",$produtos);
print_r($produtosAdicionados);

foreach ($produtosAdicionados AS $key => $produto) {
    foreach ($produto AS $key2 => $resultado) {
        echo "<br>" . $resultado;
    }
}
if (in_array($resultado, $produtosCatalogo)) {
    $soma = 0;
    foreach ($resultado AS $key => $precoItem) {
        $soma += $precoItem;
    }
}
?>