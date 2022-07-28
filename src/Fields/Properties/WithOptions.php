<?php

namespace Aerni\LivewireForms\Fields\Properties;

trait WithOptions
{
    protected function optionsProperty(): array
    {
        return collect($this->field->get('options'))
            ->mapWithKeys(function ($value, $key) {
                return is_numeric($key)
                    ? [$value => $this->translate("options.{$key}")]
                    : [$key => $this->translate("options.{$key}")];
            })
            ->toArray();
    }
}
