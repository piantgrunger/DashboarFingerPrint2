<?php

defined('BASEPATH') or exit('No direct script access allowed');

class fingerprint_model extends CI_Model
{
    public function getAbsen($lokasi)
    {
        $query= $this->db->query("select * from absen a
                               inner join  pegawai p on p.nip=a.nip
                               inner join  m_unit m on m.id=p.unit_kerja
                              where (absen_datang='$lokasi' or absen_keluar='$lokasi' ) and
                              date_format(jam_masuk,'%Y%m%d') = date_format(curdate(),'%Y%m%d')
                              order by  case when jam_keluar='00:00:00' then jam_masuk else jam_keluar end desc

                              ");
        return $query->result_array();
    }
}

/* End of file fingerprint.php */