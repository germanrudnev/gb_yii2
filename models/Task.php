
<?php

namespace app\models;

use yii\base\Model;

/**
* Activity класс
* 
* Отражает сущность хранимого в календаре события
*/
class Task extends Model
{
	public $taskTitle; /*Название (string) */
	public $taskStartDate; /*Начало события (таймстемп, int)*/
	public $taskEndDate; /*Конец события (таймстемп, int)*/
    public $taskAuthorID; 	/*ID автора, создавшего событие (int)*/
	public $taskDesc;  /*Описание события (string)*/
    public $taskRepeats;  /*Событие повторяется (boolean)*/
    public $taskBlocksADay;  /* Событие на весь день, других нет */

    public function attributeLabels()
    {
        return [
            'taskTitle' => 'Событие',
            'taskStartDate' => 'Начнется',
            'taskEndDate' => 'Завершится',
            'taskAuthorID' => 'Автор (ID)',
            'taskDesc' => 'Описание',
            'taskRepeats' => 'Событие повторяется',
            'taskBlocksADay' => 'На весь день'
        ];
    }
}
