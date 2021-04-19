<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
            'logo' => get_field('Logo', 'options'),
            'popup' => get_field('popup_content', 'options'),
            'cu_content' => get_field('3CU_content', 'options'),
            'cu_title' => get_field('3CU_title', 'options'),
            'cu_form' => get_field('gravity', 'options'),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }
}
