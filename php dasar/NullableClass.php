<?php

class Address
{
    public ?string $country = "Indonesia";

    public function getCountry(): ?string
    {
        return $this->country;
    }
}

class User
{
    public function __construct(public ?Address $address = null) {}

    public function getAddress(): ?Address
    {
        return $this->address;
    }
}

$user = new User(new Address);
echo $user->getAddress()?->getCountry() . PHP_EOL;

