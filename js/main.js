$(document).ready(function (){

    $.ajax({
        url: 'server.php',
        method: 'GET',
        success: function (data) {
            // console.log(data.data);
            var mese = ['gennaio','febbraio','marzo','aprile','maggio','giugno','luglio','agosto','settembre','ottobre','novembre','dicembre'];
            var ctx = $('#line-Chart');
            var chart = new Chart(ctx, {
                type: data.type,
                data: {
                    labels: mese,
                    datasets: [{
                        label: 'Andamento vendite annuale',
                        backgroundColor: 'rgb(255, 99, 132)',
                        borderColor: 'rgb(255, 99, 132)',
                        data: data.data
                    }]
                },
            });
        },
        error: function(){
            alert('errore di comunicazione')
        }

    });

    $.ajax({
        url: 'serversecond.php',
        method: 'GET',
        success: function (data) {
            var array = data.data;
            var nomi=[];
            var dati=[];
            for (var key in array) {
                // console.log(key);
                // console.log(array[key]);
                nomi.push(key);
                dati.push(array[key]);
            }
            var ctx = $('#pie-Chart');
            var chart = new Chart(ctx, {
                type: data.type,
                data: {
                    labels: nomi,
                    datasets: [{
                    label: 'Fatturato per venditore',
                    backgroundColor: ['red', 'blue', 'yellow', 'green'],
                    borderColor: 'white',
                    data: dati
                    }]
                },
            });
        },
        error: function(){
            alert('errore di comunicazione')
        }

    });
        $.ajax({
            url: 'thirdserver.php',
            method: 'GET',
            success: function (data) {
                console.log(data.data);
                var mese = ['gennaio','febbraio','marzo','aprile','maggio','giugno','luglio','agosto','settembre','ottobre','novembre','dicembre'];
                var dati = data.data;
                var ctx = $('#thirdline-Chart');
                var chart = new Chart(ctx, {
                    type: data.type,
                    data: {
                        labels: mese,
                        datasets: [{
                            label: 'Team 1',
                            borderColor: 'green',
                            data: dati.Team1
                        },
                        {
                            label: 'Team 2',
                            borderColor: 'blue',
                            data: dati.Team2
                        },
                        {
                            label: 'Team 3',
                            borderColor: 'red',
                            data: dati.Team3
                        }]
                    },
                });
            },
            error: function(){
                alert('errore di comunicazione')
            }

        });

});
