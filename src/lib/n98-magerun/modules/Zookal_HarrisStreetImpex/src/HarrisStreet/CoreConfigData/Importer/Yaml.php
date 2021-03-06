<?php
/**
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @copyright   2014-present Zookal Pty Ltd, Sydney, Australia
 * @author      Cyrill at Schumacher dot fm [@SchumacherFM]
 */

namespace HarrisStreet\CoreConfigData\Importer;

use Symfony\Component\Yaml\Yaml as SymfonyYaml;

class Yaml extends AbstractImporter
{
    /**
     * Detects hierarchical structure so even a mixed file is possible
     *
     * @param string $fileName
     *
     * @return array
     */
    public function parse($fileName)
    {
        $content = SymfonyYaml::parse($fileName);
        return $this->_normalize($content);
    }
}