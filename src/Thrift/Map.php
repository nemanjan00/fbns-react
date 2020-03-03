<?php

declare(strict_types=1);

namespace Fbns\Client\Thrift;

use Fbns\Client\Thrift\Compact\Types;

class Map extends Field
{
    /** @var int */
    private $keyType;

    /** @var int */
    private $valueType;

    public function __construct(int $keyType, int $valueType, $value)
    {
        $this->keyType = $keyType;
        $this->valueType = $valueType;
        parent::__construct(Types::MAP, $value);
    }

    public function keyType(): int
    {
        return $this->keyType;
    }

    public function valueType(): int
    {
        return $this->valueType;
    }
}