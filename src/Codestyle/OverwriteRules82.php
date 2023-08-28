<?php

namespace BurdaDirect\Codestyle;

class OverwriteRules82 extends DefaultRuleOverwrites
{
    public const RULES_OVERWRITE = [
      // disable risky types
      'phpdoc_to_return_type' => false,
      'void_return'           => false,
      'declare_strict_types'  => false,
      // change braces to reduce initial change set
      'class_attributes_separation' => [
        'elements' => [
          'const'        => 'only_if_meta',
          'method'       => 'one',
          'property'     => 'one',
          'trait_import' => 'none',
          'case'         => 'none',
        ],
      ],
      'ordered_class_elements' => false,
      'curly_braces_position'  => [
        'allow_single_line_anonymous_functions'     => true,
        'allow_single_line_empty_anonymous_classes' => true,
        'classes_opening_brace'                     => 'next_line_unless_newline_at_signature_end', // next_line_unless_newline_at_signature_end
        'functions_opening_brace'                   => 'next_line_unless_newline_at_signature_end', // next_line_unless_newline_at_signature_end
      ],
    ];

    public static function getOverwriteRules(): array
    {
        return array_merge(OverwriteRules81::getOverwriteRules(), self::RULES_OVERWRITE);
    }
}
