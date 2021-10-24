<?php
function linha($semana)
{
    echo "
          <tr>
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


function calendario()
{
    $dia = 1;
    $semana = array();
    while ($dia <= 31) {
        array_push($semana, $dia);
        if (count($semana) == 7) {
            print_r($semana);
            linha($semana);
            $semana = array();

        }
        $dia++;


    }

}

?>


<table border="1">

    <tr>
        <td>Domingo</td>
        <td>Segunda-Feira</td>
        <td>Terça-Feira</td>
        <td>Quarta-Feira</td>
        <td>Quinta-Feira</td>
        <td>Sexta-Feira</td>
        <td>Sabado</td>
    </tr>
    <?php calendario() ?>
</table>


