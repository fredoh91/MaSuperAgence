<?php
namespace App\Controller;

use App\Entity\Property;
use App\Repository\PropertyRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

Class PropertyController extends AbstractController
{   
    private $repository;
    public function __construct(PropertyRepository $repository, ObjectManager $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }
    /**
     * @Route("/biens", name= "property.index")
     * @return Response 
     */
    public function index () : Response
    {   
//        $property=$this->repository->findAllVisible();
        //dump($property);
//        $property[0]->setSold(true);
//        $this->em->flush();
        return $this->render('property/index.html.twig', [
            'current_menu' => 'properties'
        ]);
        
//        $repository = $this->getDoctrine()->getRepository(Property::class);
//        dump($repository);
//        $property = new Property();
//        $property->setTitle('Mon premier bien')
//                ->setPrice(200000)
//                ->setRooms(4)
//                ->setBedrooms(3)
//                ->setDescription('Une petite description')
//                ->setSurface(60)
//                ->setFloor(4)
//                ->setHeat(1)
//                ->setCity('Montpellier')
//                ->setAddress('5 boulevard Gambetta')
//                ->setPostalCode('34000');
//        $em=$this->getDoctrine()->getManager();
//        $em->persist($property);
//        $em->flush();
//        return new Response('les biens');
    }
}