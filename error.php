<?php
// No direct access.
defined('_JEXEC') or die;

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();

/* Location of error article */
$error = JRoute::_('index.php?option=com_content&view=article&id=61&Itemid=121');

/* Redirect to error article */
$app->redirect($error);