<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\Girl;

class ApiController extends Controller
{
    /**
     * @Route("/api/girls")
     * @Method("GET")
     */
    public function getAllAction()
    {
        $result = $this
                    ->get("doctrine")
                    ->getManager()
                    ->getRepository("AppBundle:Girl")
                    ->findAll();

        return $this->json($result);
    }

    /**
     * @Route("/api/girl/{id}")
     * @Method("GET")     
     */
    public function getGirlAction($id)
    {
        $result = $this
                    ->get("doctrine")
                    ->getManager()
                    ->getRepository("AppBundle:Girl")
                    ->find($id);

        return $this->json($result);
    }

}
