<?php

namespace Cooolinho\CoreBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Cooolinho\CoreBundle\DependencyInjection\CooolinhoCoreExtension;

class CooolinhoCoreBundle extends Bundle
{
    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    }

    /**
     * @return CooolinhoCoreExtension
     */
    public function getContainerExtension(): CooolinhoCoreExtension
    {
        return new CooolinhoCoreExtension();
    }
}
