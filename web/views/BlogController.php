<?php
namespace App\Controller;

// ...
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
  /*
    *  @Route("/", name="index")
     */
    public function index()
    {
        // ...
    }

/*
  *    @Route("/matches/{slug}", name="matches")
*/
    public function show(string $slug)
    {
        // ...
    }
}
?>
