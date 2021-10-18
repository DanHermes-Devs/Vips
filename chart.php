<?php
include 'dbconnect.php';
$sql1 = "SELECT COUNT(*) as opcion1 FROM votos_clasicos WHERE opcion = 'Vips Club'";
$result1 = $mysqli->query($sql1);
while($row1=mysqli_fetch_assoc($result1)){$opcion1 = $row1['opcion1'];}

$sql2 = "SELECT COUNT(*) as opcion2 FROM votos_clasicos WHERE opcion = 'Sopa especial Vips'";
$result2 = $mysqli->query($sql2);
while($row2=mysqli_fetch_assoc($result2)){$opcion2 = $row2['opcion2'];}

$sql3 = "SELECT COUNT(*) as opcion3 FROM votos_clasicos WHERE opcion = 'Pepitos Vips de pollo'";
$result3 = $mysqli->query($sql3);
while($row3=mysqli_fetch_assoc($result3)){$opcion3 = $row3['opcion3'];}

$sql4 = "SELECT COUNT(*) as opcion4 FROM votos_clasicos WHERE opcion = 'Caldo Tlalpeño'";
$result4 = $mysqli->query($sql4);
while($row4=mysqli_fetch_assoc($result4)){$opcion4 = $row4['opcion4'];}

$sql5 = "SELECT COUNT(*) as opcion5 FROM votos_clasicos WHERE opcion = 'Tacos dorados de pollo'";
$result5 = $mysqli->query($sql5);
while($row5=mysqli_fetch_assoc($result5)){$opcion5 = $row5['opcion5'];}

$sql6 = "SELECT COUNT(*) as opcion6 FROM votos_clasicos WHERE opcion = 'Enchiladas Suizas'";
$result6 = $mysqli->query($sql6);
while($row6=mysqli_fetch_assoc($result6)){$opcion6 = $row6['opcion6'];}

$sql7 = "SELECT COUNT(*) as opcion7 FROM votos_clasicos WHERE opcion = 'Cheescake con fresas'";
$result7 = $mysqli->query($sql7);
while($row7=mysqli_fetch_assoc($result7)){$opcion7 = $row7['opcion7'];}

$sql8 = "SELECT COUNT(*) as opcion8 FROM votos_clasicos WHERE opcion = 'Vips clásica con queso'";
$result8 = $mysqli->query($sql8);
while($row8=mysqli_fetch_assoc($result8)){$opcion8 = $row8['opcion8'];}

$sql9 = "SELECT COUNT(*) as opcion9 FROM votos_clasicos WHERE opcion = 'Crepas de cajeta'";
$result9 = $mysqli->query($sql9);
while($row9=mysqli_fetch_assoc($result9)){$opcion9 = $row9['opcion9'];}

$sql10 = "SELECT COUNT(*) as opcion10 FROM votos_clasicos WHERE opcion = 'Enchiladas de mole'";
$result10 = $mysqli->query($sql10);
while($row10=mysqli_fetch_assoc($result10)){$opcion10 = $row10['opcion10'];}

$sql11 = "SELECT COUNT(*) as opcion11 FROM votos_clasicos WHERE opcion = 'Molletes tradicionales'";
$result11 = $mysqli->query($sql11);
while($row11=mysqli_fetch_assoc($result11)){$opcion11 = $row11['opcion11'];}

?>



<canvas id="myChart" width="500" height="500" style="text-align: center; margin: 0 auto;"></canvas>

<script>
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ['Vips Club', 'Sopa especial Vips', 'Pepitos Vips de pollo', 'Caldo Tlalpeño', 'Tacos dorados de pollo', 'Enchiladas Suizas', 'Cheescake con fresas', 'Vips clásica con queso', 'Crepas de cajeta', 'Enchiladas de mole', 'Molletes Tradicionales'],
    datasets: [{
      label: '# de votos',
      data: [<?php echo $opcion1;?>, <?php echo $opcion2;?>, <?php echo $opcion3;?>, <?php echo $opcion4;?>, <?php echo $opcion5;?>, <?php echo $opcion6;?>, <?php echo $opcion7;?>, <?php echo $opcion8;?>, <?php echo $opcion9;?>, <?php echo $opcion10;?>, <?php echo $opcion11;?>],
      backgroundColor: [
        '#763295',
        '#297A6A',
        '#24246B',
        '#A46537',
		    '#C8DF9F',
        '#C44F8E',
        '#0A87A4',
        '#B6B83D',
        '#E6B3C9',
        '#79BED2',
		'#00b7a4'
      ],
      borderColor: [
        '#763295',
        '#297A6A',
        '#24246B',
        '#A46537',
		'#C8DF9F',
        '#C44F8E',
        '#0A87A4',
        '#B6B83D',
        '#E6B3C9',
        '#79BED2',
		'#00b7a4'
      ],
      borderWidth: 0
    }]
  },
  options: {
   	cutoutPercentage: 40,
    responsive: false,
    legend: {
        display: false
    },

  }
});
</script>
