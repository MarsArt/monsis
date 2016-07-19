<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="en"/>

    <!-- blueprint CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css"
          media="screen, projection"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css"
          media="print"/>
    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css"
          media="screen, projection"/>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css"/>
    <!------------------------------- MyAdd---------------------------->
    <script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
    <script src="//api-maps.yandex.ru/2.0/?load=package.standard,package.geoObjects&lang=ru-RU" type="text/javascript"></script>
    <script src="http://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU" type="text/javascript"></script>
    <!------------------------------- EndMyAdd---------------------------->


    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

    <div id="header" style="text-align: center">
        <div id="logo" style="text-align: center"><?php echo CHtml::encode(Yii::app()->name); ?></div>
    </div>
    <!-- header -->

    <div id="mainmenu">
        <?php $this->widget('ext.cssmenu.CssMenu', array(
            'items' => array(
                array('label' => 'Главная', 'url' => array('/main/index')),
                array('label' => 'Посты', 'url' => array('posti/index'),
                    'items' => array(
                        array('label'=>'Атмосферный пост № 1', 'url' => array('posti/view&id=1')),
                        array('label'=>'Атмосферный пост № 2', 'url' => array('posti/view&id=2')),
                        array('label'=>'Атмосферный пост № 3', 'url' => array('posti/view&id=3')),
                    )),
                array('label' => 'Показания на постах', 'url' => array('nablud/index'),
                    'items' => array(
                        array('label'=>'Атмосферный пост № 1', 'url' => array('#')),
                        array('label'=>'Атмосферный пост № 2', 'url' => array('#')),
                        array('label'=>'Атмосферный пост № 3', 'url' => array('#')),
                    )),
                array('label' => 'Динамика концентраций', 'url' => array('posti/dynamiсchart&id=1'),
                    'items' => array(
                        array('label'=>'Атмосферный пост № 1', 'url' => array('posti/dynamiсchart&id=1')),
                        array('label'=>'Атмосферный пост № 2', 'url' => array('posti/dynamiсchart&id=2')),
                        array('label'=>'Атмосферный пост № 3', 'url' => array('posti/dynamiсchart&id=3')),
                    )),
                array('label' => 'Состав', 'url' => array('posti/piechart&id=0'),
                    'items' => array(
                        array('label'=>'Атмосферный пост № 1', 'url' => array('posti/piechart&id=1')),
                        array('label'=>'Атмосферный пост № 2', 'url' => array('posti/piechart&id=2')),
                        array('label'=>'Атмосферный пост № 3', 'url' => array('posti/piechart&id=3')),
                    )),
                array('label' => 'Расчет ИЗА', 'url' => array('main/iza')),
                /*array ('label'=>'Показания на постах', 'url'=>array('/posti/index'),'items'=>array(
                    array('label'=>'Долевые части', 'url'=>array('main', 'view'=>'ciclepart')),
                    array('label'=>'Most Popular', 'url'=>array('product/index', 'tag'=>'popular')),
                 /*   array('label'=>'Посты', 'url'=>array('/site/page', 'view'=>'about')),
                )),
				/*array('label'=>'Авторизация', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'О системе ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)*/
            ),
        )); ?>
    </div>
    <HR>
    <!-- mainmenu -->
    <?php if (isset($this->breadcrumbs)): ?>
        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
		    'homeLink'=> CHtml::link('Главная', array('main/index')),
			'links'=>$this->breadcrumbs,

		)); ?><!-- breadcrumbs -->
    <?php endif?>

    <?php echo $content; ?>

    <div class="clear"></div>

    <div id="footer">
        <!--	Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?> -->
    </div>
    <!-- footer -->

</div>
<!-- page -->

</body>
</html>
