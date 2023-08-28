<?php

namespace BurdaDirect\Codestyle;

class OverwriteRules80 extends DefaultRuleOverwrites
{
  public const RULES_OVERWRITE = [];

  public static function getOverwriteRules(): array
  {
    return array_merge(OverwriteRules74::getOverwriteRules(), self::RULES_OVERWRITE);
  }
}