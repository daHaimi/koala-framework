<?php
class Kwc_Menu_ClearCache_MenuMain_Component extends Kwc_Menu_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['level'] = 'main';
        return $ret;
    }
}