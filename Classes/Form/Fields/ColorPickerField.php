<?php
namespace Romm\SiteFactory\Form\Fields;

    /*
     * 2016 Romain CANON <romain.hydrocanon@gmail.com>
     *
     * This file is part of the TYPO3 Site Factory project.
     * It is free software; you can redistribute it and/or modify it
     * under the terms of the GNU General Public License, either
     * version 3 of the License, or any later version.
     *
     * For the full copyright and license information, see:
     * http://www.gnu.org/licenses/gpl-3.0.html
     */

/**
 * A class allowing to manage the fields configuration.
 *
 * See $allowedFieldTypes, $requiredFieldsConfiguration and $translatedFields
 * for further information.
 */
class ColorPickerField extends TextField
{

    /** @var mixed The field type of the field : text, checkbox, select, etc.. */
    protected $fieldType = AbstractField::FIELD_TYPE_TEXT;

    /** @var array Array containing the JavaScript files which will be imported. */
    protected $javaScriptFilesNewAction = [
        'EXT:site_factory/Resources/Public/JavaScript/Fields/SiteFactory.Field.ColorPicker.js'
    ];

    /** @var array Array containing the default rules for the field. */
    protected $localValidation = [
        'hexadecimal' => [
            'validator' => 'Romm\\SiteFactory\\Form\\Validation\\HexadecimalValidator',
            'error'     => 'form.field.error.picker_color'
        ]
    ];
}
