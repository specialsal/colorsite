<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\StoresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '门店列表';
//$this->params['breadcrumbs'][] = ['label'=>'门店管理','url'=>['/restaurant/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stores-index">

    <h1 class="layform-h1"><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('新增门店', ['create'], ['class' => 'layui-btn']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            'phone',
             [
                 'attribute'=>'desc',
                 'filter'=>false
             ],
            [
                'attribute'=>'address',
                'filter'=>false
            ],
             [
                 'attribute'=>'logo',
                 'value'=>function($model){
                    return "<img src='".$model->logo."'/>";
                 },
                 'format'=>'raw',
                 'filter'=>false
             ],
            ['class' => 'yii\grid\ActionColumn'],
            [
                'attribute'=>'',
                'label'=>'更多操作',
                'value'=>function($model){
                    return Html::a('店员管理', ['/restaurant/clerk/index','store_id'=>$model->id], ['class' => 'layui-btn layui-btn-mini']);
                },
                'format'=>'raw'
            ],
        ],
    ]); ?>
</div>