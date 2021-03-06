<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

$params = $displayData->params;

$images = json_decode($displayData->images);

if (isset($images->image_fulltext) && !empty($images->image_fulltext)) {
    $imgfloat = empty($images->float_fulltext) ? $params->get('float_fulltext') : $images->float_fulltext;
    ?>
<div class="uk-align-<?php echo htmlspecialchars($imgfloat); ?> item-image">
    <img <?php if ($images->image_fulltext_caption) {
            echo 'class="caption" title="' . htmlspecialchars($images->image_fulltext_caption) . '"';
        } ?> src="<?php echo htmlspecialchars($images->image_fulltext); ?>" alt="<?php echo htmlspecialchars($images->image_fulltext_alt); ?>" itemprop="image"/>
</div>
<?php
}