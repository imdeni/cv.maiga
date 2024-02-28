<?php
require('ExcelReader.php');

class DegreesReader extends ExcelReader {
	protected $tableHeaders = ['NISM', 'nama', 'kelas', 'a_quran', 'b_quran', 'a_akidah', 'b_akidah', 'a_fiqih', 'b_fiqih', 'a_sejarah_islam', 'b_sejarah_islam', 'a_ppkn', 'b_ppkn', 'a_indonesia', 'b_indonesia', 'a_arab', 'b_arab', 'a_Matematika_wajib', 'b_Matematika_wajib', 'a_sejarah_indonesia', 'b_sejarah_indonesia', 'a_bahasa_inggris', 'b_bahasa_inggris', 'a_seni_budaya', 'b_seni_budaya', 'a_penjasorkes', 'b_penjasorkes', 'a_bahasa_jawa', 'b_bahasa_jawa', 'a_nu', 'b_nu', 'a_qiro', 'b_qiro', 'a_nahwu', 'b_nahwu', 'a_kitab_Kuning', 'b_kitab_Kuning', 'a_matematika_peminatan', 'b_matematika_peminatan', 'a_biologi', 'b_biologi', 'a_fisika', 'b_fisika', 'a_kimia', 'b_kimia', 'a_informatika', 'b_informatika', 'a_teknik', 'b_teknik', 'rata'];
	protected $DBtable = 'tb_nilai';

}




		 	 	
	