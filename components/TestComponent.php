<?php

namespace App\components;
use yii\base\Component;
class TestComponent extends Component {
    public function __construct($config = []) {
        echo '<pre>';
        var_dump('111');
        echo '</pre>';

        parent::__construct($config);
    }

    public function hello() {
        echo '<pre>';
        var_dump('Hello World from a Yii Component');
        echo '</pre>';
    }
}