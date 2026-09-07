<?php

declare(strict_types=1);

namespace Ailos\Sdk;

use Ailos\Sdk\Cobranca\Cobranca;
use Ailos\Sdk\Cobranca\Context\CobrancaContext;

final class Ailos
{
    public function cobranca(CobrancaContext $context): Cobranca
    {
        return new Cobranca($context);
    }
}
