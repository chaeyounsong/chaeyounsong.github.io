---
title: "웹이 돌아가는 골격 html,css,js,php"
date: "2019-07-03T22:40:32.169Z"
template: "post"
draft: false
slug: "/posts/190703-til/"
category: "web"
tags:
  - "web"

description: "how to process to webpage."
---

![](/media/image-4.jpg)



## 웹이 돌아가는 골격 공부하기

1. HTML은 문서와 문서를 이동해서 정보를 네트워크로 묶어주려한다.

2. CSS는 화면의 디자인을 담당한다.
처음에는 HTML 전체 문서 하나마다 CSS 하나씩 주어졌다.
나중에 HTML 페이지 수가 1000개 정도 되었을 때
1html에서 준 h2와 정보와 2html에서 준 정보가 부딪힌다.

이로인해 고안된 게 css의 class다.
그리고 기본적인 버튼 레이아웃은 고정된 값을 지키기 위해 ID를 사용한다.

하지만 이런 class의 수도 ID값도 점차 늘어 유지보수가 어려워져
CSS 따로 HTML 따로 관리하게 된다.
그래서 전체 관리하는 CSS 소스 코드 한 줄을 첨부해 관리를 수월하게 한다.

```html

<link rel="stylesheet" href="/css/master.css">

```
3. js는 자바스크립트의 약자이다. 
js는 버튼이 눌렸을 때 일어나는
이벤트 알람, 사용자가 입력하는 값을 받는 역할을 한다.
한 가지 역할로 축약하기엔 다양한 면이 있지만,
사용자와 브라우저에서 상호소통하는 기능이다.

```js

var name = "오리"
document.write("안녕하세요 " + name + "입니다.")

```
자바스크립의 변수는 말 그대로 실시간으로
데이터를 받아 수정하기 위해 생성되었다.
php도 변수가 있으며 $표시와 함께한다.

4. php가 작동하는 원리는 다음과 같다.
(차후 이미지를 첨부할 예정)
웹브라우저는 www.ori.com라고 도메인을 통해
아이피 주소로 웹서버에게 요청한다.

웹 서버에서는 php를 요청하는 내용을
php문법을 해석할 수 있는 php엔진에게 전달한다.
php는 DB에 있는 정보를 데려와서 웹서버에게 보내주고
웹서버는 웹 브라우저에 보여준다.

```html

<ul>
<li>JavaScript</li>
<li>CSSS</li>
<li>HTML</li>
</ul>

```
위의 내용은 html이다.
예를 들기 위해 작성했다. 혼선을 가지지 않도록 기록한다.

list 안의 내용이 DB에 저장되어 있고
PHP는 이 내용을 불러온다.
html 하나하나 웹페이지를 만들면 유지보수가 번거로워지고
php에서 id를 통해 페이지 전체를 한 번에 운영할 수 있다.

php와 js의 가장 큰 차이점은
php는 서버에게 직접 연산하고 처리한 내용을 보내기 때문에
개발자 도구에서 php소스가 보이지 않는다는 것이다.

js는 개발자 코드를 통해 확인할 수 있다.

## js와 php 디버깅

js는 크롬 기준으로
F12를 눌러 console.log창을 통해 에러내용과, 몇 번째 줄에서 일어난 지
확인할 수 있으며

php는 서버 폴더 중 logs 폴더에서
error.log 파일을 확인하고
가장 마지막 에러 메세지 내용을 확인한다.
parse error 내용을 위해 어떤 에러인지 확인할 수 있다
예를 들면 syntax(문법)에러라던가 확인할 수 있으며
어떤 표기를 기다리는 지 알려주며 몇 번 째 줄에서 에러가
발생했는 지 알려준다.

