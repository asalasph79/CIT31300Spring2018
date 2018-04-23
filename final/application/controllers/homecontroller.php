<?php

class HomeController extends Controller{

  public function index(){

    $feed = "http://www.starwarsreport.com/feed/podcast";
    $rss = new RssDisplay($feed);

    $feed_data = $rss->getFeedItems(3);

    $channel_title = $feed_data['title'];
    $channel_feed = $feed_data['items'];

    $this->set('rss_title',$channel_title);
    $this->set('rss_feed',$channel_feed);

	}


}
