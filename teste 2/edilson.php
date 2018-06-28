<?php
echo 'teste no gil';
echo "<pre>";
$fornecedor  = json_decode(file_get_contents('fornecedor.json'));
$fornecedor1  = json_decode(file_get_contents('fornecedor.json'),true);
$magento1  = json_decode(file_get_contents('magento.json'),true);
$magento  = json_decode(file_get_contents('magento.json'));

//print_r($fornecedor);
$lista_cod_fornecedor = array();
$lista_cod_magento = array();
$array_nao_tem = array();
$contador =0;
$contador2 = 0;
$contador_nao_tem=0;

/*
 * Lista de dados do fornecedor
 * */
foreach($fornecedor->Contatos as $registro):
    // echo 'Código: ' . $registro->codigo . ' - Nome: ' . $registro->nome . '<br>';
    array_push($lista_cod_fornecedor, $registro->codigo);
endforeach;
echo '<b>Fornecedor</b><br>';
print_r($lista_cod_fornecedor);
/*
 * Lista de dados do magento
 * */
foreach($magento->Contatos as $m):
    array_push($lista_cod_magento,$m->codigo);
endforeach;
echo '<b>Magento</b><br>';
echo "<hr>";
print_r($lista_cod_magento);
echo '<hr>';
/*
 * diferença entre fornecedor e magento
 * */
$lista_de_dados_novos = array_diff($lista_cod_fornecedor,$lista_cod_magento);

echo '<b>Dados a serem inseridos</b><br>';

print_r($lista_de_dados_novos);
echo "<hr>";

echo '<b>Dados a serem inseridos tratados</b><br>';

foreach ($lista_de_dados_novos as $key => $val){
    array_push($array_nao_tem,$val);
}

print_r($array_nao_tem);

<?php
echo "<pre>";
$fornecedor  = json_decode(file_get_contents('fornecedor.json'));
$fornecedor1  = json_decode(file_get_contents('fornecedor.json'),true);
$magento1  = json_decode(file_get_contents('magento.json'),true);
$magento  = json_decode(file_get_contents('magento.json'));

//print_r($fornecedor);
$lista_cod_fornecedor = array();
$lista_cod_magento = array();
$array_nao_tem = array();
$contador =0;
$contador2 = 0;
$contador_nao_tem=0;

/*
 * Lista de dados do fornecedor
 * */
foreach($fornecedor->Contatos as $registro):
    // echo 'Código: ' . $registro->codigo . ' - Nome: ' . $registro->nome . '<br>';
    array_push($lista_cod_fornecedor, $registro->codigo);
endforeach;
echo '<b>Fornecedor</b><br>';
print_r($lista_cod_fornecedor);
/*
 * Lista de dados do magento
 * */
foreach($magento->Contatos as $m):
    array_push($lista_cod_magento,$m->codigo);
endforeach;
echo '<b>Magento</b><br>';
echo "<hr>";
print_r($lista_cod_magento);
echo '<hr>';
/*
 * diferença entre fornecedor e magento
 * */
$lista_de_dados_novos = array_diff($lista_cod_fornecedor,$lista_cod_magento);

echo '<b>Dados a serem inseridos</b><br>';

print_r($lista_de_dados_novos);
echo "<hr>";

echo '<b>Dados a serem inseridos tratados</b><br>';

foreach ($lista_de_dados_novos as $key => $val){
    array_push($array_nao_tem,$val);
}

print_r($array_nao_tem);


$count_fornecedor = count($fornecedor1['Contatos']);
$cont_nao_tem  = count($lista_de_dados_novos);

while($contador_nao_tem < $cont_nao_tem){
$contador2 = 0;
    while($contador2 < $count_fornecedor){

        if($fornecedor1['Contatos'][$contador2]['codigo'] == $array_nao_tem[$contador_nao_tem]){
            print_r($fornecedor1['Contatos'][$contador2]);
        }
        $contador2++;
        //print_r($array_naotem[$contado_nao_tem]);
    }
    $contador_nao_tem++;

}

?>
$count_fornecedor = count($fornecedor1['Contatos']);
$cont_nao_tem  = count($lista_de_dados_novos);

while($contador_nao_tem < $cont_nao_tem){
$contador2 = 0;
    while($contador2 < $count_fornecedor){

        if($fornecedor1['Contatos'][$contador2]['codigo'] == $array_nao_tem[$contador_nao_tem]){
            print_r($fornecedor1['Contatos'][$contador2]);
        }
        $contador2++;
        //print_r($array_naotem[$contado_nao_tem]);
    }
    $contador_nao_tem++;

}

?>