<?php
function create_copyright(): string
{
    $year = date('Y');
    $message = '&copy; ' . $year;
    return $message;
};