<?php

namespace Caecom\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class DefaultController extends Controller
{
    /**
     * @Template("DemoBundle:Default:index.html.twig")
     */
    public function indexAction()
    {
        return array();
    }
}
