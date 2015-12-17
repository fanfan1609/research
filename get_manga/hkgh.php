<?php
include 'simple_html_dom.php';
define('MANGA_FOLDER', '/home/dat-vq/Manga/');
define('DS', DIRECTORY_SEPARATOR);

$name = 'hkgh';
$mainPath = MANGA_FOLDER . DS . $name;
makeDir($name);

$dom = file_get_html('http://mangak.net/hiep-khach-giang-ho/');

set_time_limit(0);

writeLog('==============START GETTING=================');
foreach($dom->find('div.chapter-list div.row span a') as $a){
    $url = $a->href;
    if( preg_match("/chap-[0-9]+/", $url,$matches) ){
        $subFolder = $matches[0];
        writeLog( "GET $subFolder");
        writeLog("$subFolder is ". checkFailChap($mainPath.DS.$subFolder) ? 'fail' : 'success');
        if( checkFailChap($mainPath.DS.$subFolder) ){
            writeLog("$subFolder is new or fail");
            getContentInChap($a->href, $mainPath.DS.$subFolder);
            sleep(20);
        }
        writeLog("DONE $subFolder");
    }
    // file_put_contents( $folder ."/". pathinfo($img->src,PATHINFO_BASENAME) , $content);
}
writeLog("===========End Getting===============");


function getContentInChap($url,$folder)
{
    makeDir($folder);
    $dom = file_get_html($url);
    foreach($dom->find('div.vung_doc img') as $i => $img){
        if( strpos($img->src, 'imgmax') ){
            $content = file_get_contents($img->src);
            file_put_contents($folder ."/". $i . '.' . pathinfo($img->src,PATHINFO_EXTENSION), $content );
        }
    }
}

function makeDir($folder)
{
    if(is_dir($folder) != true){
        @mkdir($folder,0777);
    }
}

function checkFailChap($folder)
{
    return count(scandir($folder)) < 5;
}

function writeLog($message)
{
    $log = @fopen('logs.txt','a') or die('Unable to open file');
    fwrite($log,"\n".$message);
    fclose($log);
}