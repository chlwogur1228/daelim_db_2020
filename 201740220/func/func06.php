<?php

# 함수의 선언은 호출 전/후 모두 위치 할 수 있다.

// hello 함수가 있나요?
if(function_exists("hello")) {
    // 여기의 코드를 실행해 주세요.
    echo "hello 함수가 존재하네요.";
} else {
    //없어요. 여기의 코드를 실행해 주세요.
    echo "hello 함수가 뭐에요? 처음 들었어요.<br>";

    // 조건 제어문의 코드블럭 안에서도 함수 선언 가능.
    function hello($name)
    {
        echo "안녕하세요. <br>";
        print "대림대학교의 ";
        print $name . " 입니다.<br>" ;
        return true;
    }
    // 함수 목록 hello 추가...

}

// 함수 목록에 잇는 hello 호출
hello("성형주");