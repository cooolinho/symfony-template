<?php

namespace Cooolinho\SecurityBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Cooolinho\SecurityBundle\DependencyInjection\CooolinhoSecurityExtension;

class CooolinhoSecurityBundle extends Bundle
{
    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    }

    /**
     * @return CooolinhoSecurityExtension
     */
    public function getContainerExtension(): CooolinhoSecurityExtension
    {
        return new CooolinhoSecurityExtension();
    }
}
