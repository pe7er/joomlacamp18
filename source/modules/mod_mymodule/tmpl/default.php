<?php
/**
 * @package    mymodule
 *
 * @author     pe7er <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;

defined('_JEXEC') or die;

// Access to module parameters
$domain = $params->get('domain', 'https://www.joomla.org');

$input = Factory::getApplication()->input;
echo $input->get('varname', 'default_value', 'filter');

?>


<a href="<?php echo $domain; ?>">
	<?php echo 'mymodule'; ?>
</a>