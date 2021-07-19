<?php 
namespace App\Controller;

use App\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", name="web_usuario_")
 */
class UsuarioController extends AbstractController
{

    /**
     * @Route("/", methods={"GET"}, name="index")
     */
    public function index(): Response 
    {
        return $this->render("Usuario/form.html.twig");
    }

    /**
     * @Route("/salvar", methods={"POST"}, name="salvar")
     */
    public function salvar(Request $request): Response
    {
        $data = $request->request->all();

        $usuario = new Usuario;
        $usuario->setNome($data['nome']);
        $usuario->setEmail($data['email']);

        $doctrine = $this->getDoctrine()->getManager();
        $doctrine->persist($usuario);
        $doctrine->flush();

        if($usuario->getId()){
            return $this->render('Usuario/sucesso.html.twig', ['fulano' => $request->get('nome')]);
        }else{
            return $this->render('Usuario/erro.html.twig', ['fulano' => $request->get('nome')]);
        }
        
    }

}

?>
