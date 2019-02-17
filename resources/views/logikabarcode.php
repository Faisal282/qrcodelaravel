<?php	
		$produk = $data[6000]->id_karcis;
        echo '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG(" 8885007024110", "EAN13" ) .
			'" alt="barcode"   />' ; 
		$dataId=substr($data[0]->id_karcis, 0, -1);
        var_dump($dataId);die;
        echo '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG("" . $dataId, " EAN13") . '" alt="barcode"/>'
		; 