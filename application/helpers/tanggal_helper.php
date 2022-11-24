<?php


function tanggal_indo($tanggal=null)
{
	if($tanggal!=null){
	$bulan = array (1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
	$split = explode('-', $tanggal);
	return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
		}
		else{
			return $tanggal;
		}
}

// echo tanggal_indo('2016-03-20'); // 20 Maret 2016
?>