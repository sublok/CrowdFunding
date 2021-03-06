<?php
/**
 * @package      CrowdFunding
 * @subpackage   Modules
 * @author       Todor Iliev
 * @copyright    Copyright (C) 2010 Todor Iliev <todor@itprism.com>. All rights reserved.
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * CrowdFunding is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
 
// no direct access
defined('_JEXEC') or die; 
?>
<div class="cfinfo<?php echo $moduleclassSfx; ?>">
    <div class="cfinfo-raised">
    	<?php echo $currency->getAmountString($project->funded); ?>
    </div>
    <div class="cfinfo-raised-of">
        <?php echo JText::sprintf("MOD_CROWDFUNDINGINFO_RAISED_OF", $fundedAmount);?>
	</div>
	<div class="progress progress-success">
   		<div class="bar" style="width: <?php echo JHtml::_("crowdfunding.funded", $project->getFundedPercents());?>%"></div>
    </div>
	<div class="cfinfo-days-raised">
    	<div class="cfinfo-days-wrapper">
    		<div class="cfinfo-days">
        		<img src="media/com_crowdfunding/images/clock.png" width="25" height="25" />
        		<?php echo $project->getDaysLeft();?>
    		</div>
    		<div class="tac fzmfwbu"><?php echo JText::_("MOD_CROWDFUNDINGINFO_DAYS_LEFT");?></div>
		</div>
		<div class="cfinfo-percent-wrapper">
			<div class="cfinfo-percent">
    			<img src="media/com_crowdfunding/images/piggy-bank.png" width="27" height="20" />
        		<?php echo $project->getFundedPercents();?>%
    		</div>
    		<div class="tac fzmfwbu pt5"><?php echo JText::_("MOD_CROWDFUNDINGINFO_FUNDED");?></div>
		</div>
	</div>
	<div class="clearfix"></div>
    <div class="cfinfo-funding-type">
        <?php echo JText::_("MOD_CROWDFUNDINGINFO_FUNDING_TYPE_".JString::strtoupper($project->funding_type)); ?>
    </div>
    
	<?php if(!$project->getDaysLeft()) {?>
	<div class="well">
		<div class="cf-fund-result-state pull-center"><?php echo JHtml::_("crowdfunding.resultState", $project->getFundedPercents(), $project->funding_type);?></div>
		<div class="cf-frss pull-center"><?php echo JHtml::_("crowdfunding.resultStateText", $project->getFundedPercents(), $project->funding_type);?></div>
	</div>
	<?php } else {?>
	<div class="cfinfo-funding-action">
		<a class="btn btn-large btn-block" href="<?php echo JRoute::_(CrowdFundingHelperRoute::getBackingRoute($project->getSlug(), $project->getCatSlug()));?>"><?php echo JText::_("MOD_CROWDFUNDINGINFO_INVEST_NOW"); ?></a>
	</div>
	<?php }?>
    
    <div class="cfinfo-funding-type-info">
    	<?php
    	
    	$endDate = JHtml::_('crowdfunding.date', $project->funding_end, JText::_('DATE_FORMAT_LC3'));
    	
    	if($project->funding_type == "FIXED") {
    	    echo JText::sprintf("MOD_CROWDFUNDINGINFO_FUNDING_TYPE_INFO_FIXED", $fundedAmount, $endDate);
    	} else {
    	    echo JText::sprintf("MOD_CROWDFUNDINGINFO_FUNDING_TYPE_INFO_FLEXIBLE", $endDate);
    	}
    	?>
    </div>
</div>