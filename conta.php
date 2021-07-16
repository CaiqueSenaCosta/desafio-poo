<?php

class Conta
{
    private Titular $titular;
    private float $saldo;
    private static int $numContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numContas++;
    }

    public function __destruct()
    {
        self::$numContas--;
    }

    public function sacar(float $valorASacar)
    {
        if ($valorASacar > $this->saldo){
            echo 'Saldo indisponível';
            return;
        } 
        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0){
            echo "O Valor necessita ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo){
            echo "Saldo insuficiente";
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperarCPF(): string
    {
        return $this->titular->recuperarCPF();
    }

    public function recuperarNomeTitular(): string
    {
        return $this->titular->recuperarNome();
    }

    public static function recuperarNumContas(): int
    {
        return self::$numContas;
    }
} 