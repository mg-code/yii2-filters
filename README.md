# AjaxFilter
This filter throws an exception (BadRequestHttpException) if the applied action is receiving a non-AJAX request.

Usage
-----

To use AjaxFilter, declare it in the `behaviors()` method of your controller class.

Use `only` and `except` properties to include/exclude actions from filter.

```php
public function behaviors()
{
  return [
      'verbs' => [
          'class' => \mgcode\filters\AjaxFilter::className(),
          'only' => ['ajaxValidate'],
      ],
  ];
}
```