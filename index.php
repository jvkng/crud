<?php

use App\Model\Produto;
use App\Model\ProdutoDao;

require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto();
$produto->setId('1');
$produto->setNome('Notebook DELL viper');
$produto->setDescricao('i5, 128gb, ssd 2tb');

$ProdutoDao = new ProdutoDao();

/* var_dump($produtoDao ->create($produto)); */

/* var_dump($ProdutoDao->read()); */

/* var_dump($produtoDao->update($produto)); */

 var_dump($produto->delete($produto->getId())); 