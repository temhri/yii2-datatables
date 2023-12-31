<?php

namespace temhri\datatables;

use yii\web\AssetBundle;

/**
 * Asset for the DataTables JQuery plugin
 * @author Anil Chaudhari <imanilchaudhari@gmail.com>
 */
class DataTablesAsset extends AssetBundle
{
    public $sourcePath = '@bower/datatables';

    public $css = [
        "media/css/jquery.dataTables.css",
    ];

    public $js = [
        "media/js/jquery.dataTables.js",
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
