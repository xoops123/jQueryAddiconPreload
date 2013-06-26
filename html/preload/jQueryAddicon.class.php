<?php
/**
 * @file jQueryAddicon.class.php
 * @package For legacy Cube Legacy 2.2
 * @version $Id: jQueryAddicon.class.php ver0.01 2013/6/25  00:00:00 marine  $
 */

if (!defined('XOOPS_ROOT_PATH')) exit();

class jQueryAddicon extends XCube_ActionFilter
{
	public function preBlockFilter()
	{
		$this->mRoot->mDelegateManager->add('Site.JQuery.AddFunction',array(&$this, 'addScript'));
	}

	public function addScript(&$jQuery)
	{
		$jQuery->addLibrary('/common/add_icon/add_icon.js', true);
		$jQuery->addStylesheet('/common/add_icon/add_icon.css', true);
	   	$jQuery->addScript('
				jQuery(document).ready(function() {
					jQuery.fn.addIcon();
				 });
			');
	}
//class END
}
?>
