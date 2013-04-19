<?php

class BlubberBlog extends StudIPPlugin implements SystemPlugin {
    public function __construct() {
        parent::__construct();
        $top = new Navigation(_("Blog"));
        $top->setURL(URLHelper::getURL("plugins.php/blubber/streams/profile?user_id=8a2ca05a506a147e9f99a333e2bc3cd7"));
        $top->setImage($this->getPluginURL()."/assets/news_header.png");
        Navigation::addItem("/blubberblog", $top);
    }
}