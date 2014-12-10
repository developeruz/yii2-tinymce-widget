InputWidget для текстовых полей на основе tinyMce
===================
Установка:
```bash
$ php composer.phar require developeruz/yii2-tinymce-widget "*"
```
###Простое использование###
```php
use developeruz\tinyMce\TinyMce;

    echo TinyMce::widget( [
            'name' => 'content',
            'options' => ['rows' => 6], // параметры передаваемые в Html::textarea
            'clientOptions' => [        // параметры передаваемые в tinymce.init()
                'language' => 'ru',
            ],
        ]);
    ?>
```

###Использование c ActiveForm###
```php
use developeruz\tinyMce\TinyMce;

    echo $form->field($model, 'content')->widget(TinyMce::className(), [
        'options' => ['rows' => 6], // параметры передаваемые в Html::textarea
        'clientOptions' => [        // параметры передаваемые в tinymce.init()
            'language' => 'ru',
        ],
    ]);
```
