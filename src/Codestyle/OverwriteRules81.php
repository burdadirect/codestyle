<?php

namespace BurdaDirect\Codestyle;

class OverwriteRules81 extends DefaultRuleOverwrites
{
  public const RULES_OVERWRITE = [];

  public static function getOverwriteRules(): array
  {
    return array_merge(OverwriteRules80::getOverwriteRules(), self::RULES_OVERWRITE);
  }
}