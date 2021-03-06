<script language="javascript" type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/flot/jquery.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/flot/jquery.flot.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/flot/jquery.flot.categories.js"></script>

<style type="text/css">

    .demo-container {
        position: relative;
        height: 400px;
    }

    #placeholder {
        width: 550px;
        height: 400px;
    }

    .demo-container {
        box-sizing: border-box;
        width: 850px;
        height: 450px;
        padding: 20px 15px 15px 15px;
        margin: 15px auto 30px auto;
        border: 1px solid #ddd;
        background: #fff;
        background: linear-gradient(#f6f6f6 0, #fff 50px);
        background: -o-linear-gradient(#f6f6f6 0, #fff 50px);
        background: -ms-linear-gradient(#f6f6f6 0, #fff 50px);
        background: -moz-linear-gradient(#f6f6f6 0, #fff 50px);
        background: -webkit-linear-gradient(#f6f6f6 0, #fff 50px);
        box-shadow: 0 3px 10px rgba(0,0,0,0.15);
        -o-box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        -ms-box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        -moz-box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        -webkit-box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }

    .demo-placeholder {
        width: 100%;
        height: 100%;
        font-size: 14px;
        line-height: 1.2em;
    }

    .legend table {
        border-spacing: 5px;
    }

    #menu {
        position: absolute;
        top: 20px;
        left: 625px;
        bottom: 20px;
        right: 20px;
        width: 200px;
    }

    #menu button {
        display: inline-block;
        width: 200px;
        padding: 3px 0 2px 0;
        margin-bottom: 4px;
        background: #eee;
        border: 1px solid #999;
        border-radius: 2px;
        font-size: 16px;
        -o-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
        -ms-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
        -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
        box-shadow: 0 1px 2px rgba(0,0,0,0.15);
        cursor: pointer;
    }

    #description {
        margin: 15px 10px 20px 10px;
    }

    #code {
        display: block;
        width: 870px;
        padding: 15px;
        margin: 10px auto;
        border: 1px dashed #999;
        background-color: #f8f8f8;
        font-size: 16px;
        line-height: 20px;
        color: #666;
    }

    ul {
        font-size: 10pt;
    }

    ul li {
        margin-bottom: 0.5em;
    }

    ul.options li {
        list-style: none;
        margin-bottom: 1em;
    }

    ul li i {
        color: #999;
    }

</style>


<script type="text/javascript">


    $(function() {

        var data = [ <?php echo $dataGraf;?> ];

        $.plot("#placeholder", [ data ], {
            series: {
                bars: {
                    show: true,
                    barWidth: 0.6,
                    align: "center"
                }
            },
            xaxis: {
                mode: "categories",
                tickLength: 0
            }
        });
    });



</script>



<H1>Индекс загрязнения атмосферы</H1>

<?php
/* @var $this PostiController */
/* @var $model Posti */

$this->breadcrumbs=array(
	'График'=>array('index'),
	$model->id,
);

/*$this->menu=array(
	array('label'=>'Список постов', 'url'=>array('index')),
	array('label'=>'Добавить пост', 'url'=>array('create')),
	array('label'=>'Редактировать пост', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить пост', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление постами', 'url'=>array('admin')),
);*/
?>

<div id="content">
    <div class="demo-container">
        <div id="placeholder" class="demo-placeholder"></div>
    </div>