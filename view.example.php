<h2><?php echo $post->title; ?></h2>
<?php
echo CHtml::link($post->author->fullname, $post->author->url);
$this->beginWidget('CMarkDown');
echo $post->content;
$this->endWidget();
