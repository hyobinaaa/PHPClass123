<?php
    function counter(){
        static $count = 0; // 정적 변수로 선언함
        echo " 함수 내에서 선언한 정적 변수 의 값은{$count} 이다.<br> ";
         $count++; // 카운트 증가
    }
    counter();
    counter();
    counter();

?>
