<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div id="submenu">
    <?php
    if ($this->uniqueId=='user')
    {
        $this->widget('zii.widgets.CMenu',array(
            'items'=>array(
                array('label'=>'Информация', 'url'=>array('user/index')),
                array('label'=>'Пароль', 'url'=>array('user/changepass')),
                array('label'=>'Contact', 'url'=>array('site/contact'))
            ),
        ));
    }
    else if ($this->uniqueId=='account')
    {
        $this->widget('zii.widgets.CMenu',array(
            'items'=>array(
                array('label'=>'Информация', 'url'=>array('account/index')),
                array('label'=>'Регистрация проекта', 'url'=>array('account/register')),
                array('label'=>'Contact', 'url'=>array('account/contact'))
            ),
        ));
    }
    ?>
</div>
<div id="content">
	<?php echo $content; ?>
</div><!-- content -->
<?php $this->endContent(); ?>