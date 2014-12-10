<?php
namespace developeruz\tinyMce;

use yii\web\AssetBundle;

class TinyMceAsset extends AssetBundle
{
    public $sourcePath = '@vendor/tinymce/tinymce';

    public $js = ['tinymce.min.js'];
} 