<?php

namespace Engelsystem\EventSpecific;

use Engelsystem\Helpers\Translation\Translator as EngelsystemTranslator;

class Translator extends EngelsystemTranslator
{
    /** @var array */
    protected $replacements = [
        // EN
        'got t-shirt' => 'has Pfand',
        'remove t-shirt' => 'remove Pfand',



        // DE
        'Supporter' => 'Chief',
        'T-Shirt' => 'Ticket-Pfand',
        'Shirt' => 'Ticket-Pfand',
        'Ticket größe' => 'Ticket-Pfand',
        'hat t-shirt' => 'hat Pfand',
        'entferne t-shirt' => 'Pfand entfernen',
    ];

    /**
     * @param string $text
     * @param array  $replace
     *
     * @return mixed|string
     */
    protected function replaceText(string $text, array $replace = [])
    {
        $text = parent::replaceText($text, $replace);

        $text = str_replace(array_keys($this->replacements), array_values($this->replacements), $text);

        return $text;
    }
}