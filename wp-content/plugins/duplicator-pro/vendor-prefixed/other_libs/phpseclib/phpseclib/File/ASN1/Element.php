<?php

/**
 * Pure-PHP ASN.1 Parser
 *
 * PHP version 5
 *
 * @category  File
 * @package   ASN1
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2012 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */
namespace VendorDuplicator\phpseclib\File\ASN1;

\defined("ABSPATH") or die("");
/**
 * ASN.1 Element
 *
 * Bypass normal encoding rules in phpseclib\File\ASN1::encodeDER()
 *
 * @package ASN1
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
class Element
{
    /**
     * Raw element value
     *
     * @var String
     * @access private
     */
    var $element;
    /**
     * Constructor
     *
     * @param String $encoded
     * @return \phpseclib\File\ASN1\Element
     * @access public
     */
    function __construct($encoded)
    {
        $this->element = $encoded;
    }
}
