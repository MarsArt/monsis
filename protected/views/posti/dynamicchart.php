<script language="javascript" type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/flot/jquery.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/flot/jquery.flot.js"></script>

<style type="text/css">
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
        position: absolute;
        width: 77;
        height: 120;
    }
    .legend {
        width: 77;
        height: 120;
    }
</style>

<?php
/*
  * Загружаю данные и подставляю их для отображения
  * */

?>
<script type="text/javascript">
    $(function() {

      /*  var datasets = {
            "usa": {
                label: "Азот",
                data: [[1988, 483994], [1989, 479060], [1990, 457648], [1991, 401949], [1992, 424705], [1993, 402375], [1994, 377867], [1995, 357382], [1996, 337946], [1997, 336185], [1998, 328611], [1999, 329421], [2000, 342172], [2001, 344932], [2002, 387303], [2003, 440813], [2004, 480451], [2005, 504638], [2006, 528692]]
            },
            "russia": {
                label: "Хлорид",
                data: [[1988, 218000], [1989, 203000], [1990, 171000], [1992, 42500], [1993, 37600], [1994, 36600], [1995, 21700], [1996, 19200], [1997, 21300], [1998, 13600], [1999, 14000], [2000, 19100], [2001, 21300], [2002, 23600], [2003, 25100], [2004, 26100], [2005, 31100], [2006, 34700]]
            },
            "rrrrrr": {
                label: "UKуууу",
                data: [[1988, 62982], [1989, 62027], [1990, 60696], [1991, 62348], [1992, 58560], [1993, 56393], [1994, 54579], [1995, 50818], [1996, 50554], [1997, 48276], [1998, 47691], [1999, 47529], [2000, 47778], [2001, 48760], [2002, 50949], [2003, 57452], [2004, 60234], [2005, 60076], [2006, 59213]]
            },
            "germany": {
                label: "Germany",
                data: [[1988, 55627], [1989, 55475], [1990, 58464], [1991, 55134], [1992, 52436], [1993, 47139], [1994, 43962], [1995, 43238], [1996, 42395], [1997, 40854], [1998, 40993], [1999, 41822], [2000, 41147], [2001, 40474], [2002, 40604], [2003, 40044], [2004, 38816], [2005, 38060], [2006, 36984]]
            },
            "denmark": {
                label: "Denmark",
                data: [[1988, 3813], [1989, 3719], [1990, 3722], [1991, 3789], [1992, 3720], [1993, 3730], [1994, 3636], [1995, 3598], [1996, 3610], [1997, 3655], [1998, 3695], [1999, 3673], [2000, 3553], [2001, 3774], [2002, 3728], [2003, 3618], [2004, 3638], [2005, 3467], [2006, 3770]]
            },
            "sweden": {
                label: "Sweden",
                data: [[1988, 6402], [1989, 6474], [1990, 6605], [1991, 6209], [1992, 6035], [1993, 6020], [1994, 6000], [1995, 6018], [1996, 3958], [1997, 5780], [1998, 5954], [1999, 6178], [2000, 6411], [2001, 5993], [2002, 5833], [2003, 5791], [2004, 5450], [2005, 5521], [2006, 5271]]
            },
            "norway": {
                label: "Norway",
                data: [[1988, 4382], [1989, 4498], [1990, 4535], [1991, 4398], [1992, 4766], [1993, 4441], [1994, 4670], [1995, 4217], [1996, 4275], [1997, 4203], [1998, 4482], [1999, 4506], [2000, 4358], [2001, 4385], [2002, 5269], [2003, 5066], [2004, 5194], [2005, 4887], [2006, 4891]]
            }
        };*/

        var datasets = {<?php echo $model; ?>};

        // hard-code color indices to prevent them from shifting as
        // countries are turned on/off

        var i = 0;
        $.each(datasets, function(key, val) {
            val.color = i;
            ++i;
        });

        // insert checkboxes
        var choiceContainer = $("#choices");
        $.each(datasets, function(key, val) {
            choiceContainer.append("<br/><input type='checkbox' name='" + key +
                "' checked='checked' id='id" + key + "'></input>" +
                "<label for='id" + key + "'>"
                + val.label + "</label>");
        });

        choiceContainer.find("input").click(plotAccordingToChoices);

        function plotAccordingToChoices() {

            var data = [];

            choiceContainer.find("input:checked").each(function () {
                var key = $(this).attr("name");
                if (key && datasets[key]) {
                    data.push(datasets[key]);
                }
            });
          var plaslag=$("#leg");
            if (data.length > 0) {
                $.plot("#placeholder", data, {
                    yaxis: {
                        min: 0
                    },
                    xaxis: {
                        tickDecimals: 0
                    },
                    legend:{
                        show:false
                    }
                });
            }
        }

        plotAccordingToChoices();

        // Add the Flot version string to the footer

       // $("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
    });

</script>



<H1>Динамика концентрации веществ на посту <?php echo $id; ?></H1>

<?php
/* @var $this PostiController */
/* @var $model Posti */

$this->breadcrumbs=array(
	'График'=>array('posti/dynamiсchart&id=1'),
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
        <div id="placeholder" class="demo-placeholder" style="float:left; width:675px;"></div>
        <p id="choices" style="float:right; width:135px;></p>
    </div>