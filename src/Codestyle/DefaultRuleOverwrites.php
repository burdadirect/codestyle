<?php

namespace BurdaDirect\Codestyle;

abstract class DefaultRuleOverwrites
{
  public const RULES_OVERWRITE = [];

  public static function getOverwriteRules(): array
  {
    return self::RULES_OVERWRITE;
  }
}