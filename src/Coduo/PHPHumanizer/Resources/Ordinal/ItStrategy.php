<?php

namespace Coduo\PHPHumanizer\Resources\Ordinal;

use Coduo\PHPHumanizer\Number\Ordinal\StrategyInterface;

final class ItStrategy implements StrategyInterface
{
    /**
     * {@inheritdoc}
     */
    public function isPrefix()
    {
        return false;
    }

    /** {@inheritdoc} */
    public function ordinalIndicator($number)
    {
        return 'o';
    }
}
