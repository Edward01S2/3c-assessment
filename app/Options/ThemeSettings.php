<?php

namespace App\Options;

use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

use App\Fields\Partials\GForm;

class ThemeSettings extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Theme Settings';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Theme Settings';

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $themeSettings = new FieldsBuilder('theme_settings');

        $themeSettings
        ->addTab('Logos')
            ->addImage('Logo')
            // ->addImage('Logo Alt')
        ->addTab('Scripts')
            ->addTextarea('header_scripts', [
                'label' => 'Header Scripts',
                'rows' => '15'
            ])
            ->addTextarea('footer_scripts', [
                'label' => 'Footer Scripts',
                'rows' => '15'
            ])
        ->addTab('Header')
        ->addTab('Popup')
            ->addWysiwyg('popup_content')
        ->addTab('3CU')
            ->addText('3CU_title')
            ->addWysiwyg('3CU_content')
            ->addFields($this->get(GForm::class))
        ->addTab('Footer')
            ->addText('copyright')
        ->addTab('Social')
            ->addRepeater('social')
                ->addImage('icon')
                ->addUrl('url')
                // ->addColorPicker('bg')
            ->endRepeater();

        return $themeSettings->build();
    }
}
