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









        <div class="grafico">
            <canvas id="line-Chart"></canvas>
        </div>
        <script>

            $(document).ready(function (){

                <?php include  'database.php';?>
                var dati= <?php echo $database; ?>;
                var mese = <?php echo $mesij; ?>;

                var ctx = $('#line-Chart');
                var chart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: mese,
                        datasets: [{
                            label: 'My First dataset',
                            backgroundColor: 'rgb(255, 99, 132)',
                            borderColor: 'rgb(255, 99, 132)',
                            data: dati
                        }]
                    },
                });
            });
        </script>
    </body>
</html>
