<?php 

namespace App\Controller\Api;

use App\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/v1", name="api_v1_usuario_")
 */
class UsuarioController extends AbstractController
{   
    /**
     * @Route("/listar", methods={"GET"}, name="lista")
     */
    public function listar(): JsonResponse
    {   
        $doctrine = $this->getDoctrine()->getRepository(Usuario::class);
        $data  = $doctrine->findAll();
        return new  JsonResponse($data);
    }

    /**
     * @Route("/cadastrar", methods={"POST"}, name="cadastra")
     */
    public function cadastra(Request $request): JsonResponse
    {
        $data = $request->request->all();

        $usuario = new Usuario;
        $usuario->setNome($data['nome']);
        $usuario->setEmail($data['email']);

        $doctrine = $this->getDoctrine()->getManager();
        $doctrine->persist($usuario);
        $doctrine->flush();

        if($usuario->getId()){
            return new JsonResponse("ok");
        }else{
            return new JsonResponse("erro", 400);
        }
        
    }
}

?>
