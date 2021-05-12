<?php

namespace App\FormFields;

use TCG\Voyager\FormFields\AbstractHandler;

class DetailsFormField extends AbstractHandler
{
    protected $codename = 'details';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('formfields.details', [
            'row' => $row,
            'options' => $options,
            'dataType' => $dataType,
            'dataTypeContent' => $dataTypeContent
        ]);
    }
}