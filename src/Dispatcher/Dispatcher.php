<?php

/**
 * @package     Joomla.Site
 * @subpackage  mod_related_items
 *
 * @copyright   (C) 2022 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Module\RelatedItems\Site\Dispatcher;

use Joomla\CMS\Dispatcher\AbstractModuleDispatcher;
use Joomla\CMS\Helper\HelperFactoryAwareInterface;
use Joomla\CMS\Helper\HelperFactoryAwareTrait;

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

/**
 * Dispatcher class for mod_quix
 *
 * @since  5.0.0
 */
class Dispatcher extends AbstractModuleDispatcher implements HelperFactoryAwareInterface
{
    use HelperFactoryAwareTrait;

    /**
     * Returns the layout data.
     *
     * @return  array
     *
     * @since   5.0.0
     */
    protected function getLayoutData(){
        $data = parent::getLayoutData();
        $params = $data['params'];

        $data['item'] = $this->getHelperFactory()->getHelper('QuixHelper',$data)->getRenderShortCode($params);
        return $data;

    }
}
