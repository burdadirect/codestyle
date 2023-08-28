<?php

declare(strict_types=1);

namespace BurdaDirect\Codestyle;

use K10r\Codestyle\DefaultRules;

final class PHP82 extends DefaultRules
{
  /**
   * {@inheritdoc}
   */
  public static function getRules(): array
  {
    return array_merge(\K10r\Codestyle\PHP81::getRules(), OverwriteRules82::getOverwriteRules(), [
      '@PHP82Migration' => true,
    ]);
  }
}
