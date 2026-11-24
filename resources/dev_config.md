프로젝트 환경설정

⚠️주의사항
⭐️모르는 단어들 찾아보기 !!!!(Nginx etc...)
⭐️Herd를 켜지않으면 사이트 접속안됨(https://my-first-app.test/api-test)

1. Herd 설치

cmd 열어서
2. php -v
3. composer -v
4. herd --version
5. herd 열어서 톱니바퀴 아이콘(설정 확인가능) 클릭
6. /Users/jaeheelee/Herd herd저장폴더로 가서
7. 프로젝트 생성 방법 2가지 있음
 ①cmd에서 composer create-project laravel/laravel app이름
 ②Laravel cli 설치하는 방식　cmd에서 

8. 프로젝트 생성
 Laravel new app이름

9. herd secure
Nginx 재시작

Restarting Nginx...
The [my-first-app.test] site has been secured with a fresh TLS certificate.

해제 herd unsecure
👉unsecure하면 사이트 접속 안됨.

Restarting Nginx...
The [my-first-app.test] site will now serve traffic over HTTP.

10. visual studio code 설치
~/Herd/my-first-app 앱 까지 들어간뒤
code . - 비주얼 스튜디오 열기

그다음 비주얼 스튜디오 코드의 확장기능에서 
①PHP Intelephense 설치(임포트등 자동 삽입?)
②Laravel Extra Intellisense 설치
③Laravel Blade Snippets 설치
④Laravel Blade formatter(ctrl + shift + f로 뒤죽박죽 코드 자동 정렬기능)
⑤DotEnv 설치(key value값쌍을 색깔로 보기쉽게 표시해줌)

11. 커먼 팔렛(shift + command + P)눌러서 Open User settings(사용자 설정)열어서 settings.json에 php용 설정 추가
12. 터미널 창에 php artisan을 쳐서 설치 확인

라라벨 디렉토리 구조 파악 + MVC 패턴과 핵심 폴더의 역할

라우트(Route)란?


라우트의 기본 문법
HTTP 메서드와 URL 파라미터 다루기

라우트가 안될경우 'php artisan route:clear'로 캐쉬를 정리해주는 것도 하나의 방법이다.

이름있는 라우트와 헬퍼 함수

블레이드(blade) 템프릿 엔진이란?



2026/11/23
vite 패키지 의존성 설치
HMR(Hot Module Replacement)기능 적용
1. npm install - 설치
2. npm run dev - 서버 띄우기(HMR로 수정하면 바로 반영됨.)
3. npm run build - 배포
