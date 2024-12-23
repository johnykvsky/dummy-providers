<?php

declare(strict_types=1);

namespace DummyGenerator\Provider\en_GB;

use DummyGenerator\Definitions\DefinitionInterface;
use DummyGenerator\Definitions\Extension\AddressExtensionInterface;
use DummyGenerator\Definitions\Extension\CompanyExtensionInterface;
use DummyGenerator\Definitions\Extension\InternetExtensionInterface;
use DummyGenerator\Definitions\Extension\PersonExtensionInterface;
use DummyGenerator\Definitions\Extension\PhoneNumberExtensionInterface;
use DummyGenerator\Provider\ProviderPackInterface;

readonly class DefinitionPack implements ProviderPackInterface
{
    /**
     * @var array<string, class-string<DefinitionInterface>>
     */
    private array $definitions;

    public function __construct()
    {
        $this->definitions = [
            AddressExtensionInterface::class => Address::class,
            CompanyExtensionInterface::class => Company::class,
            InternetExtensionInterface::class => Internet::class,
            PersonExtensionInterface::class => Person::class,
            PhoneNumberExtensionInterface::class => PhoneNumber::class,
        ];
    }

    public function all(): array
    {
        return $this->definitions;
    }
}
