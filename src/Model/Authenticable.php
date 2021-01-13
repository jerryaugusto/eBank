<?php


namespace Beyondercode\Ebank\Model;


interface Authenticable
{
	public function authenticate(string $password): bool;
}