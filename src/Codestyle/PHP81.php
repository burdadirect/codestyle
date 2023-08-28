<?php

declare(strict_types=1);

namespace BurdaDirect\Codestyle;

use K10r\Codestyle\DefaultRules;

final class PHP81 extends DefaultRules
{
  /**
   * {@inheritdoc}
   */
  public static function getRules(): array
  {
    return array_merge(\K10r\Codestyle\PHP80::getRules(), OverwriteRules81::getOverwriteRules(), [
      '@PHP82Migration' => true,
    ]);
  }
}
