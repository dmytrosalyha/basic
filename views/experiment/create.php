<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Experiment */

$this->title = 'Новый эксперимент';
$this->params['breadcrumbs'][] = ['label' => 'Все эксперименты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="experiment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>