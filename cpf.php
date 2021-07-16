<?php
class CPF {

    private string $numeroCpf;

    private function validarCpf (string $cpf) {
        if (strlen($cpf) < 10) {
            echo "Número de cpf invalido, por favor, digite um cpf válido";
            exit();
        }

        $this->numeroCpf = $cpf;
    }

    
    public function __construct(string $cpf) {
        $this->validarCpf($cpf);
    }

    
    public function recuperarCPF (): string {
        return $this->numeroCpf;
    }

    
    public function setNumeroCpf (string $numeroCpf): void {
        $this->numeroCpf = $numeroCpf;
    }
}