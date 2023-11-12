<?php
/**
 * @package    Quix
 * @author     ThemeXpert http://www.themexpert.com
 * @copyright  Copyright (c) 2010-2015 ThemeXpert. All rights reserved.
 * @license    GNU General Public License version 3 or later; see LICENSE.txt
 * @since      1.0.0
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\Registry\Registry;

/**
 * Helper for mod_breadcrumbs
 *
 * @since  1.5
 */
//class ModQuixHelper
class QuixHelper
{
    /**
     * renderShortCode
     *
     * @param  \Joomla\Registry\Registry  &$params  module parameters
     *
     * @return string
     * @since 3.0.0
     */
    public static function renderShortCode($params)
    {
        $id = $params->get('id');
        if ( ! $id) {
            return '<p>'.Text::_('MOD_QUIX_INVALID_ID').'</p >';
        }

        // Include dependencies
        $collection = QuixAppHelper::qxGetCollectionInfoById($id);
        if ( ! $collection) {
            return '<p>invalid quix collection shortcode!</p >';
        }

        // render main item
        QuixAppHelper::renderQuixInstance($collection);

        return $collection;
    }

}
