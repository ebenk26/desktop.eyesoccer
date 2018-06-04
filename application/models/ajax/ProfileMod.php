<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProfileMod extends CI_Model
{
	private function __xurl() { return $this->config->item('api_url'); }
    private function __xkey() { return $this->config->item('credential'); }

    public function get_all_kompetisi()
	{
		$query  = array('page' => '1','limit' => '10');
		$r  = $this->excurl->remoteCall($this->__xurl().'competition',$this->__xkey(),$query);
		$r = json_decode($r)->data;
		return $r;
	}
	
	public function get_all_liga()
	{
		$query  = array('page' => '1','limit' => '10');
		$res  = $this->excurl->remoteCall($this->__xurl().'league',$this->__xkey(),$query);
		$res = json_decode($res)->data;
		return $res;
	}
	
	public function clublist($query){
		$res   = $this->excurl->remoteCall($this->__xurl().'profile-club', $this->__xkey(), $query);
		return $res;
	}
	public function __official_detail($slug){
		$query = ['url'=> $slug];
		$res = $this->excurl->remoteCall($this->__xurl().'profile-official/'.$slug,$this->__xkey(),$query);
		
		return $res;
	}
	public function  __getplayerlist(){
		$competition = $this->input->post('competition');
		$league = $this->input->post('league') == 'SSB' ? 'SSB / Akademi Sepakbola' : $this->input->post('league') ;	
		$page =$this->input->post('page');
		$query = array('page'=> $page,'limit' => '10','competition'=> $competition,'league'=> $league);
		$query2 = $query;
		$query2['playercount'] = true;
		$data['res'] = $this->excurl->remoteCall($this->__xurl().'profile',$this->__xkey(),$query);
		$data['count'] = $this->excurl->remoteCall($this->__xurl().'profile',$this->__xkey(),$query2);
		$html = $this->load->view('eyeprofile/ajax/playerlist',$data,true);
		$arr = array('xClass'=> 'loadlistplayer','xHtml'=> $html);
		echo json_encode($arr);

	}
	public function __getdataleague(){
		$competition = $this->input->post('competition');
		$league = $this->input->post('league') == 'SSB' ? 'SSB / Akademi Sepakbola' : $this->input->post('league') ;	
		$page =$this->input->post('page');
		$query = array('page'=> '1','limit' => '10','competition'=> $competition,'league'=> $league,'playercount'=> true,'count'=> true);
		$data['player'] = $this->excurl->remoteCall($this->__xurl().'profile',$this->__xkey(),$query);
		$data['club']  = $this->excurl->remoteCall($this->__xurl().'profile-club',$this->__xkey(),$query);
		$html = $this->load->view('eyeprofile/ajax/leaguedata',$data,true);
		$arr = array('xClass'=> 'resdataleague','xHtml'=> $html);
		echo json_encode($arr);
	}
	public function __getclubdata(){
		$competition = $this->input->post('competition');
		$league = $this->input->post('league') == 'SSB' ? 'SSB / Akademi Sepakbola' : $this->input->post('league') ;	
		$page =$this->input->post('page');
		$query[0] = array('competition' => $competition,'league'=> $league,'playercount'=> true);
		$query[1] = array('competition' => $competition,'league'=> $league,'count'=> true);
		$data['res'][0] = $this->excurl->remoteCall($this->__xurl().'profile',$this->__xkey(),$query[0]);
		$data['res'][1] = $this->excurl->remoteCall($this->__xurl().'profile-club',$this->__xkey(),$query[1]);
		$html = $this->load->view('eyeprofile/ajax/clubdata',$data,true);
		$arr = array('xClass'=> 'resdataclub','xHtml'=> $html);
		echo json_encode($arr);

	}
	public function __getlistofficial($club = ''){
		if($club != ''){
			$query = array('page'=> '1','limit'=> '10','search'=> $club);
			$result = $this->excurl->remoteCall($this->__xurl().'profile-official',$this->__xkey(),$query);
			return $result;
			exit;
		}
		
		$competition = $this->input->post('competition');
		$league = $this->input->post('league') == 'SSB' ? 'SSB / Akademi Sepakbola' : $this->input->post('league') ;	
		$page =$this->input->post('page');
		$query[0] = array('page'=> $page,'limit'=> '10','competition' => $competition,'league' => $league);
		$query[1] = array('page'=> $page,'limit'=> '10','competition' => $competition,'league' => $league,'count'=> true);
		$data['res'][0] = $this->excurl->remoteCall($this->__xurl().'profile-official',$this->__xkey(),$query[0]);
		$data['res'][1] = $this->excurl->remoteCall($this->__xurl().'profile-official',$this->__xkey(),$query[1]);
		$html = $this->load->view('eyeprofile/ajax/officiallist',$data,true);
		$arr =array('xClass'=>'reslistofficial','xHtml'=> $html);
		echo json_encode($arr);

	}
	public function __getlistclub(){

	
		$competition = $this->input->post('competition');
		$league = $this->input->post('league') == 'SSB' ? 'SSB / Akademi Sepakbola' : $this->input->post('league') ;	
		$page =$this->input->post('page');
		$query[0] = array('page'=> $page,'limit'=> '12','competition'=> $competition,'league' => $league);
		$query[1] = array('count'=> true,'competition'=> $competition,'league' => $league);
		$data['res'] = $this->excurl->remoteCall($this->__xurl().'profile-club',$this->__xkey(),$query[0]);
		$data['count'] = $this->excurl->remoteCall($this->__xurl().'profile-club',$this->__xkey(),$query[1]);
		$html = $this->load->view('eyeprofile/ajax/clublist',$data,true);
		$arr = array('xClass'=> 'resclublist','xHtml'=> $html);
		echo json_encode($arr);
	}
	public function __club_detail($url){
		$query = ['url'=> $url];
		$res = $this->excurl->remoteCall($this->__xurl().'profile-club/'.$url,$this->__xkey(),$query);
		$res = json_decode($res);
		return $res;
	}
}