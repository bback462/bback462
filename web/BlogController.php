<?php
namespace App\Controller;

// ...
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="blog_index")
     */
    public function index()
    {
        // ...
    }

    /**
     * @Route("/article/{slug}", name="blog_post")
     */
    public function show(string $slug)
    {
        // ...
    }
}
?>
