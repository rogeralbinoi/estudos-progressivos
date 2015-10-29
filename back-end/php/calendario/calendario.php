<!DOCTYPE html>
<html>
  <head>
    <title>Calendário php</title>
    <meta charset="urf-8">
    <style>
      h1 {
        font-size: 3em;
        text-align: center;
        color: #795548;
      }
      table {
        padding: .2em;
        margin: 0 auto;
        background: #EFEBE9;
      }
      th {
        padding: 1em 2em;
        background: #795548;
        color: #FFF;
        text-align: center;
      }
      td {
        text-align: center;
        background: #D7CCC8;
        padding: 1em 2em;
      }
    </style>
  </head>
  <body lang="pt-br">
    <?php 
      function linha($semana) {
        echo "<tr>
                <td>{$semana[0]}</td>
                <td>{$semana[1]}</td>
                <td>{$semana[2]}</td>
                <td>{$semana[3]}</td>
                <td>{$semana[4]}</td>
                <td>{$semana[5]}</td>
                <td>{$semana[6]}</td>
              </tr>
             ";
      }
      function calendario() {
        $dia = 1;
        $semana = array();
        while ($dia <= 31) {
          array_push($semana, $dia);
          if(count($semana) == 7) {
           linha($semana);
           $semana = array();
          }

          $dia++;
        } 
      }
    ?>
    <h1><?php echo "Calendário php" ?></h1>
    <table>
      <tr>
        <th>Dom</th>
        <th>Seg</th>
        <th>Ter</th>
        <th>Qua</th>
        <th>Qui</th>
        <th>Sex</th>
        <th>Sab</th>
        <?php calendario()?>
      </tr>
    </table>
  </body>
</html>
