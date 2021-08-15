<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Resources extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Resources';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Resources block.';

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
            'cats' => $this->categories(),
            'posts' => $this->getPosts(),
            'content' => $this->getContent(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $resources = new FieldsBuilder('resources');

        $resources
            ->addText('title');
            

        return $resources->build();
    }

    public function categories() {
        $cats = get_terms([
            'taxonomy' => 'category',
            'hide_empty' => false,
        ]);

        return $cats;
    }

    public function getContent() {
        $content = (isset($_GET['con']) || !(empty($_GET['con']))) ? $_GET['con'] : 'gwgr';
        
            
        return $content;
    }

    public function getPosts() {
        $content = (isset($_GET['con']) || !(empty($_GET['con']))) ? $_GET['con'] : 'gwgr';
        $level = (isset($_GET['lvl']) || !(empty($_GET['lvl']))) ? $_GET['lvl'] : '1';

        switch($content) {
            case 'so' : {
                $content = 'sell-online';
                break;
            }
            case 'gwgr' : {
                $content = 'grow-with-google-resources';
                break;
            }
            case 'rmc' : {
                $content = 'reach-more-customers';
                break;
            }
            case 'fo' : {
                $content = 'found-online';
                break;
            }
            case 'wr' : {
                $content = 'work-remotely';
                break;
            }
        }

        switch($level) {
            case 1 : {
                $level = 'beginner';
                break;
            }
            case 2 : {
                $level = 'intermediate';
                break;
            }
            case 3 : {
                $level = 'advanced';
                break;
            }
        }

        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => '-1',
            'category_name' => $content,
            'meta_query' => array(
                'relation' => 'AND',
                array(
                    'key' => 'level',
                    'value' => $level,
                    'compare' => 'LIKE'			
                ),
            ),
        );

        $posts = new \WP_Query($args);

        //return $posts;

        $data = [];

        while($posts->have_posts()): $posts->the_post();
        
            $id = get_the_ID();

            $posttags = get_the_tags();
            
            if($posttags) { 
                $tags = implode(' ', wp_list_pluck($posttags, 'name'));
            }

            //return $term;

            $data[] = [
                'title' => get_the_title(),
                'excerpt' => get_field('excerpt', $id),
                'image' => get_the_post_thumbnail_url(),
                'link' => get_field('link', $id),
                'logo' => get_field('logo', $id),
                'uni' => get_field('3CU?', $id),
                'tags' => isset($tags) ? $tags : '',
            ];



        endwhile;
        wp_reset_query();

        return $data;

    }

    /**
     * Assets to be enqueued when rendering the block.
     *
     * @return void
     */
    public function enqueue()
    {
        //
    }
}
