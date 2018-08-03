<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model\Response\Tracking;

use Dhl\Express\Api\Data\Response\Tracking\PieceEventInterface;
use Dhl\Express\Api\Data\Response\Tracking\PieceInterface;

/**
 * Tracking piece.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class Piece implements PieceInterface
{
    /**
     * AWB number
     *
     * @var int
     */
    private $awbNumber;

    /**
     * License
     *
     * @var string
     */
    private $license;

    /**
     * Piece events
     *
     * @var PieceEventInterface[]
     */
    private $pieceEvents;

    /**
     * Piece constructor.
     * @param int $awbNumber
     * @param string $license
     * @param PieceEventInterface[] $pieceEvents
     */
    public function __construct(int $awbNumber, string $license, array $pieceEvents)
    {
        $this->awbNumber = $awbNumber;
        $this->license = $license;
        $this->pieceEvents = $pieceEvents;
    }

    /**
     * Returns the AWB number
     *
     * @return int
     */
    public function getAwbNumber(): int
    {
        return $this->awbNumber;
    }

    /**
     * Returns the license
     *
     * @return string
     */
    public function getLicense(): string
    {
        return $this->license;
    }

    /**
     * Returns the piece events
     *
     * @return PieceEventInterface[]
     */
    public function getPieceEvents(): array
    {
        return $this->pieceEvents;
    }
}