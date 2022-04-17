<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\Supplier;


/* @var $this yii\web\View */
/* @var $searchModel app\models\SupplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Suppliers';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJs($this->render('js/export.js'));

?>
<style>
    .layui-select-title{
        position: relative;
    }
    .layui-form-item{
        position: absolute;
        top:200px;
        left: 700px;
        padding: 10px;
        background: white;
        margin-top: -10px;
        z-index: 999;
        display: none;
        border: 1px solid #ccc;
    }
    .layui-filter-panel{
        max-height:220px;
        overflow-y: auto;
    }
    .layui-filter-panel::-webkit-scrollbar {
        width: 6px;
        height: 6px;
    }
    .hide {
        display: none;
    }
</style>
<form class="layui-form" action="" onsubmit="return false">
    <div class="layui-form-item hide">
        <input type="hidden" id="url" value="<?php echo $url?>">
        <label class="layui-form-label test">表头</label>
        <div class="layui-col-xs5">
            <div class="layui-select-title">
                <div class="option-checkbox-container">
                    <ul class="layui-filter-panel">
                        <?php foreach ($header as $k=>$v): ?>
                                <input type="checkbox" name="<?php echo $k?>" title="<?php echo $v?>" checked lay-skin="primary" >
                                <span class="layui-unselect layui-form-checkbox layui-form-checked" lay-skin="primary">
                                    <span><?php echo $v?></span>
                                    <i class="layui-icon layui-icon-ok"></i>
                                </span>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
        <div >
            <button style="margin-left:10px;" class="layui-btn pear-btn-primary btn btn-success" id="export">导出</button>
        </div>
    </div>
</form>
<div class="supplier-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Supplier', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::button('Download Suppliers', ['class' => 'btn btn-success', 'id' => 'download']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\CheckboxColumn'],
            'id',
            'name',
            'code',
            't_status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Supplier $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>

