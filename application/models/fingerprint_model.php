<?php

defined('BASEPATH') or exit('No direct script access allowed');

class fingerprint_model extends CI_Model
{
    public function getAbsen($lokasi)
    {
        $query= $this->db->query("select distinct a.*,nama,nama_unit,
                                  case when m.id = 98 then '0' else '1' end as cek_status,
                                  timediff('07:31:00',date_format(a.jam_masuk,'%H:%i:%S')) as selisih,
                                  case when hour(jam_masuk) >= 5 and hour(jam_masuk) < 13 then 'Shift 1' 
                                   when hour(jam_masuk) >= 13 and hour(jam_masuk) < 21 then 'Shift 2'
                                   else  'Shift 3' end
                                    






                                 from absen a
                               inner join  pegawai p on p.nip=a.nip
                               LEFT join  m_unit m on m.id=p.unit_kerja

                              where (absen_datang='$lokasi' or absen_keluar='$lokasi' ) and
                              (date_format(jam_masuk,'%Y%m%d') = date_format(curdate(),'%Y%m%d')
                              or date_format(jam_masuk,'%Y%m%d') = date_format(curdate(),'%Y%m%d') - interval 1 day
                              )
                              order by  case when jam_keluar='00:00:00' then jam_masuk else jam_keluar end desc
                              limit 5


                              ");
        return $query->result_array();
    }
    public function getFoto($nip)
    {
        $query = $this->db->query("select foto from foto_pegawai where nip ='$nip' limit 1 ");
        return $query->result_array();
    }
}

/* End of file fingerprint.php */
