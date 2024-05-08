<?php

declare(strict_types=1);

namespace App\Api\Image\Upload\Request;

use Dnovikov32\HttpProcessBundle\Request\ApiRequestInterface;
use Symfony\Component\Validator\Constraints as Assert;

final class Request implements ApiRequestInterface
{
    #[Assert\Uuid(strict: false)]
    private mixed $id = null;

    #[Assert\NotNull]
    #[Assert\Type('string')]
    private mixed $name;

    #[Assert\Uuid(strict: false)]
    private mixed $parentId = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(mixed $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(mixed $name): void
    {
        $this->name = $name;
    }

    public function getParentId(): ?string
    {
        return $this->parentId;
    }

    public function setParentId(mixed $parentId): void
    {
        $this->parentId = $parentId;
    }
}
