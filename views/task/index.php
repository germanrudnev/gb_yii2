<?php
/* @var $this yii\web\View */

$model = new Task();

return $this->render('view', [
    'model' => $model,
]);
?>

<h1><?=$model->taskTitle; ?></h1>

<?php if($model->taskStartDate == $model->taskEndDate): ?>
    <p>Событие на <?=date("d.m.Y", $model->taskStartDate)?></p>
<?php else: ?>
    <p>Событие c <?=date("d.m.Y", $model->taskStartDate)?> по <?=date("d.m.Y", $model->taskEndDate)?></p>
<?php endif; ?>

<h3><?=$model->getAttributeLabel('taskDesc') ?></h3>
<div><?=$model->taskDesc ?></div>