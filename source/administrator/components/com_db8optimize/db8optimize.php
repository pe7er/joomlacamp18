<?php
/**
 * @package    db8optimize
 *
 * @author     Peter Martin <joomla@db8.nl>
 * @copyright  Copyright 2017 Peter Martin. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://db8.eu
 */

use Joomla\CMS\Factory;

defined('_JEXEC') or die;

// Access check.
if (!Factory::getUser()->authorise('core.manage', 'com_db8optimize'))
{
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

// Require the helper
require_once JPATH_COMPONENT_ADMINISTRATOR . '/helpers/db8optimize.php';

// Execute the task
$controller = JControllerLegacy::getInstance('db8optimize');
$controller->execute(Factory::getApplication()->input->get('task'), 'dashboard');
$controller->redirect();
