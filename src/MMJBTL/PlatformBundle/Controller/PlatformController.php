<?php

namespace MMJBTL\PlatformBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MMJBTL\PlatformBundle\Form\SearchType;

class PlatformController extends Controller
{

    public function indexAction() {
        return $this->render( 'PlatformBundle:Platform:index.html.twig' );
    }


    public function albumsAction( $sort , $choice, Request $request) {

        $em = $this
        ->getDoctrine()
        ->getManager();

        $album_repo = $em
        ->getRepository( 'PlatformBundle:Album' );

        $form = $this->get('form.factory')->create(new SearchType);

        if(is_null($choice)){

            if ($form->handleRequest($request)->isValid()) {
                $result = $form->get('search')->getData();
                $choice = $result;
            }
            else{
                $result = null;
            }
        }
        else{
            $result = $choice;
        }

        $listAlbums = $album_repo
        ->getAlbums( $sort , $result);

        $nbAlbums = count($listAlbums);

        return $this->render( 'PlatformBundle:Platform:albums.html.twig', array(
                'listAlbums' => $listAlbums,
                'form' => $form->createView(),
                'sort' => $sort,
                'choice' => $choice,
                'nbAlbums' => $nbAlbums,
            ) );
    }
}
