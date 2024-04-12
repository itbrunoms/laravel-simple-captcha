<?php

use Itbrunoms\LaravelSimpleCaptcha\SimpleCaptcha;

function getCaptchaQuestion()
{
    return SimpleCaptcha::getQuestion();
}

function getCaptchaBox($inputBoxName = "_answer", $size = false)
{
    if ($size) $size = 'width:' . $size . 'px';
    $html = '<div style="display: flex;align-items: center;font-weight: 600;"><div>' . SimpleCaptcha::getQuestion() . '</div>';
    $html .= '<div style="margin-left:10px"><input name="' . $inputBoxName . '" type="number" style="' . ($size) ? $size : null . '"></div></div>';
    return $html;
}
