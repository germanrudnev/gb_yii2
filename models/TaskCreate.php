<?php
namespace app\models;

use yii\base\Model;

class TaskCreate extends Model
{
    public $taskTitle;
    public $taskStartDate;
    public $taskEndDate;
    public $taskDesc;
    public $taskAuthorID;
    public $taskRepeats;
    public $taskBlocksADay;

    public function rules(){
        return [
            [['taskTitle', 'taskStartDate'], 'required'],
            [['taskStartDate', 'taskEndDate'], 'date']
        ];
     }
};


?>