<?php

function retryWithBackoff(callable $fn, int $attempts = 3): mixed
{
    $delay = 100;
    for ($i = 0; $i < $attempts; $i++) {
        try {
            return $fn();
        } catch (RuntimeException $e) {
            usleep($delay * 1000);
            $delay *= 2;
        }
    }
    throw new RuntimeException('exhausted retries');
}
