<?php

namespace App\Controller;

use App\Services\Helpers;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

# this line is support register route with annotation
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class UserController
 * @package App\Controller
 *
 */
class UserController extends AbstractController
{
    /** Helpers process logic, compare, sort, etc.; */
    private $helper;

    /**
     * UserController constructor.
     * @param Helpers $helper
     */
    public function __construct(Helpers $helper)
    {
        $this->helper = $helper;
    }

    /**
     * Action list users
     *
     * @Route("/users", methods={"GET"}, name="users.index")
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {
        $view = $this->helper->view('user/index');
        $shared = [
            'page' => $request->get('page', 1)
        ];
        return $this->render($view, $shared);
    }

    /**
     * Action show form create new user
     *
     * @Route(
     *     path="/users/create",
     *     methods={"GET"},
     *     name="users.create"
     * )
     *
     * @return Response
     */
    public function create(): Response
    {
        $view = $this->helper->view('user/create');
        $shared = ['number' => 1202];
        return $this->render($view, $shared);
    }

    /**
     * Action save new user with POST method
     *
     * @Route("/users/store", methods={"POST"}, name="users.store")
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        return $this->redirectToRoute('users.index');
    }

    /**
     * Action view detail user info
     *
     * @Route("/users/detail/{id<\d+>}", methods={"GET"}, name="users.detail")
     *
     * @param int $id
     * @return Response
     */
    public function detail(int $id): Response
    {
        $view = $this->helper->view('user/detail');
        $shared = ['model' => $id];
        return $this->render($view, $shared);
    }

    /**
     * Action show form edit user with param is user_id
     *
     * @Route("/users/edit/{id<\d+>}", methods={"GET"}, name="users.edit")
     *
     * @param int $id
     * @return Response
     */
    public function edit(int $id): Response
    {
        $view = $this->helper->view('user/edit');
        $shared = ['model' => $id];
        return $this->render($view, $shared);
    }

    /**
     * Action update user info with method PUT or PATCH
     *
     * @Route("/users/update/{id<\d+>}", methods={"PUT", "PATCH"}, name="users.update")
     *
     * @return RedirectResponse
     */
    public function update(): RedirectResponse
    {
        return $this->redirectToRoute('users.index');
    }

    /**
     * Action delete user with method DELETE
     *
     * @Route("/users/delete/{id<\d+>}", methods={"DELETE"}, name="users.delete")
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function delete(int $id): RedirectResponse
    {
        return $this->redirectToRoute('users.index');
    }
}