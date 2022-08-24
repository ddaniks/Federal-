<?php

/* feriados de acordo com mês  
========coloque o numero do mes dejado a seguir:====================*/

$num=4;

//=========Execuçao do codigo=======================

/* =====Dados retiradas de: <https://blog.bancointer.com.br/calendario-feriados> em 08/22 01:24 pm ====== */

$mes=$num;
switch ($num=$mes) {
    case '1':
        echo"o mes é janeiro <br>";
        echo" Possui '1' feriado<br> ";
        echo" ano novo ";
        break;
    case'2':{
        echo "o mes é fevereiro";
        echo "possui '1' feriado";
        echo "carnaval";
    }    break;
    case'3':{
        echo"o mes é março";
        echo"possui '1' feriado";
        echo "quarta de cinzas";
    }    break;
    case'4':{
        echo"o mes é abril";
        echo"possui '3' feriados<br>";
        echo" paixao de cristo '15'<br>pascoa '17' <br> tiradentes '21'";
    }    break;
     case'5':{
        echo"o mes é maio<br>possui 1 feriado<br> '1' dia do trabalho";
    }    break;
     case'6':{
        echo"o mes é junho<br>possui 1 feriado <br> corpus christi '16'";
    }    break;
     case'7':{
        echo"o mes é julho<br> nao possui feriados ";
    }    break;
     case'8':{
        echo"o mes é agosto<br> nao possui feriados";
    }    break;
     case'9':{
        echo"o mes é setembro<br> possui 1 feriado <br>'7' independencia do Brasil";
    }    break;
     case'10':{
        echo"o mes é outubro<br> possui 1 feriado <br> '12' dia de nossa senhora aparecida";
    }    break;
     case'11':{
        echo"o mes é novembro<br> possui 3 feriados <br> '2' finados <br> '15' proclamaçao da republica<br>'20'conciencia negra";
    }    break;
     case'12':{
        echo"o mes é dezembro<br> possui 3 feriados <br> '24' vespera de natal<br> '25' natal <br>'31'vespera de ano novo";
    }    break;
   
    default:
        echo"Opçao invalida o numero $num nao possui um mes correspondente ";
        break;

   
}



?>
