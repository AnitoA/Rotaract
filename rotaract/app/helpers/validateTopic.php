<?php

function validateTopic($topic)
{
    $errors = array();

    if (empty($topic['name'])) {
        array_push($errors, 'Името е задължително');
    }

    $existingTopic = selectOne('topics', ['name' => $post['name']]);
    if ($existingTopic) {
        if (isset($post['update-topic']) && $existingTopic['id'] != $post['id']) {
            array_push($errors, 'Името на темата вече съществува');
        }

        if (isset($post['add-topic'])) {
            array_push($errors, 'Името на темата вече съществува');
        }
    }

    return $errors;
}
