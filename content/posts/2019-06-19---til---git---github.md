---
title: git과 github은 무엇? 그리고 주요 명령어
date: "2019-06-20T22:40:32.169Z"
template: "post"
draft: false
slug: "/posts/190620-til/"
category: "git"
tags:
  - "git"
  - "github"
description: "git과 github 주요 명령어"
---

![](/media/movable-type.jpg)

- [github](https://www.github.com/)
- [linux](https://www.linux.org/)

## git
— VCS (Version Control System)

소스코드(ex. server.js)의 변경사항 내역을 관리하는 시스템 최신 버전의 코드만 가지고 있는 것이 아니라,
그동안 작업한 내역, 변경 내역을 볼 수 있습니다.
git은 개발자들의 협업하면서 자료로 공유하고 수정사항을 확인할 수 있도록 제작되었습니다.

1. 코드 변경 사항 내역 기록 및 관리
2. 필요시 이전 상태로 rollback
3. 팀단위 개발 시 체계적이고 효과적인 협업

## git이 운영되는 방법

1. 소스코드 전체를 다운로드 받습니다 
전문적인 언어로, git repository를 checkout 한다고 합니다.
2. 소스코드 파일들을 수정 합니다. 즉 개발을 한다는 말입니다.
3. 수정한 파일들을 stage 합니다.
4. 그리고 계속 해서 소스코드 파일들을 수정해 나갑니다.
5. 해당 작업이 완료될때까지, 즉 commit 할 준비가 될때까지, 3,4번을 반복합니다.
6. 완료되면 commit 합니다. 

## github이 운영되는 방법
— 팀원들과 함께 일하기

1. pull 최신 업데이트 내용을 당겨오면서 
2. master branch 자신이 수정한 내용이 합쳐지고
3. merge 작업
4. 만약에 공동 작업 내역으로 인한 오류로 
conflict 오류가 뜨면
5. program에서 개발자 유저에게 물어봄.

modify  
add . 
commit 
push git status
conflict
push가 안되면 force push


# gitt basic commend


### git init

프로젝트를 git repository로 만드는 명령어 
프로젝트(project)라 함은 개발하고자 하는 소스코드들이 있는 디렉토리를 말합니다. 
git init을 해서 git repo로 만들어야 git으로 버전 관리가 시작

### git add

수정 사항들, 즉 modified 파일을 staged 상태로 옮길 때 사용하는 명령어.
git repo에 새로 추가된 파일들을 
staged 상태로 옮길때도 사용. 
새로이 추가된 파일들은 untracked 파일 이라고 하는데, 
git에서는 이들도 수정해야할 파일로 파악하게 됨.

### git commit

staged 된 파일들을 commit 하고자 할때 사용하는 명령어
git commit -m " "은 팀원들에게 수정 내역 내용을 공유하게 함.

### git diff

수정 사항이 적용되었는 지 확인할 때 사용하는 명령어.
staged 된 수정 사항들은 git diff로 볼 수 없습니다. 
Modified 된 파일들만 git diff로 볼 수 있습니다.

### git status

현재 상태를 보여주는 명령어. 
어떠한 파일들이 modified가 되었고 
어떠한 파일들이 staged가 되었는지 등의 
전체적인 현황을 확인.

### git log

Commit history, Commit 내역들을 확인.   
git log를 통해 커밋 내역들을 전부 확인. 
출력되는 내용이 가독성이 떨어질 정도로 많은 양의 데이터로 이루어져 있어서
tig 같은 tool을 사용

### git rm

원하는 파일을 git repo에서 삭제.

### git mv

원하는 파일을 git repo 상에서 이동할 때 사용. 
주로 rename 할때 사용.

### git branch

Branch를 생성할 때 사용 
Brancn는 '가지를 친다'라는 뜻을 가지고 있으며,
팀원들과 팀프로젝트 시 자신이 맡은 작업 영역을 
저장하기 위한 분할 된 저장소입니다.

### git checkout

어떤 branch를 checkout 할때 사용되는 명령어.

