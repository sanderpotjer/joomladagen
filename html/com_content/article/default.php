<?php
/**
 * @version		$Id: default.php 22359 2011-11-07 16:31:03Z github_bot $
 * @package		Joomla.Site
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

// Create shortcuts to some parameters.
$params		= $this->item->params;
$canEdit	= $this->item->params->get('access-edit');
$user		= JFactory::getUser();

// Load module 
$document	= &JFactory::getDocument();
$renderer	= $document->loadRenderer('modules');
$options	= array('style' => 'raw');
$position	= 'sponsoren-goud';
?>

<div class="itemtitle clearfix">
	<h2>
		<?php echo $this->escape($this->item->title); ?>
	</h2>
	<?php if ($params->get('show_publish_date')) : ?>
		<div class="published">
			<?php echo JText::sprintf('COM_CONTENT_PUBLISHED_DATE_ON', JHtml::_('date',$this->item->publish_up, JText::_('DATE_FORMAT_LC2'))); ?>
		</div>
	<?php endif; ?>
	<?php if ($this->item->catid == 7) : ?>
	<div class="social">
		<div class="buttons">
			<div class="facebooklike soc"><fb:like href="<?php echo JURI::current(); ?>" layout="button_count" send="false" show_faces="false" action="like"/></div>
			<div class="twitter soc"><a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo JURI::current(); ?>" data-via="joomladagen" data-text="<?php echo $this->escape($this->item->title); ?> #jd12nl" data-count="horizontal">Tweet</a></div>
			<div class="googleplus soc"><g:plusone size="medium"></g:plusone></div>
		</div>
	</div>
	<?php endif; ?>
</div>

<div class="row clearfix<?php echo $item->state == 0 ? ' system-unpublished' : null; ?>">
	<div class="space clearfix">
		<?php if ($canEdit ||  $params->get('show_print_icon') || $params->get('show_email_icon')) : ?>
			<ul class="actions">
			<?php if (!$this->print) : ?>
				<?php if ($params->get('show_print_icon')) : ?>
					<li class="print-icon">
					<?php echo JHtml::_('icon.print_popup',  $this->item, $params); ?>
					</li>
				<?php endif; ?>
		
				<?php if ($params->get('show_email_icon')) : ?>
					<li class="email-icon">
					<?php echo JHtml::_('icon.email',  $this->item, $params); ?>
					</li>
				<?php endif; ?>
		
				<?php if ($canEdit) : ?>
					<li class="edit-icon">
					<?php echo JHtml::_('icon.edit', $this->item, $params); ?>
					</li>
				<?php endif; ?>
		
			<?php else : ?>
				<li>
				<?php echo JHtml::_('icon.print_screen',  $this->item, $params); ?>
				</li>
			<?php endif; ?>
			</ul>
		<?php endif; ?>
	
		<?php if (!$params->get('show_intro')) :
			echo $this->item->event->afterDisplayTitle;
		endif; ?>
	
		<?php echo $this->item->event->beforeDisplayContent; ?>
	
		<?php if (isset ($this->item->toc)) : ?>
			<?php echo $this->item->toc; ?>
		<?php endif; ?>
		
		<?php if ($params->get('access-view')):?>
			<?php echo $this->item->text; ?>
			<?php //optional teaser intro text for guests ?>
		<?php elseif ($params->get('show_noauth') == true and  $user->get('guest') ) : ?>
			<?php echo $this->item->introtext; ?>
			<?php //Optional link to let them register to see the whole article. ?>
			<?php if ($params->get('show_readmore') && $this->item->fulltext != null) :
				$link1 = JRoute::_('index.php?option=com_users&view=login');
				$link = new JURI($link1);?>
				<p class="readmore">
				<a href="<?php echo $link; ?>">
				<?php $attribs = json_decode($this->item->attribs);  ?>
				<?php
				if ($attribs->alternative_readmore == null) :
					echo JText::_('COM_CONTENT_REGISTER_TO_READ_MORE');
				elseif ($readmore = $this->item->alternative_readmore) :
					echo $readmore;
					if ($params->get('show_readmore_title', 0) != 0) :
					    echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
					endif;
				elseif ($params->get('show_readmore_title', 0) == 0) :
					echo JText::sprintf('COM_CONTENT_READ_MORE_TITLE');
				else :
					echo JText::_('COM_CONTENT_READ_MORE');
					echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
				endif; ?></a>
				</p>
			<?php endif; ?>
		<?php endif; ?>
		<?php echo $this->item->event->afterDisplayContent; ?>
	</div>
</div>
	
<div class="goud">
	<?php echo $renderer->render($position, $options, null); ?>
</div>	