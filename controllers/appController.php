<?php

require_once 'Controller.php';
require_once 'models/Currency.php';

class appController extends Controller
{
    protected $content;

    public function actionIndex(){
        $date = isset($_GET['date']) && !empty($_GET['date']) ? date('d/m/Y', strtotime($_GET['date'])) : date('d/m/Y');
        $model = new Currency($date);
        $yesterday = date('d/m/Y', strtotime(str_replace('/', '-', $date)) - 60 * 60 * 24);
        $old_model = new Currency($yesterday);
        $this->content = $this->template('index', [
            'date' => $date,
            'usd_rate' => $model->USD,
            'eur_rate' => $model->EUR,
            'usd_trend' => $model->USD > $old_model->USD,
            'eur_trend' => $model->EUR > $old_model->EUR,
        ]);
        echo $this->render();
    }


    protected function render(){
        return $this->template('layout/main', ['content' => $this->content]);
    }
}