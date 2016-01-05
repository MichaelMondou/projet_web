<?php
/**
 * Created by PhpStorm.
 * User: Mika
 * Date: 04/01/2016
 * Time: 11:28
 */

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
            ->getEntityManager();
        $repo = $em
            ->getRepository('PlatformBundle:Album');
        $listAlbums = $repo
            ->getAlbumsByName();


        return $this->render('PlatformBundle:Platform:albums.html.twig', array(
            'listAlbums'           => $listAlbums,
        ));
    }



}