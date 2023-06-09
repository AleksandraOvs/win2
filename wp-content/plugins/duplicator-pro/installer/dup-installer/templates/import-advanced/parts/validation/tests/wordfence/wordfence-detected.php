<?php

/**
 * @package Duplicator
 * @copyright (c) 2022, Snap Creek LLC
 */

defined('ABSPATH') || defined('DUPXABSPATH') || exit;

/**
 * Variables
 * @var string $wordFencePath
 */
?>
<div class="sub-title">STATUS</div>
<p class="maroon"> A Wordfence firewall instance was detected at <b><?php echo DUPX_U::esc_html($wordFencePath); ?></b>. </p>

<div class="sub-title">DETAILS</div>
<p>
    The Wordfence Web Application Firewall is a PHP based, application level firewall that filters out malicious
    requests to your site. Sometimes Wordfence returns false positives on requests done during the import, because of which
    the import might fail.
</p>

<div class="sub-title">TROUBLESHOOT</div>
<p>
    If you have Wordfence installed on the current WordPress instance (or the current WordPress instance is located in a
    subdirectory of another WordPress instance which has Wordfence installed) we recommend turning it off during the import
    and reactivating it after the import is completed. To deactivate the firewall follow these steps:
</p>
<ol>
    <li>Go to WordPress Admin Dashboard ❯ Wordfence ❯ Firewall and click on the "Manage WAF".</li>
    <li>Choose Web Application Firewall Status to the "Disabled" option.</li>
    <li>Click on the "SAVE CHANGES" button and save the changed settings.</li>
    <li>Wait for the changes to take place</li>
</ol>
