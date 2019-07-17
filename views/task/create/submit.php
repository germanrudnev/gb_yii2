<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use app\models\Task;
?>

<h1><?=$model->taskTitle; ?></h1>

<?php if($model->taskStartDate == $model->taskEndDate): ?>
    <p>Событие на <?=$model->taskStartDate; ?></p>
<?php else: ?>
    <p>Событие c <?=$model->taskStartDate; ?> по <?=$model->taskEndDate; ?></p>
<?php endif; ?>

<h3><?=$model->getAttributeLabel('taskDesc') ?></h3>
<div><?=$model->taskDesc ?></div>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
