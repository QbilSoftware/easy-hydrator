<?php

declare(strict_types=1);

namespace Symplify\EasyHydrator\Tests\HttpKernel;

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Bundle\BundleInterface;
use Symplify\EasyHydrator\EasyHydratorBundle;
use Symplify\SimplePhpDocParser\Bundle\SimplePhpDocParserBundle;
use Symplify\SymplifyKernel\Bundle\SymplifyKernelBundle;
use Symplify\SymplifyKernel\HttpKernel\AbstractSymplifyKernel;
use Psr\Container\ContainerInterface;

final class EasyHydratorTestKernel extends AbstractSymplifyKernel
{
    public function createFromConfigs(array $configFiles): ContainerInterface
    {
        $configFiles[] = __DIR__.'/../config.php';
        return $this->create([], [], $configFiles);
    }
}
