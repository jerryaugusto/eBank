<?php


namespace Beyondercode\Ebank\Model;


trait Accessor
{
	public function __get(string $attributeName)
	{
		$method = 'get' . ucfirst($attributeName);
		return $this->$method();
	}
}