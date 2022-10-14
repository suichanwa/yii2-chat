<?php

use app\models\Chat;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ChatSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Chats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chat-index">
<h1><?=Html::encode($this->title)?></h1>

<p>
    <?= Html::a('Create Chat', ['create'], ['class' => 'btn btn-success'])?>
</p>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'id',
        'user',
        'teks:ntext',
        'waktu_dibuat',

        ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>


</div>
