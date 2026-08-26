<?php

final class Session
{
    public function __construct(
        private readonly string $token,
        private readonly ?string $region = null,
    ) {}

    public function isExpired(int $now, int $expiresAt): bool
    {
        return $now >= $expiresAt;
    }
}
