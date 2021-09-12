<?php
	class Table
	{
		public $tab1;
		public $tab2;
		public $tab3;
		public $tab4;
		public $line1;
		public $line2;
		public $line3;
		public $line4;
		public $inquiry;




		public function getTable1($inquiry, $tab1, $tab2, $tab3, $line1, $line2, $line3)
		{
		$table = '<table class="table">';
		$table.='<tr><th>'.$tab1.'</th><th>'.$tab2.'</th><th>'.$tab3.'</th></tr> ';
		while ($res = $inquiry->fetch()){
		$table.='<tr><td>'.$res[$line1].'</td>
		<td>'.$res[$line2].'</td>
		<td>'.$res[$line3].'</td>
		</tr>';
		}
		$table.='</table>';
		echo $table;
		}

		public function getTable2($inquiry, $tab1, $tab2, $tab3, $tab4, $line1, $line2, $line3, $line4)
		{
		$table = '<table class="table">';
		$table.='<tr><th>'.$tab1.'</th><th>'.$tab2.'</th><th>'.$tab3.'</th><th>'.$tab4.'</th></tr> ';
		while ($res = $inquiry->fetch()){
		$table.='<tr><td>'.$res[$line1].'</td>
		<td>'.$res[$line2].'</td>
		<td>'.$res[$line3].'</td>
		<td>'.$res[$line4].'</td>
		</tr>';
		}
		$table.='</table>';
		echo $table;
		}
}