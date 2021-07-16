<?php

class Titular
{
    private cpf $cpf;
    private string $nome;

    public function __construct(cpf $cpf, string $nome)
    {
        $this->validarNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperarCPF(): string
    {
        return $this->cpf->recuperarCPF();
    }

    public function recuperarNome(): string
    {
        return $this->nome;
    }

    private function validarNome(string $nome): void
    {
        if (strlen($nome) < 5){
            echo "Nome precisa ter no minimo 5 caracteres para ser valido";
            exit();
        }
    }
}