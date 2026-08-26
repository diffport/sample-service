<?php

final class RateLimiter
{
    public function __construct(private readonly int $perMinute) {}

    public function allow(string $key, int $seen): bool
    {
        return $seen < $this->perMinute;
    }
}
