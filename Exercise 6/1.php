public function view()
{
    $this->load->model('m_barang');
    $kode = $this->input->post('kode');
    //@$kode = $_POST['kode'];
    $data = $this->m_barang->get($kode);
}
View :

<html>
<head>

 <script type='text/javascript' src='<?php echo base_url("jquery-1.11.2.js");?>'></script>
 <script type='text/javascript' src='<?php echo base_url("jquery.autocomplete.js");?>'></script>
<!-- <link rel="stylesheet" type="text/css" href="jquery.autocomplete.css" />
<link rel="stylesheet" href="main.css" type="text/css" /> -->
<script type="text/javascript">
$(document).ready(function() {  
    $("#barang").keyup(function() {
        var kode    = $('#barang').val();
        $.ajax({
            type    : "POST",
            data    : "kode="+kode,
            url     : "<?=base_url('barang/view')?>",
            dataType: "json",
            success: function(data){
                $("#namabarang").val(data.namabarang); //$r['namabarang']
                $("#hargabeli").val(data.hargabeli); //$r['hargabeli']
            }
        });
    });

});
</script>
</head>
<body>
  <div class="demo" style="width: 450px;">
  <div>
  <p>Kode Barang : <input type="text" id="barang" value=""></p>
  <p>Nama Barang : <input type="text" id="namabarang" size="50" disabled></p>
  <p>Harga Beli : <input type="text" id="hargabeli" size="15" align="right" disabled></p>
  </div>
  </div> 
  <p class="footer" ><?php echo base_url();?></p>
  <p class="footer" ><?php echo site_url();?></p>
  <p class="footer" ><?php echo base_url('barang/view');?></p>
</body>
</html>