<?php

use yii\helpers\Html;
use backend\widgets\LayForm;

/* @var $this yii\web\View */
/* @var $model common\models\Printer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="printer-form  layform-block">

    <?php $form = LayForm::begin(); ?>

    <?= $form->field($model, 'store_id')->lyselectList($stores)?>

    <?= $form->field($model, 'title')->lytextInput() ?>

    <?= $form->field($model, 'machine_code')->lytextInput() ?>

    <?= $form->field($model, 'actions')->lycheckboxList(['qrcode'=>'排号打印','dishes'=>'菜单打印']) ?>

    <?= $form->field($model, 'isuse')->lyswitch([],'是|否') ?>

    <?= $form->field($model, 'created_at')->lyhidden() ?>

    <?= $form->field($model, 'updated_at')->lyhidden() ?>


    <?= $form->field($model, 'ownerid')->lyhidden() ?>

    <?= $form->field($model, '')->lybuttons() ?>

    <?php LayForm::end(); ?>

</div>