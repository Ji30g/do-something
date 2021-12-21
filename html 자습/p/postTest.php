<?php


    header('Content-type:text/html; charset=utf-8');
    
    $name=$_POST['name'];
    $pw=$_POST['pw'];
    $gender=$_POST['rg1'];
    $msg=$_POST['msg'];
    $brand=$_POST['sel'];

    $msg=nl2br($msg); //textarea에서 입력된 값중 줄바꿈 문자 (\n)을 브라우저에
                      // 출력하면 한줄로 보여지므로 \n을 <br>로 변경해줘야함 

    echo "$name<br>";
    echo "$pw<br>";
    echo "$gender<br>";
    echo "$msg<br>";
    echo "$brand<br>";

    $fruits=$_POST['fruits']; //대입된 $fruits변수는 배열이다 , 체크박스에 선택된 값은 여러개일 수 있어서 

    //배열의 길이를 구해주는 함수 
    $len=count($fruits);


    //배열의 개수만큼 반복 
    for($i=0; $i<$len;$i++){
        echo "fruits[$i],";
    }
?>