<?php
namespace App\Manga;
include 'simple_html_dom.php';
include 'config.php';

class App 
{
	protected $name = '';

	protected $url = '';

    protected $failChap = [];

    protected $chapters = [];

    public function __construct($name,$url)
    {
        $this->name = $name;
        $this->url  = $url;
    }

    public function getChapters()
    {
        $dom = file_get_html($this->url);
        set_time_limit(0);

        foreach($dom->find('div.chapter-list div.row span a') as $a){
            if( preg_match("/chap-[0-9]+/", $a->href, $matches ) ){
                $this->chapters[] = [
                    'name' => $matches[0],
                    'url'  => $a->href
                ];
            }
        }
    }

    public function makeDir($dir)
    {

    }

    public function getContentInChapters()
    {

    }

    public function checkFailChapter()
    {

    }

    public function repairFailChapter()
    {

    }

    public function run()
    {
        $this->getChapters();
    }

}