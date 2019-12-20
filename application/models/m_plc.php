<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_plc extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

    Public function plc($periode_awal, $periode_akhir) {
    	if ($periode_awal==null||$periode_akhir==null){
    		$wordsquery = "SELECT WITEL, COUNT(*) as jtb FROM indihome WHERE NOT EXISTS (SELECT * from plc WHERE indihome.NO_INET = plc.NO_INET) GROUP BY WITEL";
    	}else{
    		$wordsquery = "SELECT WITEL, COUNT(*) as jtb FROM indihome WHERE NOT EXISTS (SELECT * from plc WHERE indihome.NO_INET = plc.NO_INET) AND TGL_REG BETWEEN '$periode_awal' AND '$periode_akhir' GROUP BY WITEL";
    	}
    	
        $query = $this->db->query($wordsquery);
        return $query->result();
    }

    public function chek_duplicat($id){
        $QuerySql = $this->db->query("SELECT no_inet FROM plc WHERE no_inet IN ('$id')");
        return $QuerySql->row();
    }

    public function update_duplicat($witel, $ncli, $ndos, $ndem, $no_inet, $item, $price, $tgl_va, $tgl_ps, $kcontact) {
        $this->db->query('UPDATE plc SET witel = "'.$witel.'",
                                             ncli = "'.$ncli.'", 
                                             ndos = "'.$ndos.'", 
                                             ndem = "'.$ndem.'", 
                                             no_inet = "'.$no_inet.'", 
                                             item = "'.$item.'", 
                                             price = "'.$price.'", 
                                             tgl_va = "'.$tgl_va.'", 
                                             tgl_ps = "'.$tgl_ps.'", 
                                             kcontact = "'.$kcontact.'" WHERE no_inet = "'.$no_inet.'"');
    }
    public function upload($witel, $ncli, $ndos, $ndem, $no_inet, $item, $price, $tgl_va, $tgl_ps, $kcontact)
    {
        $this->db->query('REPLACE INTO plc (witel, ncli, ndos, ndem, no_inet, item, price, tgl_va, tgl_ps, kcontact)
            VALUES("'.$witel.'", 
                    "'.$ncli.'",
                     "'.$ndos.'", 
                     "'.$ndem.'", 
                      "'.$no_inet.'", 
                     "'.$item.'", 
                     "'.$price.'", 
                     "'.$tgl_va.'", 
                     "'.$tgl_ps.'", 
                     "'.$kcontact.'")
                     ');
    }



}