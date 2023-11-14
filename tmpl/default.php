<?php
/**
 * @package     Quix
 * @author      ThemeXpert http://www.themexpert.com
 * @copyright   Copyright (c) 2010-2015 ThemeXpert. All rights reserved.
 * @license     GNU General Public License version 3 or later; see LICENSE.txt
 * @since       1.0.0
 */

// No direct access.
use Joomla\CMS\Helper\ModuleHelper;

defined('_JEXEC') or die;

if (!$list) {
    return;
}
?>

<div class="mod-quix-library<?php echo htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8'); ?>">
    <?php require ModuleHelper::getLayoutPath('mod_quix', $params->get('layout', 'default') );?>
</div>
