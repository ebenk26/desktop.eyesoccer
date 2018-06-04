<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeMod extends CI_Model
{
    private function __xurl() { return $this->config->item('api_url'); }
    private function __xkey() { return $this->config->item('credential'); }

    function __profile_club(){
    
    	$query = array('page'=> rand(1,5),'limit' => '12','competition' => 'Liga Usia Muda','league'=> 'SSB / Akademi Sepakbola');
    	$data['clubs'] = $this->excurl->remoteCall($this->__xurl().'profile-club', $this->__xkey(), $query);
    	$html = $this->load->view('home/ajax/home_club',$data,true);
        $arr = array('xClass' => 'reslistclub' ,'xHtml'=> $html);
        $this->tools->__flashMessage($arr);
    }
    function __list_player(){
    	$page = rand(0,5);
    	// $query = array('page'=> $page,'limit' => '10','competition' => 'Liga Usia Muda','league'=> 'Liga Santri Nusantara');
    	$query = array('page'=> abs(date('j') - date('n')),'limit' => '10','competition' => 'Liga Usia Muda','league'=> 'SSB / Akademi Sepakbola');
    	$data['player'] = $this->excurl->remoteCall($this->__xurl().'profile',$this->__xkey(),$query);
    	$html = $this->load->view('home/ajax/list_player',$data,true);
    	$arr = array('xClass'=> 'resplayerlist','xHtml'=> $html);
    	$this->tools->__flashMessage($arr);

    	
    }
   function __search(){
        $data['query'] = ['search'=> $this->input->post('query')];
        $data['news'] = $this->excurl->remoteCall($this->__xurl() . 'news', $this->__xkey(), $data['query']);
        $data['tube'] = $this->excurl->remoteCall($this->__xurl() . 'video', $this->__xkey(), $data['query']);
        $data['player'] = $this->excurl->remoteCall($this->__xurl() . 'profile', $this->__xkey(), $data['query']);
        $data['club'] = $this->excurl->remoteCall($this->__xurl() . 'profile-club', $this->__xkey(),$data['query']);
        $html = $this->load->view('home/ajax/search',$data,true);
        $arr = ['xClass'=> 'reqsearch','xHtml'=> $html];
        $this->tools->__flashMessage($arr);
    }
    function __get_list_video(){
        $query[0] = ['page'=> '1','limit'=> '4'];
        $query[1] = array_merge($query[0],['sortby'=> 'mostview']);
        $query[2] = array_merge($query[0],['category'=> 'VIDEO KAMU']);
        $query[3] = array_merge($query[0],['category'=> 'Eyesoccer Star']);

        $data['popular'] = $this->excurl->remoteCall($this->__xurl().'video',$this->__xkey(),$query[1]);
        $data['uservid'] = $this->excurl->remoteCall($this->__xurl().'video',$this->__xkey(),$query[2]);
        $data['star'] = $this->excurl->remoteCall($this->__xurl().'video',$this->__xkey(),$query[3]);
        $html         = $this->load->view('home/ajax/home_tube',$data,true);
        $arr = ['xClass'=> 'reqlistvid','xHtml'=> $html];
        $this->tools->__flashMessage($arr);
    }
    function __scrapindonesia(){
        $data['data'] = "";
        $html = $this->load->view('home/ajax/scrapindonesia',$data,true);
        $arr = array('xClass'=> 'reqscrapindonesia','xHtml'=> $html);
        $this->tools->__flashMessage($arr);
    }
    function __scrapitalia(){
        $data['data'] = "";
        $html = $this->load->view('home/ajax/scrapitalia',$data,true);
        $arr = array('xClass'=> 'reqscrapitalia','xHtml'=> $html);
        $this->tools->__flashMessage($arr);


        
    }
    function __scrapspanyol(){
        $data['data'] = "";
        $html = $this->load->view('home/ajax/scrapspanyol',$data,true);
        $arr = array('xClass'=> 'reqscrapspanyol','xHtml'=> $html);
        $this->tools->__flashMessage($arr);
    }
    function __scrapinggris(){
        $data['data'] = "";
        $html = $this->load->view('home/ajax/scrapinggris',$data,true);
        $arr = array('xClass'=> 'reqscrapinggris','xHtml'=> $html);
        $this->tools->__flashMessage($arr);
    }
}