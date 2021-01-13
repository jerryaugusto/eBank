<?php

namespace Beyondercode\Ebank\Model;

#[\Attribute]
final class Address
{
	use Accessor;

    public function __construct(
    	private string $city,
	    private string $district,
	    private string $street,
	    private string $number
    ) {}

	public function getCity(): string
    {
        return $this->city;
    }

    public function getDistrict(): string
    {
        return $this->district;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function __toString(): string
    {
	    return "{$this->street}, {$this->number}, {$this->district}, {$this->city}";
    }

}