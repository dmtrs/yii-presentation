<h2><?php echo $p->title; ?></h2>
<?php
echo CHtml::link($p->author->fullname, $p->author->url);
$this->beginWidget('CMarkDown');
echo $p->content;
$this->endWidget();
