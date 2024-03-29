<?php

declare(strict_types=1);

namespace Potter\Session;

abstract class AbstractSession implements SessionInterface
{
    abstract public function activate(): void;
    abstract public function isActive(): bool;
    
    abstract public function getId(): string;
    abstract protected function setId(string $id): void;
    
    abstract public function getName(): string;
    abstract protected function setName(string $name): void;
    
    abstract public function getSavePath(): string;
    abstract protected function setSavePath(string $path): void;
}