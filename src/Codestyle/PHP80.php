<?php

declare(strict_types=1);

namespace BurdaDirect\Codestyle;

use K10r\Codestyle\DefaultRules;

final class PHP80 extends DefaultRules
{
  /**
   * {@inheritdoc}
   */
  public static function getRules(): array
  {
    return array_merge(\K10r\Codestyle\PHP74::getRules(), OverwriteRules80::getOverwriteRules(), [
      '@PHP80Migration' => true,
    ]);
  }
}
