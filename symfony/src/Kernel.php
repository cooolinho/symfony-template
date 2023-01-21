<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;
    public const ENV_DEV = 'dev';
    public const ENV_DEV_DIR = '/tmp/symfony';
    public const LOG_DIR = 'log';
    public const CACHE_DIR = 'cache';

    public function getCacheDir(): string
    {
        return $this->getVarDir(self::CACHE_DIR);
    }

    public function getLogDir(): string
    {
        return $this->getVarDir(self::LOG_DIR);
    }

    private function getVarDir(string $subDirectory): string
    {
        $rootDirectory = self::ENV_DEV === $this->environment ? self::ENV_DEV_DIR : \dirname(__DIR__).'/var';

        return sprintf(
            '%s/%s/%s',
            $rootDirectory,
            $this->environment,
            $subDirectory
        );
    }
}
