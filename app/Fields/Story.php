<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Story extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $story = new FieldsBuilder('story');

        $story
            ->setLocation('post_type', '==', 'story');

        $story
            ->addSelect('industry', [
                'choices' => [
                    'travel' => 'Travel',
                    'art' => 'Art',
                    'retail' => 'Retail',
                    'services' => 'Services',
                    'manufacturing' => 'Manufacturing',
                    'food-services' => 'Food Services',
                    'healthcare' => 'Healthcare',
                    'other' => 'Other'
                ],
                'multiple' => 1,
            ])
            ->addText('location')
            ->addTextarea('excerpt')
            ->addText('link');

        return $story->build();
    }
}
