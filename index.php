<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>php-adv-charts</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <link rel="stylesheet" href="css/master.css">
    </head>
    <body>



        <?php include 'database.php' ?>
        <?php if ($controllo == $graphs['fatturato']['access']) { ?>
            <div class="grafico">
                <canvas id="line-Chart"></canvas>
            </div>
        <?php } else if ($controllo == $graphs['fatturato_by_agent']['access']) { ?>
            <div class="grafico">
                <canvas id="line-Chart"></canvas>
            </div>
            <div class="grafico pie">
                <canvas id="pie-Chart"></canvas>
            </div>
        <?php } else if ($controllo == $graphs['team_efficiency']['access']) { ?>
            <div class="grafico">
                <canvas id="line-Chart"></canvas>
            </div>
            <div class="grafico pie">
                <canvas id="pie-Chart"></canvas>
            </div>
            <div class="grafico">
                <canvas id="thirdline-Chart"></canvas>
            </div>
        <?php }?>



        <script src="js/main.js" charset="utf-8"></script>
    </body>
</html>
