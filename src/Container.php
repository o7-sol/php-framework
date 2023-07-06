<?php

declare(strict_types=1);

namespace App;

class Container
{
    public function __construct(private readonly string $class)
    {

    }

    public function resolveClass(): object
    {
        $dependencies = $this->resolveDependencies();
        $class = new \ReflectionClass($this->class);

        return $class->newInstanceArgs($dependencies);
    }

    private function getDependencies(): array
    {
        $reflection = new \ReflectionClass($this->class);

        return $reflection->getConstructor()->getParameters();
    }

    private function resolveDependencies(): array
    {
        $dependencies = [];

        foreach ($this->getDependencies() as $dependency) {
            $dependencies[] = (new \ReflectionClass($dependency->getType()->getName()))->newInstance();
        }

        return $dependencies;
    }
}