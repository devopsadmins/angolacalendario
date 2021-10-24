<?php
//    function linha($semana){
//       echo "
//       <tr>
//    <td>{$semana[0]}</td>
//   <td>{$semana[1]}</td>
//   <td>{$semana[2]}</td>
//   <td>{$semana[3]}</td>
//   <td>{$semana[4]}</td>
//   <td>{$semana[5]}</td>
//   <td>{$semana[6]}</td>
//        </tr>
//       ";
//       }


function linha($semana)
{
    echo "<tr>";
    for ($i = 0; $i <= 6; $i++) {
        if (isset($semana[$i]) && $semana[$i] >0 ) {
            if (date('d') == $semana[$i] || $i==6)
                echo "<td><strong>{$semana[$i]}</strong></td>";
            else if (date('d') == $semana[$i] || $i==0)
                echo "<td><span style='color: red'>{$semana[$i]}</span></td>";
            else
                echo "<td>{$semana[$i]}</td>";
        } else {
            echo "<td></td>";
        }

    }
    echo "</tr>";
}

//   function calendario(){
//       $dia=1;
//       $semana = array();
//       while ($dia <= 31){
//           array_push($semana,$dia);
//           if(count($semana)==7){
//               linha($semana);
//               $semana=array();

//         }
//         $dia++;


//     }

//  }
function calendario()
{
    $dia = -1;
    $semana = array();
    while ($dia <= 31) {
        array_push($semana, $dia);
        if (count($semana) == 7) {
            linha($semana);
            $semana = array();


        }
        $dia++;

    }
    linha($semana);


}

?>

<h1>Meu calendario</h1>
<table border="1">

    <tr>
        <th>Domingo</th>
        <th>Segunda-Feira</th>
        <th>Terça-Feira</th>
        <th>Quarta-Feira</th>
        <th>Quinta-Feira</th>
        <th>Sexta-Feira</th>
        <th>Sabado</th>
    </tr>

    <?php calendario(); ?>
</table>

