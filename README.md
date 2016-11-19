# Bitrix patterns
Этот проект будет содержать основные компоненты, методы и т.д. которые используются мной ежедневно в проектах на битриксе.


#Установка

1. Импортируйте базу данных из файла /sql/patterns.php.
2. Переименуйте файлы 
    bitrix/.settings_for_install.php
    bitrix/php_interface/dbconn_for_install.php
    в
    bitrix/.settings.php
    bitrix/php_interface/dbconn.php
3. Пропишите свои доступы к базе данных в этих файлах.

#Доступы к админке

login: admin
password: 123456
