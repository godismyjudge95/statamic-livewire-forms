<?php

namespace Aerni\LivewireForms\Fields\Properties;

trait WithInlineLabel
{
    protected function inlineLabelProperty(): ?string
    {
        return $this->translate('inline_label');
    }
}
