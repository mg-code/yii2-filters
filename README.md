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

# DisableCsrfValidationFilter
This filter disables csrf validation. Mostly used for feedback actions (e.g. when receiving response from payment service).

Usage
-----

To use DisableCsrfValidationFilter, declare it in the `behaviors()` method of your controller class.

Use `only` and `except` properties to include/exclude actions from filter.

```php
public function behaviors()
{
    return [
        'verbs' => [
            'class' => \mgcode\filters\DisableCsrfValidationFilter::className(),
           'only' => ['feedback'],
        ],
    ];
}
```