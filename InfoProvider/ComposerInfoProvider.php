<?php

/**
 * File containing the ComposerInfoProvider class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\SystemInfoBundle\InfoProvider;

class ComposerInfoProvider extends InfoProvider
{
    /**
     * @var string Installation root directory
     */
    private $installDir;

    public function __construct($template, $installDir)
    {
        $this->template = $template;
        $this->installDir = $installDir;
    }

    /**
     * Returns info provider identifier.
     *
     * @return string
     */
    public function getIdentifier()
    {
        return 'packages';
    }

    /**
     * Returns information about installed composer packages.
     *
     * @return array
     */
    public function getInfo()
    {
        if (!file_exists($this->installDir . 'composer.lock')) {
            return [];
        }

        $packages = [];
        $lockData = json_decode(file_get_contents($this->installDir . 'composer.lock'), true);
        foreach ($lockData['packages'] as $packageData) {
            $packages[$packageData['name']] = [
                'version' => $packageData['version'],
                'time' => $packageData['time'],
                'homepage' => isset($packageData['homepage']) ? $packageData['homepage'] : '',
                'reference' => $packageData['source']['reference'],
            ];
        }

        ksort($packages, SORT_FLAG_CASE | SORT_STRING);

        return $packages;
    }
}
