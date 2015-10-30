<?php session_start(); ?>
<?php 
 if ( isset($_GET['nome']) ) {
   $_SESSION['nome'][] = $_GET['nome'];
 }  
?>

<form>
  <input type=text placeholder=nome name=nome>
  <input type=number placeholder=numero name=numero>
  <button type=submit>Enviar</button>
</form>
<?php if(isset($_SESSION['nome'])): ?>
<table>
  <?php foreach ($_SESSION['nome'] as $index=>$item): ?>
    <tr>
      <td><?php echo "{$index}:  {$item}" ?></td>
    </tr>
  <?php endforeach;?>
</table>
<?php endif; ?>
