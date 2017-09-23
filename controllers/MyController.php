<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 19.08.2017
 * Time: 22:21
 */

namespace app\controllers;


class MyController extends AppController
{

    public function actionIndex($id = null)
    {
        $hi = 'Hello World!';
        $names = ['ivan', 'petr', 'sidr'];

        if (!$id) $id = 'test';

        //  return $this->render('index', ['hello' => $hi, 'names' => $names]);
        return $this->render('index', compact('hi', 'names', 'id'));

    }

    public function actionBlogPost()
    {
        //my/blog-post
        return 'Blog Post';
    }
}