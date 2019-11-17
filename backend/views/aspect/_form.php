<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yiichina\icheck\ICheck;
use yiichina\icons\Icon;
use yiichina\select2\Select2;

/* @var $this yii\web\View */
/* @var $model common\models\Node */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="node-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type')->widget(ICheck::className(), ['type' => ICheck::TYPE_RADIO_LIST, 'items' => $model->typeList]) ?>

    <?= $form->field($model, 'node_id')->widget(Select2::className(), ['items' => $model->nodeList, 'clientOptions' => ['width' => '100%']]) ?>

    <?= $form->field($model, 'template_id')->widget(Select2::className(), ['items' => $model->templateList, 'clientOptions' => ['width' => '100%']]) ?>

    <?= $form->field($model, 'key')->textInput() ?>

    <?= $form->field($model, 'description')->textInput() ?>

    <?= $form->field($model, 'status')->widget(ICheck::className(), ['type' => ICheck::TYPE_RADIO_LIST, 'items' => $model->statusList]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Icon::show('plus') . Yii::t('app', 'Create') : Icon::show('edit') . Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success btn-flat' : 'btn btn-primary btn-flat']) ?>
        <?= Html::a(Icon::show('cog') . Yii::t('app', '配置模板'), ['template/update', 'id' => $model->template_id], ['class' => 'btn btn-primary btn-flat']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
