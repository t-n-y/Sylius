<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Component\Order\Repository;

use Sylius\Component\Order\Model\OrderItemInterface;
use Sylius\Component\Resource\Repository\RepositoryInterface;

/**
 * @template T of OrderItemInterface
 *
 * @extends RepositoryInterface<T>
 */
interface OrderItemRepositoryInterface extends RepositoryInterface
{
    public function findOneByIdAndCartId($id, $cartId): ?OrderItemInterface;

    public function findOneByIdAndCartTokenValue($id, $tokenValue): ?OrderItemInterface;
}
