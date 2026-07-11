<?php
class Siswa
{
   protected $dataProtected = 'data protected';
   private $dataPrivate = 'data private';

   public function __construct(
      public $nama,
      public $nim
   ) {}

   public function tampilData()
   {
      echo $this->nama . " - " . $this->nim . " - " . $this->dataProtected;
   }
}

class Admin extends Siswa
{
   public $role = 'admin';

   public function tampilJuga()
   {
      echo $this->dataProtected;
   }
}

$admin = new Admin('Admin', '123');
$admin->tampilJuga();
echo "<br/>";
echo $admin->role;
echo "<br/>";
$siswa1 = new Siswa("Ini nama", "123132131");
// $siswa1->dataProtected;
$siswa1->tampilData(); // Output: Budi Santoso - 2024001