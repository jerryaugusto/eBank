<?php

class Owner
{
    private Cpf $cpf;
    private string $name;

    public function __construct(Cpf $cpf, string $name)
    {
        $this->cpf = $cpf;
        $this->name = $name;
        $this->validateName($name);
    }

    public function getCpf(): Cpf
    {
        return $this->cpf;
    }

    public function getName(): string
    {
        return $this->name;
    }

    private function validateName(string $name): void
    {
        if (strlen($name) < 5) {
            echo "Nome precisa ser real!";
            exit();
        }
    }
}