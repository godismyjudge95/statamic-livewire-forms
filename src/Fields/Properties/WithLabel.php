<?php

namespace Aerni\LivewireForms\Fields\Properties;

trait WithLabel
{
    protected function labelProperty(): ?string
    {
        return $this->translate('display');
    }
}
