<?php


$question = '';
$answers = [];
$result = '';
$image = '';

$steps = [
    [
        'id' => 1,
        'question' => 'У велосипеда два колеса?',
        'image' => '10.png',
        'answers' => [
            [
                'text' => 'Да',
                'function' => 'next',
                'next_step' => 2,
            ],
            [
                'text' => 'Нет',
                'function' => 'endGame',
            ],
        ],
    ],
    [
        'id' => 2,
        'question' => 'Цепь движущая сила велосипеда?',
        'image' => '6.png',
        'answers' => [
            [
                'text' => 'Да',
                'function' => 'next',
                'next_step' => 3,
            ],
            [
                'text' => 'Нет',
                'function' => 'endGame',
            ]
        ],
    ],
    [
        'id' => 3,
        'question' => 'Какая часть велосипеда подлежит смазке?',
        'answers' => [
            [
                'text' => 'Цепь',
                'function' => 'next',
                'next_step' => 4,
            ],
            [
                'text' => 'Звездочка',
                'function' => 'endGame',
            ]
        ],
    ],
    [
        'id' => 4,
        'question' => 'Сколько колес в обычном велосипеде?',
        'answers' => [
            [
                'text' => '9',
                'function' => 'endGame',
            ],
            [
                'text' => '2',
                'function' => 'win',
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

function generateImage ($step) {
    return $step['image'];
}

if (isset($_POST['submit'])) {
    $answer = json_decode($_POST['answer'], true);
    if ($answer['function'] === 'next') {
        $step = findNextStep($answer['next_step'], $steps);
        $question = generateQuestion($step);
        $answers = generateAnswers($step);
        $image = generateImage($step);
    } else if ($answer['function'] === 'endGame') {
        $result = 'Вы проиграли';
    } else if ($answer['function'] === 'win') {
        $result = 'Вы победили';
    }
} else {
    $step = findNextStep(1, $steps);
    $question = generateQuestion($step);
    $answers = generateAnswers($step);
    $image = generateImage($step);

}

?>