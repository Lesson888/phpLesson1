<?php

$answers = [
    ['id' => 1, 'text' =>'Привет'],
    ['id' => 1, 'text' =>'Пока'],
];

?>

<?php foreach ($answers as $answer): ?>
<?php print_r($answer) ?>
<?php echo $answer['text']; ?>
<br>
<?php endforeach; ?>
