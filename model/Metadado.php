<?php

class Metadado {

    private $url;
    private $pagina;

    public function __construct($link) {
        $this->url = $link;
        $this->pagina = file_get_contents($this->url);
    }

    public function getTituloPagina() {
        if (strlen($this->pagina) > 0) {
            $str = trim(preg_replace('/\s+/', ' ', $this->pagina));
            preg_match("/\<title\>(.*)\<\/title\>/i", $str, $title);
            $title = $title[1];
            
        }
        return $title;
    }
    public function getDescriptionPagina(){
        $base = $this->url;
        @$url = parse_url($base);
        @$tags =  get_meta_tags($url['scheme'].'://'.$url['host'] );
        $description = $tags['description'];
        return $description;
        
    }

}
