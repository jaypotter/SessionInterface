<?php

declare(strict_types=1);

namespace Potter\Session;

interface SessionInterface 
{
    public function activate(): void;
    public function isActive(): bool;
    
    public function getId(): string;
    public function getName(): string;
}