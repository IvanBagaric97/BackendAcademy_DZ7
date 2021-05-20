<?php


namespace App\Controller;
use \Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Genre;

class AddController extends AbstractController
{
    /**
     * @Route("/add", name = "add")
     * @return Response
     */
    public function add() : Response{
        $genres = $this->getDoctrine()->getRepository(Genre::class)->findAll();
        $years = range(1900, 2021);
        $years = array_reverse($years);
        return $this->render("add.html.twig", ["genres"=>$genres, "years"=>$years]);
    }
}