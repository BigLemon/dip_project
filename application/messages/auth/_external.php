<?php
 
return array(
    'password' => array(
        'not_empty' => 'Поле "Пароль" не может быть пустым',
        'min_length'    => 'Поле "Пароль" должно быть больше чем :param2 символов',
	'max_length'    => 'Поле "Пароль" должно быть меньше чем :param2 символов',
    ),
    'password_confirm' => array(
        'matches' => 'Пароли не совпадают',
    ),
);