<?php

    $files=$_FILES['aaa'];

    //files라는 2차원 배열의 사이즈 

    $num=count($files);//출력:5
    $num2=count($files['name']);//만약 파일이 100개면 출력:100 

    //즉, 전송된 파일의 개술르 알고싶다면, $files를 count하면 안되고 
    // $files['name']의 count()해야함 

    //전송된 파일 개수 

    $fileNum=count($files['name']);
    for($i;$i<$fileNum;$i++){
        $srcName=$files['name'][$i];//원본 파일명 
        $tmpName=$files['tmp_name'][$i];//임시 저장소 경로  
        $fileType=$files['type'][$i]; 
        $fileSize=$files['size'][$i];
        
        
    echo "$srcName <br>";
    echo "$fileType <br>";
    echo "$fileSize <br>";
    echo "$srcName <br>";
    echo "======================================<br>";

    $dstName=date('ymdhis').$srcName;
    move_uploaded_file($tmpName,$dstName);
    }


?>
