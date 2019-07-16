
<?php

namespace app\models;

use yii\base\Model;

/**
* Activity класс
* 
* Отражает сущность хранимого в календаре события
*/
class Day extends Model
{
	public $dayDate; /* Дата (таймстемп, int) */
	public $dayIsAWeekday; /* Будний день (буль)*/
	public $dayEvents; /* Привязанные события */

    public function attributeLabels()
    {
        return [
            'dayDate' => 'День',
            'dayIsAWeekday' => 'Будний',
            'dayEvents' => 'События',
        ];
    }
}
