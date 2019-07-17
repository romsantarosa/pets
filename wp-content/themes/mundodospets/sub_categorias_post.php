<?php include_once("conexao.php");

	$id_categoria = $_REQUEST['id_categoria'];
	
	$result_sub_cat = "SELECT * FROM cidade WHERE CT_UF=$id_categoria ORDER BY CT_NOME";
	$resultado_sub_cat = mysqli_query($conn, $result_sub_cat);
	
	while ($row_sub_cat = mysqli_fetch_assoc($resultado_sub_cat) ) {
		$sub_categorias_post[] = array(
			'CT_UF'	=> $row_sub_cat['CT_UF'],
			'CT_NOME' => utf8_encode($row_sub_cat['CT_NOME']),
		);
	}
	
	echo(json_encode($sub_categorias_post));