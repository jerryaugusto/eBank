<?php


namespace Beyondercode\Ebank\Service;

use Beyondercode\Ebank\Model\Authenticable;

class Authenticator
{
	public function tryLogin(Authenticable $authenticable, string $password): void
	{
		if ($authenticable->authenticate($password)) {
			echo "OK. Login successfull!";
		} else {
			echo "OPS! Login failed";
		}
	}

}