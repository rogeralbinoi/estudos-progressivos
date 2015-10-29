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
      function linha() {
        echo "<tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
             ";
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
        <?php linha()?>
        <?php linha()?>
        <?php linha()?>
        <?php linha()?>
        <?php linha()?>
      </tr>
    </table>
  </body>
</html>
