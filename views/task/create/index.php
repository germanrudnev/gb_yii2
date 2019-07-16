<?php
/* @var $this yii\web\View */
?>
<h1>Создать форму</h1>

<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin() ?>
<?= $form->field($model, 'userName')->label('Ваше имя') ?>
<?= $form->field($model, 'email')->label('Ваш email') ?>
<?= $form->field($model, 'messageText')->textarea()->label('Что Вы хотите нам сообщить?') ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end() ?>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>