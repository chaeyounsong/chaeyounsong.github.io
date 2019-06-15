---
title: "Callback Function 왜 쓸까?"
date: "2019-06-16T22:40:32.169Z"
template: "post"
draft: false
slug: "/posts/190616-til/"
category: "javascript"
tags:
  - "javascript"
  - "callback"
description: "콜백함수는 무엇이고 왜 쓰는가?"
---

![](/media/image-4.jpg)

- [생활코딩](https://www.opentutorials.org/course/743/6508)
- [codeacademy](https://www.codecademy.com/catalog/language/javascript)


codeacademy javascript 예제 문제를 풀다가, 
짧은 영어 실력 때문에 도무지 이해가 되지 않은 게 있었습니다.
바로 콜백함수입니다. 

한국말로 쉽게 설명해둔 '생활코딩'을 통해 공부할 수 있었습니다.

## 콜백함수란?

콜백함수는 함수의 성질을 바꾸기 위해 사용한 함수라고 합니다.
무슨 말일까요? 저도 여러번 읽어봤지만, 명확하게 알아듣기 어려웠습니다.
예제를 남겨두겠습니다.

ex 01. 단순한 콜백의 모습

a = {
    b:function(){
    }
};

바로 '함수 안의 함수'입니다.

ex 02. 콜백이 왜 생겼는 지 알 게 되는 예제 

var numbers = [20,10,9,8,7,6,5,4,3,2,1]
// 배열 값의 숫자들을 정리하기 위해 'sort()'를 이용해보겠습니다.
console.log(numbers.sort());
// [1, 10, 2, 20, 3, 4, 5, 6, 7, 8, 9]
// 예상대로 정리되었나요? 정리되지 않았습니다.
파일명에 1사진,2사진,10사진이라고 적어보셨나요?
적어보면 컴퓨터는 1사진, 10사진, 2사진으로 정리해줍니다.
위의 console.log 결과값처럼 컴퓨터는 왼쪽에서 오른쪽으로 확인하면서
1이 2보다 작으니까 왼쪽으로 정렬해야지라고 생각하게 됩니다.

// 이 때 구원 투수처럼 나타나는 게 sort함수의 콜백함수인 
array.sort(sortfunc)를 추가해주면 우리가 원하는대로
1-20까지의 수를 정리해줍니다.

-------이처럼 콜백함수는 상위 함수 연산에 또 다른 연산처리가 필요할 때 불려집니다.


## 콜백함수는 왜 사용하게 되었을까?
— 생활코딩의 예를 통해 설명해보겠습니다.  

콜백함수를 이해하려면 C언어적인 면과 메모리가 어떻게 운영되는 지 알아야합니다.
하지만 저는 디자이너로 일했고 컴퓨터와 웹이 어떻게 움직이는 지 모두 알기 어려웠습니다.
그래서 웹 사이트 일부를 예로 들어 이해해보겠습니다.

생활코딩에서 알려준 예

만약에 10,000명에게 이메일 1통씩 보내는데 1초씩 들인다면
10,000초의 시간이 필요합니다. 시간으로 약 3시간이 걸립니다.
이메일을 보내는데 3시간이 걸린다면 이용할 사용자가 있을까요?

1통의 이메일당 하나씩 결과값을 만들고 서버에 보내주는 처리를 '동기적'처리라고 합니다.
(휴대폰 저장 내역을 동기화 해보신 적 있으시죠? 데이터 하나-하나-를 받아옵니다.)

비효율적이고 시간이 많이걸립니다.
근데 이 때, 10,000명을 관리하는 object와 class 그리고 콜백함수가 준비되어있어
작업을 할 세팅이 준비되어 있다면 클릭 한 번으로 몇 분안에 처리가 되어 있는겁니다.

마치 5분 대기조 같은거죠.
우리가 사이트 메뉴를 누를 때 역시 이미 '콜백함수'와 준비된 '오브젝트'가 세트로 나옵니다.
이러한 처리를 '비동기처리' '비동기콜백함수'라고 합니다.

## 이해가 안된다면 예문을 많이 작성해보세요.

처음에는 콜백함수의 개념이 잡히지 않다가 예문들을 3시간동안 작성해보니 구조의 윤곽이 보이기 시작했습니다. 제가 연습했던 예제문들을 남겨둡니다. 

백문이불여일타 ^^! 직접 꼭 예제를 작성해보시고 처음부터 다시 한 번 작성해보세요.

연습 예제 (1)

function cal(mode){
    var funcs = {
        'plus' : function(left, right){return left + right},
        'minus' : function(left, right){return left - right}
    }
    return funcs[mode];
}
alert(cal('plus')(2,1));
alert(cal('minus')(2,1)); 

연습 예제 (2)

var process = [
    function(input){ return input + 10;},
    function(input){ return input * input;},
    function(input){ return input / 2;}
];
var input = 1;
for(var i = 0; i < process.length; i++){
    input = process[i](input);
}
alert(input);