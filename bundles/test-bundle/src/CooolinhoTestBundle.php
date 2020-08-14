<?php

namespace Cooolinho\TestBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Cooolinho\TestBundle\DependencyInjection\CooolinhoTestExtension;

class CooolinhoTestBundle extends Bundle
{
    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    }

    /**
     * @return CooolinhoTestExtension
     */
    public function getContainerExtension(): CooolinhoTestExtension
    {
        return new CooolinhoTestExtension();
    }
}
