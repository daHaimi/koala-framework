<? if ($this->data->hasContent()) { ?>
    <div class="<?=$this->rootElementClass?> kwcAbstractFlash" style="height: <?=$this->flash['data']['height']?>px">
        <div class="flashWrapper"><?=$this->component($this->placeholder)?></div>
        <input type="hidden" class="flashData" value="<?= htmlspecialchars(Zend_Json::encode($this->flash)) ?>" />
    </div>
<? } ?>