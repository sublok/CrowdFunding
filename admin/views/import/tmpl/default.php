<?php
/**
 * @package      CrowdFunding
 * @subpackage   Components
 * @author       Todor Iliev
 * @copyright    Copyright (C) 2010 Todor Iliev <todor@itprism.com>. All rights reserved.
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * CrowdFunding is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

// No direct access
defined('_JEXEC') or die;
?>
<div class="row-fluid">
    <div class="span6 form-horizontal">
        <form action="<?php echo JRoute::_('index.php?option=com_crowdfunding'); ?>" method="post" name="adminForm" id="adminForm" class="form-validate" enctype="multipart/form-data">
        
            <fieldset>
                <legend><?php echo $this->legend; ?></legend>
                
                <div class="control-group">
                    <div class="control-label"><?php echo $this->form->getLabel('data'); ?></div>
    				<div class="controls">
    				
        				<div class="fileupload fileupload-new" data-provides="fileupload">
                        <span class="btn btn-file">
                            <span class="fileupload-new"><?php echo JText::_("COM_CROWDFUNDING_SELECT_FILE");?></span>
                            <span class="fileupload-exists"><?php echo JText::_("COM_CROWDFUNDING_CHANGE");?></span>
                            <?php echo $this->form->getInput('data'); ?>
                        </span>
                        <span class="fileupload-preview"></span>
                        <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                        </div>
    				</div>
                </div>
                
                <?php if(strcmp($this->importType, "states") != 0) {?>
                <div class="control-group">
                    <div class="control-label"><?php echo $this->form->getLabel('reset_id'); ?></div>
    				<div class="controls"><?php echo $this->form->getInput('reset_id'); ?></div>
                </div>
                <?php }?>
                
    		</fieldset>
            
            <input type="hidden" name="task" value="" id="task"/>
            <?php echo JHtml::_('form.token'); ?>
        </form>
    </div>
</div>