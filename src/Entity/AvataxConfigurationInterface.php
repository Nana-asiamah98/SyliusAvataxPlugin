<?php

declare(strict_types=1);

namespace Odiseo\SyliusAvataxPlugin\Entity;

use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TimestampableInterface;
use Sylius\Component\Resource\Model\ToggleableInterface;

interface AvataxConfigurationInterface extends
    ResourceInterface,
    ToggleableInterface,
    TimestampableInterface
{
    /**
     * @return string|null
     */
    public function getAppName(): ?string;

    /**
     * @param string|null $appName
     */
    public function setAppName(?string $appName): void;

    /**
     * @return string|null
     */
    public function getAppVersion(): ?string;

    /**
     * @param string|null $appVersion
     */
    public function setAppVersion(?string $appVersion): void;

    /**
     * @return string|null
     */
    public function getMachineName(): ?string;

    /**
     * @param string|null $machineName
     */
    public function setMachineName(?string $machineName): void;

    /**
     * @return bool|null
     */
    public function isSandbox(): ?bool;

    /**
     * @param bool|null $sandbox
     */
    public function setSandbox(?bool $sandbox): void;

    /**
     * @return string|null
     */
    public function getAccountId(): ?string;

    /**
     * @param string|null $accountId
     */
    public function setAccountId(?string $accountId): void;

    /**
     * @return string|null
     */
    public function getLicenseKey(): ?string;

    /**
     * @param string|null $licenseKey
     */
    public function setLicenseKey(?string $licenseKey): void;
}
