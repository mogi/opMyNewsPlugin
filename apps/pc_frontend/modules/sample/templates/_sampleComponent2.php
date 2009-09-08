<?php
$options = array(
    'title' => 'My News!',
//    'body' => $body->getContent(),
  );
op_include_box('MyNews', $memberNews->getContent(), $options);
