<?php

namespace BurdaDirect\Codestyle;

class OverwriteRules74 extends DefaultRuleOverwrites
{
  public const RULES_OVERWRITE = [];

  public static function getOverwriteRules(): array
  {
    return array_merge(DefaultRuleOverwrites::getOverwriteRules(), self::RULES_OVERWRITE);
  }
}