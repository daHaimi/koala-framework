<?php
class Kwc_Shop_Cart_Checkout_Payment_None_Component extends Kwc_Shop_Cart_Checkout_Payment_Abstract_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlKwfStatic('None');
        return $ret;
    }

}
