public function get($kode)
{

    $this->db->where('kodebarang',$kode);
    $query = $this->db->get('tbbarang');
    if ($query->num_rows() > 0)
    {
       foreach ($query->result() as $row)
       {
          $data['namabarang'] = $row->namabarang;
          $data['hargabeli'] = $row->hargabeli;
          echo json_encode($data);
       }
    } else {
        $data['namabarang'] = '';
        $data['hargabeli'] = '';
        echo json_encode($data);
    }
}