<?php

  // Menu active page
  function active_page($current_page, $page) {
    if ($current_page == $page) {
      echo " class='active'";
    }
  }

  // Markdown parser for content
  require_once 'Michelf/MarkdownExtra.inc.php';
  function html_from_markdown($filename) {
    $page_contents_markdown = file_get_contents('content/' . $filename);
    $md = new \Michelf\MarkdownExtra();
    $page_contents_html = $md->defaultTransform($page_contents_markdown);
    return $page_contents_html;
  }

?>
