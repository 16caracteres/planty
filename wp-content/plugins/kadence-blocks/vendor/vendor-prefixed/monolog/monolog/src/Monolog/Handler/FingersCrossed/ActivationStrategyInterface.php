<?php
/**
 * @license MIT
 *
 * Modified by kadencewp on 10-January-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */ declare(strict_types=1);

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KadenceWP\KadenceBlocks\Monolog\Handler\FingersCrossed;

/**
 * Interface for activation strategies for the FingersCrossedHandler.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * @phpstan-import-type Record from \Monolog\Logger
 */
interface ActivationStrategyInterface
{
    /**
     * Returns whether the given record activates the handler.
     *
     * @phpstan-param Record $record
     */
    public function isHandlerActivated(array $record): bool;
}
