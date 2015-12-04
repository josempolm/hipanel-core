<?php

namespace hipanel\actions;

use Yii;

/**
 * Class SmartDeleteAction
 */
class SmartDeleteAction extends SmartPerformAction
{
    public function init()
    {
        parent::init();
        $this->addItems([
            'POST html | POST pjax' => [
                'save'    => true,
                'success' => [
                    'class' => RedirectAction::class,
                    'url'   => 'index'
                ],
            ],
        ], 'first');
    }

    public function loadCollection($data = null)
    {
        // Fixes delete buttons in GridView.
        // When button in being pressed, the system submits POST request which contains
        // POST model ClassSearch and GET attribute with ID
        $data = Yii::$app->request->get() ? [Yii::$app->request->get()] : null;
        parent::loadCollection($data);
    }
}
