<?php
use \Yii;
use \yii\widgets\ActiveForm;

$this->title = "写博客";
$this->params['breadcrumbs'][] = ['label'=>'文章', 'url'=>['post/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-lg-9">
        <div class="panel-title box-title">
            <span>创建文章</span>
        </div>
        <div class="panel-body">
            <?php $form = ActiveForm::begin() ?>
            <?= $form->field($model, 'title')->textInput(['maxlength'=>true]);?>
            <?= $form->field($model, 'cat_id')->dropDownList($cat); ?>
            <?= $form->field($model,'label_img')->widget('common\widgets\file_upload\FileUpload',[
                'config'=>[
                ]
            ]); ?>
            <?= $form->field($model, 'content')->widget('common\widgets\ueditor\Ueditor',[
                'options'=>[
                    'initialFrameWidth' => 500,
                    'initialFrameWidth' => 800,
                    'toolbars' => [],
                ]
            ]) ?>
            <?= $form->field($model, 'tags')->widget('common\widgets\tags\TagWidget') ?>
            <div class="form-group">
                <?= \yii\bootstrap\Html::submitButton('发布', ['class'=>'btn btn-success']) ?>
            </div>
            <?php ActiveForm::end() ?>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="panel-title box-title">
            <span>注意事项</span>
        </div>
        <div class="panel-body">
            <p>1.adc</p>
            <p>2.dce</p>
        </div>
    </div>
</div>