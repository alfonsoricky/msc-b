<?php 
use Mscindonesia\Misa\Models\Jadwal;
class Cms60209c61ebccb927147103_c6be8aa88c70ead223c33e261a3350daClass extends Cms\Classes\PartialCode
{
	public function onStart() {
		$query = Jadwal::orderBy('date', 'desc')->paginate('10');
		$this['jadwal'] = $query;
	}
}
