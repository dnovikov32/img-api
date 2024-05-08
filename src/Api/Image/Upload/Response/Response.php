<?php

declare(strict_types=1);

namespace App\Api\Catalog\Category\Common\Response;

use Dnovikov32\HttpProcessBundle\Response\ApiResponseInterface;

final class Response implements ApiResponseInterface
{
    public function __construct(
        private readonly string $id,
        private readonly string $name,
        private readonly ?string $parentId = null
    ) {
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getParentId(): ?string
    {
        return $this->parentId;
    }
}
