<?php

namespace Acme\Bundle\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PostController extends Controller
{
    /**
     * @Route("/post")
     */
    public function postAction()
    {
        return $this->render('AcmeBundleBlogBundle:Post:post.html.twig', array(
            // ...
        ));
    }
    
    /**
     * @Route("/post2")
     */
    public function post2Action()
    {
        $test = 1111;
        $test2 = 222;
        
        $arr = array(); 
        for ($i = 0; $i < 100; $i++){            
            $arr[] = array('id' => $i, 'name' => $i, 'rar' => $i);            
        }
         
        //var_dump($arr);
        
        return $this->render('AcmeBundleBlogBundle:Post:post.html.twig', array(
            'test2' => 'test2', 'test' => $test, 'ArrNum' => $arr
        ));
        
    }

}
