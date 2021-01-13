<?php

namespace Beyondercode\Ebank\Model\Account;

use Beyondercode\Ebank\Model\Authenticable;
use Beyondercode\Ebank\Model\Person;
use Beyondercode\Ebank\Model\Cpf;
use Beyondercode\Ebank\Model\Address;

class Owner extends Person implements Authenticable
{
    public function __construct(Cpf $cpf, string $name, private Address $address)
    {
        parent::__construct($name, $cpf);
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

	public function authenticate(string $password): bool
	{
		return $password === 'abcd';
	}
}