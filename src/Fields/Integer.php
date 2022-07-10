<?php

namespace Aerni\LivewireForms\Fields;

use Aerni\LivewireForms\Fields\Properties\WithAutocomplete;
use Aerni\LivewireForms\Fields\Properties\WithInputType;
use Aerni\LivewireForms\Fields\Properties\WithPlaceholder;

class Integer extends Field
{
    use WithAutocomplete;
    use WithInputType;
    use WithPlaceholder;

    const VIEW = 'input';

    public function inputTypeProperty(): string
    {
        return $this->field->get('input_type', 'number');
    }
}
