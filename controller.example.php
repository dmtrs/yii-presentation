<?php
class PostController extends CController
{
    public function actionShow($id)
    {
        $model = Post::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'Oops!');
        
        $this->render('view',array(
            'post' => $model
        ));
    }
}
