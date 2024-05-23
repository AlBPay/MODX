Модуль Alliance bankдля ModX revo minishop2.
=====
-----

##### Инструкция по установке модуля оплаты Alliance bank

1. Скопируйте каталог assets и core в корень системы modx.

2. В админ.панели Modx зайдите: Приложения -> Minishop2 -> Настройки -> Способы оплаты -> Создать 

3. Заполните все поля, в поле Класс-обработчик указать Alliance bank.

4. Открыть файл для редактирования core/components/minishop2/custom/payment/fondy.class.php

#### Заполнить поля:
```
MERCHANT_ID - можно узнать в личном кабинете Alliance bank
SECRET_KEY - можно узнать в личном кабинете Alliance bank
SUCCESS_URL - ссылка для перехода на страницу после успешного платежа
```
Скриншот настроек:![Скриншот][1]

Скриншот настроек:![Скриншот][2]

[1]: https://raw.githubusercontent.com/cloudipsp/modx/master/settings.png
[2]: https://raw.githubusercontent.com/cloudipsp/modx/master/setting1.png