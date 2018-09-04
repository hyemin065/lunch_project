<?php
/**
 * Created by PhpStorm.
 * User: hyemin
 * Date: 2018-08-21
 * Time: 오후 3:21
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {

        return $this->render('genus/show.html.twig', [
            'name' => $genusName,
        ]);

    }

    /**
     * @Route("/genus/{genusName}/notes", name="genus_show_notes")
     * @Method("GET")
     */
    public function getNotesAction()
    {
        $notes = [
            ['id' => 1, 'username' => 'aquapelham', 'note' => 'octopus'],
            ['id' => 2, 'username' => 'gde', 'note' => 'zbffefwvcdvc'],
            ['id' => 3, 'username' => 'adf', 'note' => 'ocadfjliefnvndfghtyh']
        ];

        $data = [
            'notes' => $notes,
        ];

        return new JsonResponse($data);
    }
}