<?php

/**
 * File containing the EzSystemsSystemInfoBundle class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\SystemInfoBundle;

//use EzSystems\SystemInfoBundle\DependencyInjection\Configuration;
//use EzSystems\SystemInfoBundle\DependencyInjection\EzSystemsSystemInfoExtension;
//use EzSystems\PlatformUIBundle\DependencyInjection\Compiler\ApplicationConfigProviderPass;
//use EzSystems\PlatformUIBundle\DependencyInjection\EzPlatformUIExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class EzSystemsSystemInfoBundle extends Bundle
{
//    protected $name = 'eZSystemInfoBundle';
//
//    public function getContainerExtension()
//    {
//        return new EzPlatformUIExtension();
//    }

    /**
     * Builds the bundle.
     * It is only ever called once when the cache is empty.
     * This method can be overridden to register compilation passes,
     * other extensions, ...
     *
     * @param ContainerBuilder $container A ContainerBuilder instance
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
//        $container->addCompilerPass(new ApplicationConfigProviderPass());
    }
}
