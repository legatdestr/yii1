<?php

class EmSearchField extends CWidget {

    protected $assetsDirName = 'assets';

    /**
     * Initializes the widget.
     */
    public function init() {
        
    }

    /**
     * Runs the widget.
     */
    public function run() {
        // publish assets
        $cs = Yii::app()->getClientScript();
        $publishedAssetsDir = Yii::app()->assetManager->publish(
                Yii::getPathOfAlias('ext.em.widgets.' . $this->assetsDirName)
        );

        $cs->registerCssFile($publishedAssetsDir . '/css/emSearchField.css');
        
        $this->render('emSearchField');
    }

}
