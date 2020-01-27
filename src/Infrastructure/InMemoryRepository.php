<?php

namespace App\Infrastructure;

abstract class InMemoryRepository
{
    protected array $storage = [];
    protected int $increment = 0;
}