<?php


$question = '';
$answers = [];
$result = '';



$steps = [
    [
        'id' => 1,
        'question' => 'Сколько колес у велосипеда?',
        'answers' => [
            [
                'text' => '2',
                'function' => 'next',
                'next_step' => 2,
            ],
            [
                'text' => '8',
                'function' => 'Неверно',
                'next_step' => 2,
            ],
        ],
    ],
    [
        'id' => 2,
        'question' => 'Что является движущей силой велосипеда?',
        'answers' => [
            [
                'text' => 'Цепь',
                'function' => 'next',
                'next_step' => 3,
            ],
            [
                'text' => 'Руль',
                'function' => 'Неверно',
                'next_step' => 3,
            ]
        ],
    ],
    [
        'id' => 3,
        'question' => 'Бывают ли скоростные велосипеды?',
        'answers' => [
            [
                'text' => 'Да',
                'function' => 'Прошли',
            ],
            [
                'text' => 'Нет',
                'function' => 'Не прошли',
            ]
        ],
    ],
];

function findNextStep($id, $steps) {
    $step = null;
    foreach ($steps as $_step) {
        if ($_step['id'] == $id) {
            $step = $_step;
        }
    }
    return $step;
}

function generateQuestion ($step) {
    return $step['question'];
}

function generateAnswers ($step) {
    return $step['answers'];
}

if (isset($_POST['submit'])) {
    $answer = json_decode($_POST['answer'], true);
    if ($answer['function'] === 'next') {
        $step = findNextStep($answer['next_step'], $steps);
        $question = generateQuestion($step);
        $answers = generateAnswers($step);
    } else if ($answer['function'] === 'Не прошли') {
        $result = 'Вы проиграли';
    } else if ($answer['function'] === 'Прошли') {
        $result = 'Вы победили';
    }
} else {
    $step = findNextStep(1, $steps);
    $question = generateQuestion($step);
    $answers = generateAnswers($step);

