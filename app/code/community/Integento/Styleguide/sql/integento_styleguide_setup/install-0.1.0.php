<?php
/**
 * This file is part of Integento_Styleguide for Magento.
 *
 * @license MIT
 * @author Darklg <darklg.blog@gmail.com> <@Darklg>
 * @category Integento
 * @package Integento_Styleguide
 * @copyright Copyright (c) 2016 Integento (http://github.com/InteGento)
 */

try {

    /* @var $conn Varien_Db_Adapter_Interface */
    /* @var $installer Mage_Core_Model_Resource_Setup */
    $installer = $this;
    $installer->startSetup();




    $installer->endSetup();

} catch (Exception $e) {
    // Silence is golden
    //throw $e;
}
