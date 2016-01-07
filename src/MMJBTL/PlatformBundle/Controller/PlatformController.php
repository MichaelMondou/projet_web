<?php

namespace MMJBTL\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlatformController extends Controller
{

    public function indexAction()
    {
        return $this->render('PlatformBundle:Platform:index.html.twig');
    }


    public function albumsAction()
    {
        $em = $this
            ->getDoctrine()
            ->getManager();

        $repo = $em
            ->getRepository('PlatformBundle:Album');

        $listAlbumsByName = $repo
            ->getAlbumsByName();

        return $this->render('PlatformBundle:Platform:albums.html.twig', array(
            'listAlbumsByName'           => $listAlbumsByName,
        ));
    }
}
