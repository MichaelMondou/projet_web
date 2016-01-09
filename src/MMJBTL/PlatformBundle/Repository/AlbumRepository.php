<?php

namespace MMJBTL\PlatformBundle\Repository;

use Doctrine\ORM\EntityRepository;

class AlbumRepository extends EntityRepository
{


    public function getAlbums( $sort, $result ) {

        $qb = $this->createQueryBuilder( 'a' );

        $qb->join( 'a.editeur', 'e' )
        ->addSelect( 'e' )
        ->join( 'a.genre', 'g' )
        ->addSelect( 'g' );

        switch ($sort) {
            case 'alpha_asc':
                $qb->orderby( 'a.titreAlbum' );
                break;
            case 'alpha_desc':
                $qb->orderby( 'a.titreAlbum', 'DESC' );
                break;
            case 'year_asc':
                $qb->orderby( 'a.anneeAlbum' );
                break;
            case 'year_desc':
                $qb->orderby( 'a.anneeAlbum', 'DESC' );
                break;
            case 'editor_asc':
                $qb->orderby( 'e.nomEditeur' );
                break;
            case 'editor_desc':
                $qb->orderby( 'e.nomEditeur', 'DESC' );
                break; 
            case 'style_asc':
                $qb->orderby( 'g.libelleAbrege' );
                break;   
            case ')))':
                $qb->orderby( 'g.libelleAbrege', 'DESC' );
                break;      
        }

        if (!is_null( $result )){
            $result = '%'.$result.'%';
            $qb
            ->andWhere('a.titreAlbum LIKE :result')
            ->setParameter('result', $result);
        }


        $listAlbums = $qb
        ->getQuery()
        ->getResult()
        ;

        return $listAlbums;
    }

    public function photo( $album ) {
        $image = stream_get_contents( $album->getPochette() );
        $image = pack( "H*", $image );
        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->headers->set( 'Content-type', 'image/jpeg' );
        $response->headers->set( 'Content-Transfer-Encoding', 'binary' );
        $response->setContent( $image );
        return $response;
    }
}
