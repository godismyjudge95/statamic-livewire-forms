<?php

namespace Aerni\LivewireForms\Fields\Properties;

trait WithPlaceholder
{
    protected function placeholderProperty(): ?string
    {
        return $this->translate('placeholder');
    }
}
