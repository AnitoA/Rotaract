<?php


function validatePost($post)
{
    $errors = array();

    if (empty($post['title'])) {
        array_push($errors, 'Заглавието е задължително');
    }

    if (empty($post['body'])) {
        array_push($errors, 'Изисква се текст');
    }

    if (empty($post['topic_id'])) {
        array_push($errors, 'Моля, изберете тема');
    }

    $existingPost = selectOne('posts', ['title' => $post['title']]);
    if ($existingPost) {
        if (isset($post['update-post']) && $existingPost['id'] != $post['id']) {
            array_push($errors, 'Публикация с това заглавие вече съществува');
        }

        if (isset($post['add-post'])) {
            array_push($errors, 'Публикация с това заглавие вече съществува');
        }
    }

    return $errors;
}