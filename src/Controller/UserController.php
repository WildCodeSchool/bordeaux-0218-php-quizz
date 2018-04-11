<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 * PHP version 7
 */

namespace Controller;

use Model\User;
use Model\UserManager;

/**
 * Class UserController
 *
 */
class UserController extends AbstractController
{

    /**
     * Display user listing
     *
     * @return string
     */
    public function index()
    {
        $userManager = new UserManager();
        $users = $userManager->selectAll();

        return $this->twig->render('User/index.html.twig', ['users' => $users]);
    }

    /**
     * Display user informations specified by $id
     *
     * @param  int $id
     *
     * @return string
     */
    public function show(int $id)
    {
        $userManager = new UserManager();
        $user = $userManager->selectOneById($id);

        return $this->twig->render('User/show.html.twig', ['user' => $user]);
    }

    /**
     * Display user edition page specified by $id
     *
     * @param  int $id
     *
     * @return string
     */
    public function edit(int $id)
    {
        // TODO : edit user with id $id
        return $this->twig->render('User/edit.html.twig', ['user', $id]);
    }

    /**
     * Display user creation page
     *
     * @return string
     */
    public function add()
    {
        // TODO : add a new user
        return $this->twig->render('User/add.html.twig');
    }

    /**
     * Display user delete page
     *
     * @param  int $id
     *
     * @return string
     */
    public function delete(int $id)
    {
        // TODO : delete the user with id $id
        return $this->twig->render('User/index.html.twig');
    }
}
