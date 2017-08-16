<?php
include_once 'data.php';

$errorMessage = '';
$message = '';


if (isset($_POST['submit'])) {
    $totalScore = 0;

    for ($i = 0; $i < count($questions); $i++) {
        $questionScore = isset($_POST['question-' . $i]) ? intval($_POST['question-' . $i]) : 0;

        if ($questionScore >= 1 && $questionScore <= 7) {
            $totalScore += $questionScore;
        } else {
            $errorMessage = '[Expliquer tout repondre!]';
            break;
        }
    }

    if (!$errorMessage) {
        $message = '[Expliquer score final = ' . $totalScore . ']';
    }
}
