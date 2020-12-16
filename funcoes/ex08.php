<?php
//função recursiva
$hierarquia = array(
	array(
		'nome_cargo'=> 'CEO',
		'subordinados' =>array(
			//inicio: diretor comercial
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					//inicio: gerente de vendas
					array(
						'nome_cargo'=>'Gerente de Vendas',
						'subordinados'=>array(
							//inicio sup vendas
							array(
								'nome_cargo'=>'supervisor de vendas',
								'subordinados'=>array(
									'nome_cargo'=>'vendedores'
								)

							)
							//termino sup vendas
						)
					),
					//termino: gerente de vendas
					array(
						'nome_cargo'=>'gerente de compras',
						'subordinados'=>array(
							//inicio sup compras
							array(
								'nome_cargo' =>'supervisor de compras',
								'subordinados'=>array(
									'nome_cargo'=>'compradores'
								)
							)
							
						)
					)
					//termino: gerente de compras
				)
			),
			//termino: diretor comercial
			//inicio: diretor financeiro
			array(
				'nome_cargo'=>'diretor financeiro',
				'subordinados'=>array(
					//inicio: gerente de contas a pagar
					array(
						'nome_cargo'=>'gerente de despesas',
						'subordinados'=>array(
							//inicio: supervisor de pagamentos
							array(
								'nome_cargo'=>'supervisor de pagamentos'
							)
							//termino: supervisor de pagamentos
						)

					),
					//termino: gerente de despesas / contas a pagar
					//inicio gerente receitas
					array(
						'nome_cargo'=>'gerente de receitas',
						'subordinados'=>array(
							//inicio supervisor de recebimentos
							array(
								'nome_cargo'=>'supervisor de recebimentos'
							)
							//termino sup de recebimentos
						)
						
					),
					//termino: gerente de receitas
					//inicio: gerente de compras
				)
				
			),
			//termino: diretor financeiro
		)
	),
	//termino ceo
);

function exibe($cargos) {

	$html ="<ul>";

	foreach ($cargos as $cargo){

		$html .= "<li>";

		$html .= $cargo['nome_cargo'];

		if (isset($cargo['subordinados']) && count($cargo['subordinados']) >0) {

			$html .= exibe($cargo['subordinados']);


		}

		$html .= "</li>";


	}

	$html .= "</ul>";

	return $html;

}

echo exibe($hierarquia);


?>