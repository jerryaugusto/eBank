<?php

namespace Beyondercode\Ebank\Model;

class Person
{
	use Accessor;

    protected string $name;
    private Cpf $cpf;

    public function __construct(string $name, Cpf $cpf)
    {
        $this->validateName($name);
        $this->name = $name;
        $this->cpf = $cpf;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCpf(): Cpf
    {
        return $this->cpf;
    }

    final protected function validateName(string $name): void
    {
        if (strlen($name) < 5) {
            echo "Nome precisa ser real!";
            exit();
        }
    }
}