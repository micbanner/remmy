<?php

namespace Remmy\BackOfficeBundle\Controller;

use Remmy\BackOfficeBundle\Entity\Category;
use Remmy\BackOfficeBundle\Entity\Color;
use Remmy\BackOfficeBundle\Entity\FosUser;
use Remmy\BackOfficeBundle\Entity\InfosPayement;
use Remmy\BackOfficeBundle\Entity\OrderHeader;
use Remmy\BackOfficeBundle\Entity\OrderLine;
use Remmy\BackOfficeBundle\Entity\Product;
use Remmy\BackOfficeBundle\Entity\ProductHasColor;
use Remmy\BackOfficeBundle\Entity\ProductHasStock;
use Remmy\BackOfficeBundle\Entity\ProductStock;
use Remmy\BackOfficeBundle\Entity\Size;
use Remmy\BackOfficeBundle\Entity\Statut;
use Remmy\BackOfficeBundle\Entity\UserOrder;

class GetRepo
{
    public function serviceRepository()
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('RemmyBackOfficeBundle:Category')->findAll();
        $productsRepo = $em->getRepository('RemmyBackOfficeBundle:Product');
        $productStocksRepo = $em->getRepository('RemmyBackOfficeBundle:ProductStock');
        $productHasStocksRepo = $em->getRepository('RemmyBackOfficeBundle:ProductHasStock');
        $productCategoryRepo = $em->getRepository('RemmyBackOfficeBundle:Category');

        return array(
            'categories' => $categories,
            'productsRepo' => $productsRepo,
            'productStocksRepo' => $productStocksRepo,
            'productHasStocksRepo' => $productHasStocksRepo,
            'productCategoryRepo' => $productCategoryRepo,
        );
    }
}