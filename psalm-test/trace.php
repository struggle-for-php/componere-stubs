<?php

class A {}

$definition = new Componere\Definition(A::class);
$reflection = $definition->getReflector();
/** @psalm-trace $reflection */

$definition = new Componere\Patch(new A);
$reflection = $definition->getReflector();
/** @psalm-trace $reflection */
