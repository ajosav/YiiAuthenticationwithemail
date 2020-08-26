<?php
namespace app\controllers;

use yii\web\Controller;

class ArticleController extends Controller {
    
    public $defaultAction = 'hello-world';

    public function actionHelloWorld($id) {
        echo "Hello From Article $id";
    }
}