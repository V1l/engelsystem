<?php

namespace Engelsystem\EventSpecific;

use Engelsystem\Helpers\Translation\Translator as EngelsystemTranslator;

class Translator extends EngelsystemTranslator
{
    /** @var array */
    protected $replacements = [
        // EN
        'Supporter' => 'Chief',
        'T-Shirt' => 'Ticket-Pfand',
        'Shirt' => 'Ticket-Pfand',
        'Ticket größe' => 'Ticket-Pfand',


        // DE
        
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