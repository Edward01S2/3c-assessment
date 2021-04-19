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
            ->addText('location')
            ->addTextarea('excerpt')
            ->addText('link');

        return $story->build();
    }
}
