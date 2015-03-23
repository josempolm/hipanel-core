<?php

use frontend\components\grid\CheckboxColumn;
use frontend\components\grid\ClientColumn;
use frontend\components\grid\EditableColumn;
use frontend\components\grid\ResellerColumn;
use frontend\components\grid\SwitchColumn;
use frontend\components\widgets\GridView;
use frontend\modules\domain\widgets\Expires;
use frontend\modules\domain\widgets\State;
use frontend\models\Ref;
use yii\helpers\Html;

$this->title                    = Yii::t('app', 'Tariffs');
$this->params['breadcrumbs'][]  = $this->title;
$this->params['subtitle']       = Yii::$app->request->queryParams ? 'filtered list' : 'full list';

?>

<div class="box box-primary">
<div class="box-body">
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel'  => $searchModel,
    'columns'      => [
        [
            'class'                 => CheckboxColumn::className(),
        ],
        [
            'class'                 => ResellerColumn::className(),
        ],
        [
            'class'                 => ClientColumn::className(),
        ],
        [
            'attribute'             => 'type',
        ],
        [
            'attribute'             => 'name',
            'label'                 => Yii::t('app', 'Name'),
            'format'                => 'html',
            'value'                 => function ($model) {
                return Html::a($model->name, ['view', 'id' => $model->id], ['class' => 'bold']);
            },
        ],
        [
            'class'                 => EditableColumn::className(),
            'attribute'             => 'note',
            'popover'               => Yii::t('app','Make any notes for your convenience'),
            'action'                => ['set-note'],
        ],
        [
            'attribute'             => 'included_in',
            'label'                 => 'Included in profiles',
        ],
        [
            'attribute'             => 'used',
            'filter'                => false,
            'value'                 => function ($model) {
                return $model->used ?: ' ';
            },
        ],
    ],
]) ?>
</div>
</div>