<?php

namespace App\Src\Domain\Interfaces;

interface CountryRepositoryInterface
{
    public function get(?string $search = null);
}