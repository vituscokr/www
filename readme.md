# 코드 이그나이터 

[코드 이그나이터 문서](https://codeigniter.com/user_guide/intro/index.html)

CodeIgniter4 requires Composer 2.0.14 or later.

https://squareinven.tistory.com/48

https://getcomposer.org/
https://getcomposer.org/Composer-Setup.exe



```
composer create-project codeigniter4/appstarter ci4

```

오류 메세지 

Your requirements could not be resolved to an installable set of packages.

  Problem 1
    - codeigniter4/framework[4.0.0, ..., v4.4.1] require ext-intl * -> it is missing from your system. Install or enable PHP's intl extension.
    - Root composer.json requires codeigniter4/framework ^4.0 -> satisfiable by codeigniter4/framework[4.0.0, ..., v4.4.1].

To enable extensions, verify that they are enabled in your .ini files:
    - D:\xampp\php\php.ini
You can also run `php --ini` in a terminal to see which files are used by PHP in CLI mode.
Alternatively, you can run Composer with `--ignore-platform-req=ext-intl` to temporarily ignore these required extensions.


Internationalization Functions의 확장 모듈명이 intl입니다. 이 모듈은 숫자,날짜 포맷 등 로케일 인식 작업을 수행하는데 사용됩니다.

http://localhost:1001/ci4/public/




http://localhost:1001/ci4/public

https://codeigniter.com/user_guide/tutorial/index.html#