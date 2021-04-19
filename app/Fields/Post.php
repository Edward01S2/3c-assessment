<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Post extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $post = new FieldsBuilder('post', [
            'hide_on_screen' => [
                'content_editor',
                'the_content',
            ]
        ]);

        $post
            ->setLocation('post_type', '==', 'post');

        $post
            ->addCheckbox('level', [
                'choices' => [
                    'beginner' => 'Beginner',
                    'intermediate' => 'Intermediate',
                    'advanced' => 'Advanced',
                ],
            ])
            ->addTrueFalse('3CU?')
            ->addLink('link')
            // ->addText('location', [
            //     'instructions' => 'Use only with category "Success"'
            // ]);
            ->addTextarea('excerpt')
            ->addImage('logo');

        return $post->build();
    }
}
