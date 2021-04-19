<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Stories extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Stories';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Stories block.';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'acf';

    /**
     * The block icon.
     *
     * @var string|array
     */
    public $icon = 'editor-ul';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = [];

    /**
     * The block post type allow list.
     *
     * @var array
     */
    public $post_types = [];

    /**
     * The parent block type allow list.
     *
     * @var array
     */
    public $parent = [];

    /**
     * The default block mode.
     *
     * @var string
     */
    public $mode = 'edit';

    /**
     * The default block alignment.
     *
     * @var string
     */
    public $align = 'wide';

    /**
     * The default block text alignment.
     *
     * @var string
     */
    public $align_text = '';

    /**
     * The default block content alignment.
     *
     * @var string
     */
    public $align_content = '';

    /**
     * The supported block features.
     *
     * @var array
     */
    public $supports = [
        'align' => true,
        'align_text' => false,
        'align_content' => false,
        'anchor' => false,
        'mode' => false,
        'multiple' => true,
        'jsx' => true,
    ];

    /**
     * The block styles.
     *
     * @var array
     */
    public $styles = [
        [
            'name' => 'light',
            'label' => 'Light',
            'isDefault' => true,
        ],
        [
            'name' => 'dark',
            'label' => 'Dark',
        ]
    ];

    /**
     * The block preview example data.
     *
     * @var array
     */
    public $example = [
        'items' => [
            ['item' => 'Item one'],
            ['item' => 'Item two'],
            ['item' => 'Item three'],
        ],
    ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'title' => get_field('title'),
            'stories' => $this->getStories(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $stories = new FieldsBuilder('stories');

        $stories
            ->addText('title');

        return $stories->build();
    }

    public function getStories() {
        $args = array(
            'post_type' => 'story',
            'post_status' => 'publish',
            'posts_per_page' => '-1',
        );

        $posts = new \WP_Query($args);

        //return $posts;

        $data = [];

        while($posts->have_posts()): $posts->the_post();
        
            $id = get_the_ID();

            //return $term;

            $data[] = [
                'title' => get_the_title(),
                'location' => get_field('location', $id),
                'excerpt' => get_field('excerpt', $id),
                'image' => get_the_post_thumbnail_url(),
                'link' => get_field('link', $id),
            ];

        endwhile;
        wp_reset_query();

        return $data;
    }

}
