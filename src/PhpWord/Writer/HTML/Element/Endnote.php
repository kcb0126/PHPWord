<?php
/**
 * PHPWord
 *
 * @link        https://github.com/PHPOffice/PHPWord
 * @copyright   2014 PHPWord
 * @license     http://www.gnu.org/licenses/lgpl.txt LGPL
 */

namespace PhpOffice\PhpWord\Writer\HTML\Element;

/**
 * Endnote element HTML writer
 *
 * @since 0.10.0
 */
class Endnote extends Footnote
{
    /**
     * Note type
     *
     * @var string
     */
    protected $noteType = 'endnote';
}
