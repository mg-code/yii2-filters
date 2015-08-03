<?php
namespace mgcode\filters;

use Yii;
use yii\base\ActionFilter;
use yii\web\BadRequestHttpException;

/**
 * This filter throws an exception (BadRequestHttpException) if the applied action is receiving a non-AJAX request.
 * To use AjaxFilter, declare it in the behaviors() method of your controller class.
 * Use `only` and `except` properties to include/exclude actions from filter.
 * ~~~
 * public function behaviors()
 * {
 *     return [
 *         'onlyAjax' => [
 *             'class' => \mgcode\filters\AjaxFilter::className(),
 *             'only' => ['ajaxValidate'],
 *         ],
 *     ];
 * }
 */
class AjaxFilter extends ActionFilter
{
    /**
     * @param \yii\base\InlineAction $action
     * @return boolean whether the action should continue to be executed.
     * @throws BadRequestHttpException when the request method is not allowed.
     */
    public function beforeAction($action)
    {
        if (!Yii::$app->getRequest()->getIsAjax()) {
            throw new BadRequestHttpException();
        }
        return true;
    }
}
