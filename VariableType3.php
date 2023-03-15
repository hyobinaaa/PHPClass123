<?php
    $var = 10; // 전역 변수로 선언함
    function varFun(){
        echo "함수 내에서 호출한 전역 변수 var의 값은{$GLOBALS['var']} 입니다<br>.";
        echo "함수 내에서 호출한 전역 변수 var의 값은{$GLOBALS['var']}<br>"; // GLOBALS 키워드 사용함으로 내부에 접근 가능
    }
    varFun();
    echo "함수 밖에서 호출한 전역 변수 var의 값은 {$var} 입니다";

?>