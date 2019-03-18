<?php

defined('BASEPATH') or exit('No direct script access allowed');

class fingerprint_model extends CI_Model
{
    public function getAbsen($lokasi)
    {
        $query= $this->db->query("select distinct *,
                                   timediff('07:31:00',date_format(a.jam_masuk,'%H %i %S')) as selisih


                                 from absen a
                               inner join  pegawai p on p.nip=a.nip
                               LEFT join  m_unit m on m.id=p.unit_kerja
                                LEFT join  foto_pegawai f on p.nip=f.nip

                              where (absen_datang='$lokasi' or absen_keluar='$lokasi' ) and
                              date_format(jam_masuk,'%Y%m%d') = date_format(curdate(),'%Y%m%d')
                              order by  case when jam_keluar='00:00:00' then jam_masuk else jam_keluar end desc
                              limit 0,9

                              ");
        return $query->result_array();
    }
}

/* End of file fingerprint.php */
