<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_Adminhtml
 * @copyright   Copyright (c) 2012 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Used in creating options for Yes|No config value selection
 *
 */
class Mage_Adminhtml_Model_System_Config_Source_DuplicateWindow
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
	    array('value' => 0, 'label'=>Mage::helper('adminhtml')->__('Off')),
	    array('value' => 120, 'label'=>Mage::helper('adminhtml')->__('2 minutes')),
            array('value' => 300, 'label'=>Mage::helper('adminhtml')->__('5 minutes')),
            array('value' => 600, 'label'=>Mage::helper('adminhtml')->__('10 minutes')),
            array('value' => 1200, 'label'=>Mage::helper('adminhtml')->__('20 minutes')),
	    array('value' => 1800, 'label'=>Mage::helper('adminhtml')->__('30 minutes')),
            array('value' => 2700, 'label'=>Mage::helper('adminhtml')->__('45 minutes')),
	    array('value' => 3600, 'label'=>Mage::helper('adminhtml')->__('1 hour')), 
	    array('value' => 7200, 'label'=>Mage::helper('adminhtml')->__('2 hours')),
            array('value' => 14400, 'label'=>Mage::helper('adminhtml')->__('4 hours')),
	    array('value' => 21600, 'label'=>Mage::helper('adminhtml')->__('6 hours')),
            array('value' => 28800, 'label'=>Mage::helper('adminhtml')->__('8 hours')),
	    array('value' => 43200, 'label'=>Mage::helper('adminhtml')->__('12 hours')),
            array('value' => 86400, 'label'=>Mage::helper('adminhtml')->__('24 hours')),
	    array('value' => 129600, 'label'=>Mage::helper('adminhtml')->__('36 hours')),
            array('value' => 172800, 'label'=>Mage::helper('adminhtml')->__('48 hours')),    
        );
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return array(
	    0 => Mage::helper('adminhtml')->__('Off'),
	    120 => Mage::helper('adminhtml')->__('2 minutes'),
	    300 => Mage::helper('adminhtml')->__('5 minutes'),
            600 => Mage::helper('adminhtml')->__('10 minutes'),
            1200 => Mage::helper('adminhtml')->__('20 minutes'),
	    1800 => Mage::helper('adminhtml')->__('30 minutes'),
	    2700 => Mage::helper('adminhtml')->__('45 minutes'),
            3600 => Mage::helper('adminhtml')->__('1 hour'),
	    7200 => Mage::helper('adminhtml')->__('2 hours'),
            14400 => Mage::helper('adminhtml')->__('4 hours'),
	    21600 => Mage::helper('adminhtml')->__('6 hours'),
            28800 => Mage::helper('adminhtml')->__('8 hours'),
	    43200 => Mage::helper('adminhtml')->__('12 hours'),
            86400 => Mage::helper('adminhtml')->__('24 hours'),
	    129600 => Mage::helper('adminhtml')->__('36 hours'),
            172800 => Mage::helper('adminhtml')->__('48 hours'),
        );
    }

}
