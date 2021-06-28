<?php
namespace MhsDesign\Neos\AfxFiles\Dsl;

use Neos\Flow\Annotations as Flow;
use Neos\Fusion;
use Neos\Fusion\Core\DslInterface;
use Neos\Fusion\Afx\Dsl\AfxDslImplementation;

/**
 * Class Fusion AFX Template Dsl
 *
 * @Flow\Scope("singleton")
 */
class AfxFilesDslImplementation implements DslInterface
{
    /**
     * Get the content of the AFX file and let AFX transpile the given dsl-code to fusion-code
     *
     * @param string $path
     * @return string
     * @throws Fusion\Exception
     */
    public function transpile($path)
    {
        $path = trim($path);
        if (file_exists($path)){
            $template = file_get_contents($path);
            return AfxDslImplementation::transpile($template);
        } else {
            throw new Fusion\Exception(sprintf('Error during AFX Template reading: AFX File `%s` doesn\'t exist.', $path));
        }
    }
}
