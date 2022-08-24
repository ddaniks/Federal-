<?php

/* feriados de acordo com mês  
========coloque o numero do mes dejado a seguir:====================*/

$num=11;

//=========Execuçao do codigo=======================

$mes=$num;
switch ($num=$mes) {
    case '1':
        echo"o mes é janeiro <br>";
        echo" Possui 'x' feriados<br> ";
        echo" ";
        break;
    case'2':{
        echo "o mes é fevereiro";
    }    break;
    case'3':{
        echo"o mes é março";
    }    break;
    case'4':{
        echo"o mes é abril";
    }    break;
     case'5':{
        echo"o mes é maio";
    }    break;
     case'6':{
        echo"o mes é junho";
    }    break;
     case'7':{
        echo"o mes é julho";
    }    break;
     case'8':{
        echo"o mes é agosto";
    }    break;
     case'9':{
        echo"o mes é setembro";
    }    break;
     case'10':{
        echo"o mes é outubro";
    }    break;
     case'11':{
        echo"o mes é novembro";
    }    break;
     case'12':{
        echo"o mes é dezembro";
    }    break;
   
    default:
        echo"Opçao invalida este numero nao possui um mes correspondente ";
        break;
   
}



?>
