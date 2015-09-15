<?php
namespace mgcode\filters;

use Yii;
use yii\base\ActionFilter;

/**
 * This filter disables csrf validation. Mostly used for feedback actions (e.g. when receiving response from payment service).
 * To use DisableCsrfValidationFilter, declare it in the behaviors() method of your controller class.
 * Use `only` and `except` properties to include/exclude actions from filter.
 * ~~~
 * public function behaviors()
 * {
 *     return [
 *         'disableCsrf' => [
 *             'class' => \mgcode\filters\DisableCsrfValidationFilter::className(),
 *             'only' => ['feedback'],
 *         ],
 *     ];
 * }
 * ~~~
 */
class DisableCsrfValidationFilter extends ActionFilter
{
    /**
     * @param \yii\base\InlineAction $action
     * @return boolean whether the action should continue to be executed.
     */
    public function beforeAction($action)
    {
        $this->owner->enableCsrfValidation = false;
        return true;
    }
}
