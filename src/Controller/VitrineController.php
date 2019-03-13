<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 04/03/19
 * Time: 17:32
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VitrineController extends AbstractController
{
    /**
     * @Route(path="/", name="vitrine_home")
     */
    public function home()
    {
        return $this->render('Vitrine/home.html.twig');
    }
}