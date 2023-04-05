<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form Pendaftaran Mahasiswa Baru</title>
	<style>
    body{
	    font-family: sans-serif;
	    background: #d5f0f3;
    }
 
    h1{
	   text-align: center;
	   /*ketebalan font*/
	   font-weight: 300;
    }

    h2{
	   text-align: center;
	   /*ketebalan font*/
	   font-weight: 300;
    }
 
    .tulisan_daftar{
	   text-align: center;
	   /*membuat semua huruf menjadi kapital*/
	   text-transform: uppercase;
    }
 
    .kotak_daftar{
	   width: 350px;
	   background: white;
	   /*meletakkan form ke tengah*/
	   margin: 80px auto;
       margin-top: 10px;
	   padding: 30px 20px;
    }
 
    label{
	   font-size: 11pt;
    }
 
    .form_login{
	   /*membuat lebar form penuh*/
	   box-sizing : border-box;
	   width: 100%;
	   padding: 10px;
	   font-size: 11pt;
	   margin-bottom: 20px;
    }
 
    .register{
	   background: #46de4b;
	   color: white;
	   font-size: 11pt;
	   width: 100%;
	   border: none;
	   border-radius: 3px;
	   padding: 10px 20px;
   }
   </style>
</head>
<body>
 
	<h1>FORM PENDAFTARAN MAHASISWA BARU</h1>
    <h2>UNIVERSITAS KH ABD WAHAB HASBULLAH</h2>
 
	<div class="kotak_daftar">
		<p class="tulisan_daftar">DAFTAR SEKARANG</p>
 
		<form>
			<label>Nama Lengkap</label>
			<input type="text" name="nama lengkap" class="form_login" placeholder="Nama Anda">
 
			<label>NIK</label>
			<input type="text" name="NIK" class="form_login" placeholder="NIK">

            <label>NISN</label>
			<input type="text" name="NISN" class="form_login" placeholder="NISN">

            <label>Alamat</label>
			<input type="text" name="alamat" class="form_login" placeholder="Alamat Asli">

            <label>Asal Sekolah</label>
			<input type="text" name="asal sekolah" class="form_login" placeholder="Sekolah Asal">

            <label>Agama</label>
			<input type="text" name="agama" class="form_login" placeholder="Agama Anda">

            <label>Email</label>
			<input type="text" name="email" class="form_login" placeholder="Email Anda">

            <label>No HP/WA</label>
			<input type="text" name="no hp/wa" class="form_login" placeholder="Masukkan Salah Satu">

            <label>Program Studi</label>
			<input type="text" name="studi" class="form_login" placeholder="Fakultas">
            <input type="text" name="studi" class="form_login" placeholder="Prodi">

 
			<input type="submit" class="register" value="DAFTAR">

		</form>

	</div>
 
</body>
</html>
