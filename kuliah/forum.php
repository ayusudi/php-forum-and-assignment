<?php 
// ! Code for migration table
// $pdoForMigration = new PDO("pgsql:host=localhost;port=5432;dbname=db_week5;", 'postgres', 'postgres', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
// $queryDDL = 'CREATE TABLE mhs( nim CHAR(10) PRIMARY KEY, nama VARCHAR(30), jurusan CHAR(2));';
// $migrationStatement = $pdoForMigration->prepare($queryDDL);
// $migrationStatement->execute();
?>
<?php
function insertDataMahasiswa($nim, $nama, $jurusan){
  try {  // 1. Exception handling
  // 2. Koneksi ke Postgresql dengan PDO 
  $dsn = "pgsql:host=localhost;port=5432;dbname=db_week5;";
  $pdo = new PDO($dsn, 'postgres', 'postgres', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
  if ($pdo) {
    echo 'Success connect to db_week5 <br>';
    // 3. Query insert data to table mhs
    $strQuery = "INSERT INTO mhs (nim, nama, jurusan) VALUES (:nim, :nama, :jurusan)";
    echo 'Preparing to run code : '.$strQuery.'<br>';
    // 4. Run query to database by code 
    $statement = $pdo->prepare($strQuery);
    $result = $statement->execute([
      'nim' => $nim,
      'nama' => $nama,
      'jurusan' => $jurusan
    ]); 
    // 5. Output is message and created data
    return [
      'message' => 'Success insert one data to mhs!',
      'data' => [
        'nim' => $nim,
        'nama' => $nama,
        'jurusan' => $jurusan
      ]
    ];
  }
  } catch (PDOException $e) {
    die($e->getMessage());
  } finally {
    if ($pdo) {
      $pdo = null;
    }
  }
}
//? TASK : CREATE FUNCTION FOR INSERT DATA MAHASISWA WITH PHP
// TEST CASE 
// Execute function insertDataMahasiswa with 3 parameters : nim, nama, jurusan.
$testcase1 = insertDataMahasiswa('2500069661', 'Ayu', 'SI');
foreach($testcase1 as $output){
  print_r($output);
  echo '<br>';
}
?>