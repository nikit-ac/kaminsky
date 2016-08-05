<?php

if ($_GET['type']) {
    if ($_GET['type'] == 'borough') {
        $response = array(  "Голосеевский",
                            "Дарницкий",
                            "Деснянский",
                            "Днепровский",
                            "Оболонский",
                            "Печерский",
                            "Подольский",
                            "Святошинский",
                            "Соломенский",
                            "Шевченковский"
                        );
    } elseif ($_GET['type'] == 'block') {
        switch ($_GET['borough']) {
            case 'Голосеевский':
                $response = array(  "Голосеевский Массив-1",
                                    "Голосеевский Массив-2",
                                    "Голосеевский Массив-3",
                                    "Голосеевский Массив-4",
                    );
                break;

            case 'Дарницкий':
                $response = array(  "Дарницкий Массив-1",
                                    "Дарницкий Массив-2",
                                    "Дарницкий Массив-3",
                                    "Дарницкий Массив-4",
                    );
                break;

            case 'Деснянский':
                $response = array(  "Деснянский Массив-1",
                                    "Деснянский Массив-2",
                                    "Деснянский Массив-3",
                                    "Деснянский Массив-4",
                    );
                break;

            case 'Днепровский':
                $response = array(  "Днепровский Массив-1",
                                    "Днепровский Массив-2",
                                    "Днепровский Массив-3",
                                    "Днепровский Массив-4",
                    );
                break;

            case 'Оболонский':
                $response = array(  "Оболонский Массив-1",
                                    "Оболонский Массив-2",
                                    "Оболонский Массив-3",
                                    "Оболонский Массив-4",
                    );
                break;

            case 'Печерский':
                $response = array(  "Печерский Массив-1",
                                    "Печерский Массив-2",
                                    "Печерский Массив-3",
                                    "Печерский Массив-4",
                    );
                break;

            case 'Подольский':
                $response = array(  "Подольский Массив-1",
                                    "Подольский Массив-2",
                                    "Подольский Массив-3",
                                    "Подольский Массив-4",
                    );
                break;

            case 'Святошинский':
                $response = array(  "Святошинский Массив-1",
                                    "Святошинский Массив-2",
                                    "Святошинский Массив-3",
                                    "Святошинский Массив-4",
                    );
                break;

            case 'Соломенский':
                $response = array(  "Соломенский Массив-1",
                                    "Соломенский Массив-2",
                                    "Соломенский Массив-3",
                                    "Соломенский Массив-4",
                    );
                break;

            case 'Шевченковский':
                $response = array(  "Шевченковский Массив-1",
                                    "Шевченковский Массив-2",
                                    "Шевченковский Массив-3",
                                    "Шевченковский Массив-4",
                    );
                break;

            default:
                $response = array('Ошибка с выбором района');
                break;
        }
    } elseif ($_GET['type'] == 'search') {
        sleep(5);
        $response = array("Ответ 1", "Ответ 2", "Ответ 3");
    }
}

$response = json_encode($response);
echo $response;