<?php
/**
 * Text link generator
 *
 * @package PhpMyAdmin
 */
declare(strict_types=1);

namespace PhpMyAdmin\Html\ActionLinksModes;

/**
 * Text link generator
 *
 * @package PhpMyAdmin
 */
class Text implements ActionLinksModesInterface
{
    /**
     * Generate the link in the right form
     *
     * @param string $name  Name of the generated element
     * @param string $class Class of the generated element, if image mode
     * @param string $text  Text of the generated element
     * @param string $image Image of the generated element, if image mode
     * @param string $value Value of the generated element
     *
     * @return string
     */
    public static function generate(
        string $name,
        string $class,
        string $text,
        string $image,
        string $value = ''
    ): string {
        if (empty($value)) {
            $value = $text;
        }
        return ' <input class="btn btn-link" type="submit" name="' . $name . '"'
            . ' value="' . htmlspecialchars($value) . '"'
            . ' title="' . htmlspecialchars($text) . '">' . "\n";
    }
}
