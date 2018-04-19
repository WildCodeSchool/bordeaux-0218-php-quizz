<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 * PHP version 7
 */

namespace Controller;

use Model\Quizz;
use Model\QuizzManager;

/**
 * Class ItemController
 *
 */
class QuizzController extends AbstractController
{

    /**
     * Display item listing
     *
     * @return string
     */
    public function index()
    {
        $quizzManager = new ItemManager();
        $quizz = $quizzManager->selectAll();

        return $this->twig->render('quizz/index.html.twig', ['quizz' => $quizz]);
    }

    /**
     * Display item informations specified by $id
     *
     * @param  int $id
     *
     * @return string
     */
    public function show(int $id)
    {
        $quizzManager = new ItemManager();
        $quizz = $quizzManager->selectOneById($id);

        return $this->twig->render('Item/show.html.twig', ['quizz' => $quizz]);
    }

    /**
     * Display item edition page specified by $id
     *
     * @param  int $id
     *
     * @return string
     */
    public function edit(int $id)
    {
        // TODO : edit item with id $id
        return $this->twig->render('Item/edit.html.twig', ['item', $id]);
    }

    /**
     * Display item creation page
     *
     * @return string
     */
    public function add()
    {
        // TODO : add a new item
        return $this->twig->render('Item/add.html.twig');
    }

    /**
     * Display item delete page
     *
     * @param  int $id
     *
     * @return string
     */
    public function delete(int $id)
    {
        // TODO : delete the item with id $id
        return $this->twig->render('Item/index.html.twig');
    }
}
