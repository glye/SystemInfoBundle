<?php

/**
 * File containing the EzSystemsSystemInfoBundle class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\SystemInfoBundle;

use EzSystems\SystemInfoBundle\DependencyInjection\EzSystemsSystemInfoExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class EzSystemsSystemInfoBundle extends Bundle
{
    protected $name = 'eZSystemInfoBundle';

    public function getContainerExtension()
    {
        return new EzSystemsSystemInfoExtension();
    }
}
