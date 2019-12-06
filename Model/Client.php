<?php

declare(strict_types=1);

namespace Trikoder\Bundle\OAuth2Bundle\Model;

class Client
{
    /**
     * @var string
     */
    private $identifier;

    /**
     * @var string
     */
    private $secret;

    /**
     * @var string
     */
    private $name;

    /**
     * @var RedirectUri[]
     */
    private $redirectUris = [];

    /**
     * @var Grant[]
     */
    private $grants = [];

    /**
     * @var Scope[]
     */
    private $scopes = [];

    /**
     * @var bool
     */
    private $active = true;


    public function __construct(string $identifier, string $secret, string $name = "")
    {
        $this->identifier = $identifier;
        $this->secret = $secret;
        $this->name = $name;
    }

    public function __toString(): string
    {
        return $this->getIdentifier();
    }

    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    public function getSecret(): string
    {
        return $this->secret;
    }

    /**
     * @return RedirectUri[]
     */
    public function getRedirectUris(): array
    {
        return $this->redirectUris;
    }

    public function setRedirectUris(RedirectUri ...$redirectUris): self
    {
        $this->redirectUris = $redirectUris;

        return $this;
    }

    /**
     * @return Grant[]
     */
    public function getGrants(): array
    {
        return $this->grants;
    }

    public function setGrants(Grant ...$grants): self
    {
        $this->grants = $grants;

        return $this;
    }

    /**
     * @return Scope[]
     */
    public function getScopes(): array
    {
        return $this->scopes;
    }

    public function setScopes(Scope ...$scopes): self
    {
        $this->scopes = $scopes;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }
}
