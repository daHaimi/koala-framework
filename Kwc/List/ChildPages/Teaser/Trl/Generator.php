<?php
class Kwc_List_ChildPages_Teaser_Trl_Generator extends Kwc_Chained_Trl_Generator
{
    protected function _createData($parentData, $row, $select)
    {
        $ret = parent::_createData($parentData, $row, $select);
        $ret->targetPage = Kwc_Chained_Trl_Component::getChainedByMaster(
            $row->targetPage, $parentData, array('ignoreVisible' => $select->getPart(Kwf_Component_Select::IGNORE_VISIBLE))
        );
        if (!$ret->targetPage) return null;

        return $ret;
    }
}
