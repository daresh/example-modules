<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */

declare(strict_types=1);

namespace PrestaShop\Module\DemoMultistoreForm\Form;

use PrestaShop\PrestaShop\Core\Configuration\AbstractMultistoreConfiguration;

/**
 * Handles configuration data for demo multistore configuration options.
 */
final class ContentBlockDataConfiguration extends AbstractMultistoreConfiguration
{

    /**
     * {@inheritdoc}
     */
    public function getConfiguration(): array
    {
        $return = [];

        $return['color'] = $this->configuration->get('PS_DEMO_MULTISTORE_COLOR');
        $return['italic'] = $this->configuration->get('PS_DEMO_MULTISTORE_ITALIC');
        $return['bold'] = $this->configuration->get('PS_DEMO_MULTISTORE_BOLD');

        return $return;
    }

    /**
     * {@inheritdoc}
     */
    public function updateConfiguration(array $configuration): array
    {
        $shopConstraint = $this->getShopConstraint();
        $this->updateConfigurationValue('PS_DEMO_MULTISTORE_COLOR', 'color', $configuration, $shopConstraint);
        $this->updateConfigurationValue('PS_DEMO_MULTISTORE_ITALIC', 'italic', $configuration, $shopConstraint);
        $this->updateConfigurationValue('PS_DEMO_MULTISTORE_BOLD', 'bold', $configuration, $shopConstraint);

        return [];
    }

    /**
     * @param array $configuration
     *
     * @return bool Returns true if no exception are thrown
     */
    public function validateConfiguration(array $configuration): bool
    {
        return true;
    }
}
