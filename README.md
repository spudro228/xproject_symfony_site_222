My project 
==========
Сайт, типа форум, без обязательной регистрации, реалезованный на фреймворке Symfony 3.


**Сотав сборки:**
-----------------

* [Symfony Standard Edition](https://github.com/symfony/symfony-standard) - стандартная сборка 
* [DoctrineFixturesBundle](https://github.com/doctrine/DoctrineFixturesBundle) (in dev only) - создание данных для тестирования
* [FOSUserBundle](https://github.com/FriendsOfSymfony/FOSUserBundle) - система менеджмента пользователей (CRUD and security)

**Конфигурация**:
--------------
   * Отображения (mapping) - аннотации
   * Валидация форм - php
   * остальное - yml
  
**Установка**
-------------
//todo: дописать

Задачи(todo):
----
1. переопределить шаблоны FOSUserBundle, чтобы можно было кастомизировать. 👌🏻
#####Но, для этого понадобится выполнить пункт № 2

2. Выделить сущность User  в отдельный бандл. 👌🏻

3. Добавить навигацию на главную страницу. 👌🏻  

4. Убрат форму входа, если залогинен и сделать кнопку выхода на всех страницах. 👌🏻

5. Таки добавить возможность прикреплять картиночки. 👌🏻

6. Добавить пагинацию страниц. 👌🏻

7. Создать разделы/тематики. 👌🏻 👌🏻 👌🏻

NOTES:
----
Package kherge/version is abandoned, you should avoid using it. No replacement was suggested. 

Package herrera-io/json is abandoned, you should avoid using it. Use kherge/json instead.

Package herrera-io/phar-update is abandoned, you should avoid using it. No replacement was suggested.
