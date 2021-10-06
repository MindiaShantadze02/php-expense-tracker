<?php

function formatAmount (string $amount):string 
{
    if ((float)$amount > 0) {
        return '+$'.abs($amount);
    } else if ((float)$amount < 0) {
        return '-$'.abs($amount);
    }
}