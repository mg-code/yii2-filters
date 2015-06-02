# yii2-ajax-filter
This filter throws an exception (BadRequestHttpException) if the applied action is receiving a non-AJAX request.

Usage
-----

To use AjaxFilter, declare it in the `behaviors()` method of your controller class.
You can use '*' to stand for all actions.

```php
public function behaviors()
{
  return [
      'verbs' => [
          'class' => \mgcode\ajaxfilter\AjaxFilter::className(),
          'actions' => ['index', 'view', 'update'],
      ],
  ];
}
```