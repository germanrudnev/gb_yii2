<?php
/* @var $this yii\web\View */
$this->title = 'Создать задачу';
?>
<h1 style="display:none;">Создать задачу</h1>

<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
?>
<?php $form = ActiveForm::begin();
$form->action = Url::to(['task/submit']);?>
<?= $form->field($model, 'taskTitle')->textInput(['class' => 'task-add__heading', 'placeholder' => 'Название задачи'])->label('') ?>
<?= $form->field($model, 'taskStartDate')->textInput(['type' => 'date', 'placeholder' => 'Дата и время начала'])->label('Дата и время начала')?>
<?= $form->field($model, 'taskEndDate')->textInput(['type' => 'date', 'placeholder' => 'Дата и время конца'])->label('Дата и время конца')?>
<?= $form->field($model, 'taskDesc')->textarea()->label('Описание задачи') ?>
<?= $form->field($model, 'taskRepeats')->checkboxList(['yes' => 'Задача повторяется'])->label('')?>
<?= $form->field($model, 'taskBlocksADay')->checkboxList(['yes' => 'Задача на весь день, других нет'])->label('')?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end() ?>