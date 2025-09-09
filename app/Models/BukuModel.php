<?php
  namespace App\Models;

  use CodeIgniter\Model;

  class BukuModel extends Model
  {
    protected $table = 'buku';
    protected $primaryKey = 'id_buku';
    
    public function getBuku($idbuku = false)
    {
      if ($idbuku == false) {
        return $this->findAll();
      }
      return $this->where(['id_buku' => $idbuku])->first();
    }
  }

?>