---
title: github blog 시작하기와 글 올리기
date: "2019-06-19T22:40:32.169Z"
template: "post"
draft: false
slug: "/posts/190619-til/"
category: "git"
tags:
  - "react"
  - "git blog"
description: "github blog 글 올리기"
---

![](/media/image-2.jpg)

- [github](https://github.com/)


github blog 글 올리는 방법

## local host : 8000
— 미리보기 효과 터미널로 서버 열기

네이버나 티스토리 등 일반 블로그는 사용자가 올리는 동시에
서버에 등록해주지만 github blog는 내 컴퓨터에서 github 서버로 올려줘야합니다.

그전에 내 컴퓨터에서 글이 잘 보이는 지,
확인할 수 있습니다.

```
$ cd projects
//상위 폴더

$ cd blog
//gatsby등 블로그를 등록한 폴더 위치로 이동

$ gatsby develop

//에디터에서 github에 연결된 상태라면 서버 오류가 날 수 있으니,
서버부터 연결한 뒤 에디터를 실행하세요.

```



## gitthub branch 추가하기
— 팀워크를 할 때 sign-up, log-in 부분 등 팀원과 공유할 수 있는 분류 저장소

```
$ git branch name 
//branch 이름을 name칸에 적어주세요

$ git checkout name
//새로 만든 branch에 접근해야합니다. checkout 브랜치 네임을 적어주세요.
```

## gitthub branch 추가하기

```
$ cd projects
$ cd blog
//블로그가 있는 위치까지 이동

$ git status
//현재 수정 내용이나 추가된 것 삭제 된 내역 확인
//만약 자신만 볼 수 있는 업데이트를 원한다면 gitignore에 '파일명'을 추가해주세요.

$ git add .
//add 뒤에 스페이스 뒤 '.'가 있습니다. '.'는 현재 경로라는 뜻입니다.

$ git commit -m " "
//팀원들에게 작업 내역을 공유할 수 있는 메세지를 남깁니다.

$ git push origin develop
//local host:8000 내 컴퓨터 서버까지 전송 완료

$ yarn deploy
// github 서버까지 전송되어 배포되었습니다. 

```
전송 내용을 확인하기 위해서
https://github.com/ 사이트의
repositories 카테고리를 확인하면 됩니다.

