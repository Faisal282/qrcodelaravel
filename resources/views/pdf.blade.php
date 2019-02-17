<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Halaman Pdf</title>
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
</head>
<body>
	{{-- {{<img src="data:image/png;base64,' . DNS1D::getBarcodePNG("123456789102", "EAN13") . '"/>}} --}}
	<div class="container-fluid">
		@php
			$numOfCols = 3;
			$rowCount = 0;
			$bootstrapColWidth = 12 / $numOfCols;
		@endphp
		<div class="row">
		<?php
		foreach ($data as $barcode){
		?>  
				<div class="col-md-<?php echo $bootstrapColWidth; ?> px-5 py-3">
					<p>{{ $barcode->id_karcis }}</p>
					<div class="thumbnail">
						<img src="data:image/png;base64,<?= DNS1D::getBarcodePNG($barcode->id_karcis, 'EAN13') ?>">
					</div>
				</div>
		<?php
			$rowCount++;
			if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
		}
		?>
	</div>
</body>
</html>