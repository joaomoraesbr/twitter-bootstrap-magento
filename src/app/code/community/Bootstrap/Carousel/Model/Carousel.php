<?php
/**
*/ 
class Bootstrap_Carousel_Model_Carousel extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('carousel/carousel');
    }
}