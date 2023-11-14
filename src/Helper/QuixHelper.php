<?php
/**
 * @package    Quix
 * @author     ThemeXpert http://www.themexpert.com
 * @copyright  Copyright (c) 2010-2015 ThemeXpert. All rights reserved.
 * @license    GNU General Public License version 3 or later; see LICENSE.txt
 * @since      1.0.0
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;
use Joomla\Database\DatabaseAwareInterface;
use Joomla\Database\DatabaseAwareTrait;
use Joomla\Registry\Registry;


class QuixHelper implements DatabaseAwareInterface
{
    use DatabaseAwareTrait;

    /**
     * renderShortCode
     *
     * @param   Registry         $params  The module parameters.
     *
     * @return  string
     *
     * @since   4.4.0
     */
    public function getRenderShortCode(Registry $params): string
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
    /**
     * Get a list of related data
     *
     * @param   Registry  &$params  module parameters
     *
     * @return  string
     *
     * @since   1.6
     *
     * @deprecated  4.4.0  will be removed in 6.0
     *              Use the non-static method getRenderShortCode
     */
    public static function getList(&$params)
    {

        return (new self())->getRenderShortCode($params);
    }


}
