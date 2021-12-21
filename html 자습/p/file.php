<?php
    $file=$_FILES['aaa'];
    //대입된 $file은 파일의 여러정보를 가지기 위해 배열로 된 변수임 


    //$file 배열 변수에서 원하는 값들 얻어오기 

    $srcName=$file['name']; //원본의 파일명. 확장자
    $fileType=$file['type']; // 전송된 파일의 확장자 
    $fileSize=$file['size']; //전송된 파일의 파일 사이즈 
    $tmpName=$file['tmp_name']; //업로드된 파일이 잠시 보관되는 임시 저장소의 경로 


    
    echo "$srcName<br>";
    echo "$fileType<br>";
    echo "$fileSize<br>";
    echo "$tmpName<br>";
    // 임시저장된 파일은 곧 사라질 것
    // 서버에 온전히 보관하고 싶다면 임시저장소 ($tmpName)의
    // 파일을 원하는 목적지로 이동시켜야함 

    // 원하는 목적지의 경로와 파일명.확장자 
    // 이름이 겹치면 안되기에 보통 날짜를 파일명으로 활용!
    $dstName=date('Ymdhis'). $srcName; //현재 폴더안에 현재 날의 이름으로 저장 
    // 임시저장소 -> 목적지 위치로 

    move_uploaded_file($tmpName,$dstName);
    
?>