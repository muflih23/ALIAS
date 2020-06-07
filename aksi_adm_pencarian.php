<?php

include 'sparqllib.php';

if(isset($_POST['tambah']))
{
    $domisili = $_POST['domisili'];
    $jeniskejahatan = $_POST['jeniskejahatan'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $kategorikejahatan = $_POST['kategorikejahatan'];
    $kejahatan = $_POST['kejahatan'];
    $nama = $_POST['nama'];
    $tempatkejadian = $_POST['tempatkejadian'];
    $umur = $_POST['umur'];


    $db = sparql_connect("http://localhost:3030/alias/data/villain");
    if(!$db)
    {
        print sparql_errno() . " : " . sparql_error(). "\n"; exit;
    }
    sparql_ns("villain","http://localhost:3030/alias/data/villain");
    // $sparql =
                //query buat input data nya disini fie
}
?>