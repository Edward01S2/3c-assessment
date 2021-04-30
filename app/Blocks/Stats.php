<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Stats extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Stats';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Stats block.';

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
            'stats' => $this->stats(),
            'stats_title' => get_field('stats title'),
            'content' => get_field('content'),
            'info' => get_field('info'),
            'logo' => get_field('Logo', 'options'),
            'title' => get_field('title'),
            'score' => $this->score(),
            'ind' => $this->getInd(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $stats = new FieldsBuilder('stats');

        $stats
            ->addText('title')
            ->addText('content')
            ->addText('stats title')
            ->addRepeater('stats', [
                'collapsed' => 'industry',
            ])
                ->addSelect('industry', [
                    'choices' => [
                        'none' => 'None',
                        'travel' => 'Travel',
                        'art' => 'Art',
                        'retail' => 'Retail',
                        'services' => 'Services',
                        'manufacturing' => 'Manufacturing',
                        'food-services' => 'Food Services',
                        'healthcare' => 'Healthcare',
                        'other' => 'Other'
                    ],
                ])
                ->addText('stat 1')
                    ->setWidth('20')
                ->addText('stat 2')
                    ->setWidth('20')
                ->addText('stat 3')
                    ->setWidth('60')
                ->addText('stat 4')
                    ->setWidth('20')
                ->addText('stat 5')
                    ->setWidth('20')
                ->addText('stat 6')
                    ->setWidth('60')
            ->endRepeater()
            ->addRepeater('info')
                ->addText('description')
                ->addImage('image')
            ->endRepeater();

        return $stats->build();
    }

    public function stats() {
        $industry = (isset($_GET['ind']) || !(empty($_GET['ind']))) ? $_GET['ind'] : 'other';

        $stats = get_field('stats');

        foreach($stats as $stat) {
            if($stat['industry'] == $industry) {
                return $stat;
            }
        }

    }

    public function getInd() {
        $industry = (isset($_GET['ind']) || !(empty($_GET['ind']))) ? $_GET['ind'] : 'other';

        switch($industry) {
            case 'other': {
                return 'other';
                break;
            }
            case 'travel': {
                return 'travel';
                break;
            }
            case 'art': {
                return 'arts, entertainment, and recreation';
                break;
            }
            case 'retail': {
                return 'retail';
                break;
            }
            case 'services': {
                return 'services';
                break;
            }
            case 'manufacturing': {
                return 'manufacturing';
                break;
            }
            case 'food-services': {
                return 'food services';
                break;
            }
            case 'healthcare': {
                return 'healthcare';
                break;
            }
        }
    }

    public function score()
    {
        $score = (isset($_GET['sc']) || !(empty($_GET['sc']))) ? $_GET['sc'] : 0;

        if($score <= 4) {
            $width = 14.3;
        }
        elseif($score > 4 && $score <= 9) {
            $width = 28.6;
        }
        elseif($score > 9 && $score <= 14) {
            $width = 42.9;
        }
        elseif($score > 14 && $score <= 24) {
            $width = 57.2;
        }
        elseif($score > 24 && $score <= 29) {
            $width = 71.5;
        }
        elseif($score > 29 && $score <= 34) {
            $width = 85.8;
        }
        elseif($score > 34) {
            $width = 100;
        }
        else {
            $width = 0;
        }

        return $width;
    }
}
