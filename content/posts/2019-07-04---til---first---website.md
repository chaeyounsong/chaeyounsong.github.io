---
title: "첫 웹사이트 mysql,php와 통해 제작"
date: "2019-07-04T22:40:32.169Z"
template: "post"
draft: false
slug: "/posts/190704-til/"
category: "web"
tags:
  - "php"
  - "mysql"

description: "첫 웹사이트 php,mysql,html,js,css"
---

![](/media/portfolio/mysql_data_site.jpg)
![](/media/portfolio/board_and_uploader.jpg)
![](/media/portfolio/mysql_data.jpg)
![](/media/portfolio/text_site.jpg)

## index.php

```php

<?php
$conn = mysqli_connect("localhost","root", "-p");
mysqli_select_db($conn, "chaeyoun");
$result = mysqli_query($conn, "SELECT * FROM topic");
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />
    <title>chaeyounsong</title>
    <link rel="stylesheet" type="text/css" href="http://localhost:8008/style.css">


  </head>

</script>
<body id = 'target'>


  <header>
    <a href="http://localhost:8008/php/index.php"><img src="http://localhost:8008/img/home.png" alt="test_logo">
    <h1>JavaScript</h1>
    <p>Hello stranger! I'm Chaeyoun. This is my first test page.</p>
  </header>


<nav>
    <ol>
      <?php
      while($row = mysqli_fetch_assoc($result)){
        echo '<li><a href="http://localhost:8008/php/index.php?id='.$row['id'].'">'.$row['title'].'</li></a>'."\n";
      }
      ?>
    </ol>
</nav>

<div class="control">

  <input class="btnDesign" type="button" value="white" onclick="document.getElementById('target').className='white'" />
  <input class="btnDesign" type="button" value="black" onclick="document.getElementById('target').className='black'" />
  <a href="http://localhost:8008/php/write.php">쓰기</a>
</div>

<article>


  <?php
   if(empty($_GET['id']) === false ) {
       $sql = 'SELECT * FROM topic WHERE id='.$_GET['id'];
       $result = mysqli_query($conn, $sql);
       $row = mysqli_fetch_assoc($result);
       echo '<h2>'.$row['title'].'</h2>';
       echo $row['description'];
   }else{
        echo '<img class="main-img" src="http://localhost:8008/img/computer.png" alt="icon" />';
   }

   ?>

</article>

</body>
</html>

```


## github은 static한 사이트만 올릴 수 있다.

처음에 mysql을 어떻게 올려야 데이터를 보여줄 수 있을 지
한참 고민했다. 하지만 알아보니 github은 static(html,css,js로 제작)한 사이트만 올릴 수 있다고 한다.

mysql을 지원하는 웹서버 호스팅 사이트에서 보여줄 수 있다.
차후 이 문제를 어떻게 해결하면 좋을 지, 더 공부해봐야겠다.

## mysql을 공부하게 된 이유

처음에는 txt파일을 php로 연결해서 사용했는데,
이 버전은 보안상 문제가 커서 이제는 사용되지 않는 방법이라
mysql을 공부해서 만들어보았다.
물론 mysql도 오래된 제작 방법이라고 하니
결국 파이썬을 배우게 될 것 같다.

## mysql로 dB 만들기

mysql가 들어있는 폴더 경로까지 이동한다.

```
mysql -hlocalhost -uroot -p

```
-p는 비밀번호를 숨기기 위한 코드이다.

다음은 mysql database 생성코드이며,
show 다음은 
databases가 잘 만들어졌는가 확인하는 코드이다.
내부 함수나 기능은 대문자로 표기해 
수정할 수 있는 내용과 수정할 수 없는 부분을 분리한다.


```
CREATE DATABASE site_name default CHARACTER SET UTF8; 
SHOW databases;

```

나는 데이터베이스 이름을 사이트명으로 사용하기로 했다.

## dB안에 table value (key값 만들기)

```

CREATE TABLE topic 
( _id INT PRIMARY KEY AUTO_INCREMENT, 
`title` VARCHAR(20) NOT NULL, 
`author` VARCHAR(20) NOT NULL,
`description` VARCHAR(50) NOT NULL,
`created` submission_date DATE) ENGINE=INNODB;

```
1. topic이라는 테이블을 만든다.

2. 아이디값을 정수형(int)으로 받겠다는 뜻이다. 
1씩 증가한다.아이디값은 기준점이 되어 
데이터를 찾는 방법이된다.

3. 제목 값이며 20자(varchar(20))를 넘지 않게 한다. 
빈공간을 허용하지 않는다.(=not null)

4. 작성자 이름을 20자이내로 받고 빈공간을 허용하지 않음

5. 내용이며 50자이내로 받고 빈공간 허용하지 않음

6. 만들어진 시간을 받기 위한 값 
시간을 받는 내부함수를 통해 입력값을 받는다.

7. INnodb를 통해 테이블이 운영된다.


## uploader를 제공하는 사이트

uploader 기능을 제공하는 사이트가 있다.
uploader 기능을 통해 사진이나 파일을 올릴 수 있는
호스팅 서버를 갖고 또한 사용자가 파일을 올릴 수 있는 버튼과
기능을 넣어준다.

- [uploadcare](https://uploadcare.com/)

위젯 코드를 받아서 원하는 위치에 넣고
자바스크립트를 통해 사이트에서 생성하는 이미지 주소를
img 태그를 통해 연결하면 사이트에 자동으로 올라온다.

물론 이건 php파일에서 사용하겠다고
mysql 정보와 자바스크립트 코드가 들어가야한다.
나의 경우에는

nav에 제목이 업데이트되고
description은 클릭했을 시 보이며
사진은 img태그에 주소값을 id값 기준으로 받게 했다.

## 데이터의 기준점 ID값

처음에 사이트를 만들 때 html 여러개의 파일을 만들었다.
그렇다면 1억개의 페이지를 갖는 경우 유지보수가 어려울 것이다. 그런데 ID가 생기면서
PHP안에 여러 페이지를 운영할 수 있었다.

또한 사용자가 입력한 값을 dB에 넣을 때도 사용하며
후에 value를 수정하거나 삭제해야할 때도 ID를 기준으로
작업하게 된다.

ID라는 개념을 만들었다는 사실에 놀라고
감사한다!

