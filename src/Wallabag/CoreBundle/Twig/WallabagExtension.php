<?php

namespace Wallabag\CoreBundle\Twig;

class WallabagExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('removeWww', [$this, 'removeWww']),
        ];
    }

    public function removeWww($url)
    {
        return preg_replace('/^www\./i', '', $url);
    }

    public function getName()
    {
        return 'wallabag_extension';
    }
}
