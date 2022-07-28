<?php

namespace Aerni\LivewireForms\Fields\Properties;

trait WithInstructions
{
    protected function instructionsProperty(): ?string
    {
        return $this->translate('instructions');
    }
}
