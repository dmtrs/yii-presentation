<?php
class User extends CActiveRecord
{
    ...
    public function getUrl()
    {
        return Yii::app()->urlManager->createUrl('user/view',
            array('id'=>$this->id)
        );
    }
    ...
}
