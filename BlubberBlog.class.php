<?php

class BlubberBlog extends StudIPPlugin implements SystemPlugin {
    public function __construct() {
        parent::__construct();
        $top = new Navigation(_("Blog"));
        $top->setURL(URLHelper::getURL("plugins.php/blubber/streams/profile?user_id=8a2ca05a506a147e9f99a333e2bc3cd7"));
        if ($GLOBALS['auth']->auth['devicePixelRatio'] > 1.2) {
            $top->setImage($this->getPluginURL()."/assets/news_header@2x.png");
        } else {
            $top->setImage($this->getPluginURL()."/assets/news_header.png");
        }
        Navigation::addItem("/blubberblog", $top);
        
        PageLayout::addHeadElement("link", array('rel' => "stylesheet", "href" => $this->getPluginURL()."/assets/blubberblog.css"));
    }
}