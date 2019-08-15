<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PlaceLang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="place-lang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'place_id')->textInput() ?>

    <?= $form->field($model, 'locality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lang')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
