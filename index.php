
<?php
session_start()?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="CSS/calendar2.css" rel="stylesheet"  />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<?php include "php/mainheader.php";
require 'php/month.php';

$month = new Month($_GET['month'] ?? null, $_GET['year'] ?? null);
$firstDay = $month->getStartingDay()->modify('last monday');
?>
<div class="d-flex flex-row align-items-center justify-content-between mx-sm-3">
    <h1> <?= $month->toString();?></h1>
    <div>
        <a href="index.php?month=<?= $month->previousMonth()->month;?>&year=<?= $month->previousMonth()->year;?>" class="btn btn-primary">&lt</a>
        <a href="index.php?month=<?= $month->nextMonth()->month;?>&year=<?= $month->nextMonth()->year;?>"   class="btn btn-primary">&gt</a>
    </div>
</div>


<table class="calendar__table calendar__table--<?= $month->getWeeks();?>weeks">

    <?php for($i =0; $i < $month->getWeeks(); $i++):?>

        <tr>
            <?php foreach ($month->days as $k => $day):
                $date = (clone $firstDay)->modify("+".($k + $i * 7 )."days");
                ?>

                <td class="<?=  $month->isInMonth($date) ? '' : 'calendar_isnot';?>">
                    <?php if($i===0): ?>
                    <div class="calendar_weekdays"> <?= $day?></div>
                    <?php endif;?>
                    <div class="calendar_day"> <?= $date->format('d');?></div>

            </td>
           <?php endforeach;?>
        </tr>

    <?php  endfor;?>

</table>

</body>
</html>