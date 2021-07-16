<?php

require_once 'conta.php';
require_once 'cpf.php';
require_once 'titular.php';

$caique = new Titular(new CPF('987.654.123-10'), 'Caique');
$primeiraConta = new Conta($caique);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarNomeTitular();
echo $primeiraConta->recuperarCPF();
echo $primeiraConta->recuperarSaldo();

$elaine = new Titular(new CPF('111.222.333-10'), 'Elaine');
$segundaConta = new Conta($elaine);
var_dump($segundaConta);

echo Conta::recuperarNumContas();