<?php
require_once('Item.php');
require_once('Objeto.php');
require_once('Pasta.php');
require_once('Gaveta.php');
require_once('Armario.php');
require_once('Escritorio.php');
require_once('Documento.php');


$escritorio = new Escritorio();

$armario1 = new Armario();
$armario2 = new Armario();

$gaveta1_1 = new Gaveta();
$gaveta1_2 = new Gaveta();

$gaveta2_1 = new Gaveta();
$gaveta2_2 = new Gaveta();

$documento1 = new Documento("Contrato A", "Contrato de prestação de serviços ", "2020-10-11");
$documento2 = new Documento("Contrato B", "Contrato de limpeza", "2017-11-09");

$objeto1 = new Objeto("Calculadora", "Calculadora ", 0.5);
$objeto2 = new Objeto("Luminária", "Luminária", 1.0);

$pasta1 = new Pasta("Documentos Pessoais", "Pasta de documentos ", "Financeiro");
$pasta2 = new Pasta("Documentos escola", "Pasta de provas", "Jurídico");

$gaveta1_1->adicionarItem($documento1);
$gaveta1_2->adicionarItem($objeto1);
$gaveta1_2->adicionarItem($pasta1);

$gaveta2_1->adicionarItem($documento2);
$gaveta2_2->adicionarItem($objeto2);
$gaveta2_2->adicionarItem($pasta2);

$armario1->adicionarGaveta($gaveta1_1);
$armario1->adicionarGaveta($gaveta1_2);

$armario2->adicionarGaveta($gaveta2_1);
$armario2->adicionarGaveta($gaveta2_2);

$escritorio->adicionarArmario($armario1);
$escritorio->adicionarArmario($armario2);

$escritorio->auditoria();

