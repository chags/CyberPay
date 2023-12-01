<?php
require dirname(dirname(dirname(__DIR__))) . "/autoload.php";
$app = new Module();
$app->loadModels('painel');
$mpdf = new \Mpdf\Mpdf(['debug' => true]);
$dados = new Empresas();
$e = $dados->EditarEmpresa();
$data = new Orcamento();
$d = $data->PDF();

$produto = '';
foreach ($d['itens'] as $i) {
	$produto .= '
	<tr>
		<td class="esdev-mso-td" valign="top" style="padding:0;Margin:0">
		<table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
			<tr>
				<td class="es-m-p0r" align="center" style="padding:0;Margin:0;width:136px">
					<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
						<tr>
							<td align="center" style="padding:0;Margin:0">
								<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px">' . $i['id_produto'] . '</p>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		</td>
		<td style="padding:0;Margin:0;width:20px"></td>
		<td class="esdev-mso-td" valign="top" style="padding:0;Margin:0">
			<table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
				<tr>
					<td align="center" style="padding:0;Margin:0;width:136px">
						<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
							<tr>
								<td align="left" style="padding:0;Margin:0">
									<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px">' . $i['item_produto_nome'] . '</p>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
		<td style="padding:0;Margin:0;width:20px"></td>
		<td class="esdev-mso-td" valign="top" style="padding:0;Margin:0">
			<table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
				<tr>
					<td align="center" style="padding:0;Margin:0;width:136px">
						<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
							<tr>
								<td align="right" style="padding:0;Margin:0">
									<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px"> R$:' . number_format(($i['item_produto_valor'] / 100), 2, ',', '') . '</p>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
		<td style="padding:0;Margin:0;width:20px"></td>
		<td class="esdev-mso-td" valign="top" style="padding:0;Margin:0">
		<table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
			<tr>
				<td align="center" style="padding:0;Margin:0;width:136px">
					<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
						<tr>
							<td align="" style="padding:0;Margin:0">
								<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px">' . $i['item_produto_quant'] . " " . $i['produto_und'] . '</p>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		</td>
		<td style="padding:0;Margin:0;width:20px"></td>
		<td class="esdev-mso-td" valign="top" style="padding:0;Margin:0">
			<table cellpadding="0" cellspacing="0" class="es-right" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
				<tr>
					<td align="left" style="padding:0;Margin:0;width:136px">
						<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
							<tr>
								<td align="right" style="padding:0;Margin:0">
									<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px"> R$:' . number_format(($i['item_produto_valor_total'] / 100), 2, ',', '') . '</p>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
		';
}
$html = '<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>AER SERVIÇOS E TELECOM</title>
		<style type="text/css">
			#outlook a {
				padding: 0;
			}
			.es-button {
				mso-style-priority: 100 !important;
				text-decoration: none !important;
			}
			.es-desk-hidden {
				display: none;
				float: left;
				overflow: hidden;
				width: 0;
				max-height: 0;
				line-height: 0;
				mso-hide: all;
			}
			@media only screen and (max-width:600px) {
				.es-mobile-hidden {
					display: none !important
				}
				.es-desk-hidden {
					width: auto !important;
					overflow: visible !important;
					float: none !important;
					max-height: inherit !important;
					line-height: inherit !important
				}
				tr.es-desk-hidden {
					display: table-row !important
				}
				table.es-desk-hidden {
					display: table !important
				}
				td.es-desk-menu-hidden {
					display: table-cell !important
				}
			}
		</style>
	</head>
	<body style="width:100%;font-family:arial, helvetica neue, helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
		<div class="es-wrapper-color" style="background-color:#F6F6F6">
			<table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;background-color:#F6F6F6">
				<tr>
					<td valign="top" style="padding:0;Margin:0">
						<table class="es-header" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top">
							<tr>
								<td align="center" style="padding:0;Margin:0">
									<table class="es-header-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:800px">
										<tr>
											<td class="esdev-adapt-off" align="left" style="padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px">
												<table cellpadding="0" cellspacing="0" class="esdev-mso-table" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:760px">
													<tr>
														<td class="esdev-mso-td" valign="top" style="padding:0;Margin:0">
															<table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
																<tr>
																	<td class="es-m-p0r" valign="top" align="center" style="padding:0;Margin:0;width:258px">
																		<table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
																			<tr>
																				<td align="center" style="padding:0;Margin:0;font-size:0px"><img src="' . helper::imagem($e['empresa_logo']) . '" alt style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic" height="75"></td>
																			</tr>
																		</table>
																	</td>
																</tr>
															</table>
														</td>
														<td style="padding:0;Margin:0;width:10px"></td>
														<td class="esdev-mso-td" valign="top" style="padding:0;Margin:0">
															<table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;float:left; border: none;">
																<tr>
																	<td align="left" style="padding:0;Margin:0;width:270px">
																		<table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border: none;">
																			<tr class="es-visible-simple-html-only">
																				<td align="left" style="padding:0;Margin:0">
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:16px;color:#333333;font-size:10px"><strong>' . $e["empresa_nome_fantasia"] . '</strong></p>
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:12px;color:#333333;font-size:10px">' . $e["empresa_logradouro"] . $e["empresa_numero"] . '-' . $e["empresa_bairro"] . '</p>
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:12px;color:#333333;font-size:10px">' . $e["empresa_municipio"] . ' - ' . $e["empresa_uf"] . ', CEP ' . $e["empresa_cep"] . '</p>
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:12px;color:#333333;font-size:10px">CNPJ: ' . $e["empresa_cnpj"] . '</p>
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:12px;color:#333333;font-size:10px">IE: ' . $e["empresa_inscricao"] . ', IM: ' . $e["empresa_inscricao_municipal"] . '</p>
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:12px;color:#333333;font-size:10px;text-align:left">Fone: ' . $e["empresa_telefone"] . '-' . $e["empresa_whatsapp"] . '</p>
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:12px;color:#333333;font-size:10px">Email: ' . $e["empresa_email"] . '</p>
																				</td>
																			</tr>
																		</table>
																	</td>
																</tr>
															</table>
														</td>
														<td style="padding:0;Margin:0;width:10px"></td>
														<td class="esdev-mso-td" valign="top" style="padding:0;Margin:0">
															<table cellpadding="0" cellspacing="0" class="es-right" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
																<tr>
																	<td align="left" style="padding:0;Margin:0;width:212px">
																		<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
																			<tr>
																				<td align="left" style="padding:0;Margin:0">
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px;text-align:center"><span style="background-color:#D3D3D3">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-size:10px"><strong>ORÇAMENTO</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:15px;color:#333333;font-size:10px"><strong>OS:</strong> ' . $d["id_orcamento"] . '</p>
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:15px;color:#333333;font-size:10px"><strong>Emissão:</strong> ' . helper::_date($d["orcamento_data"]) . '</p>
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:15px;color:#333333;font-size:10px"><strong>Validade da Cotação:</strong>' . $d["config_cotacao"] . '</p>
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:15px;color:#333333;font-size:10px"><strong>Tecnico:</strong> ' . $d["config_tecnico"] . '</p>
																				</td>
																			</tr>
																		</table>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<table class="es-footer" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top">
							<tr>
								<td align="center" style="padding:0;Margin:0">
									<table class="es-footer-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:800px">
										<tr>
											<td align="left" style="padding:0;Margin:0;padding-left:20px;padding-right:20px">
												<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
													<tr>
														<td align="center" valign="top" style="padding:0;Margin:0;width:760px">
															<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
																<tr>
																	<td align="center" bgcolor="#cccccc" style="padding:0;Margin:0">
																		<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:15px;color:#333333;font-size:10px"><strong>CLIENTE</strong></p>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td class="esdev-adapt-off" align="left" style="Margin:0;padding-top:5px;padding-left:20px;padding-right:20px">
												<table cellpadding="0" cellspacing="0" class="esdev-mso-table" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:760px">
													<tr>
														<td class="esdev-mso-td" valign="top" style="padding:0;Margin:0">
															<table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
																<tr>
																	<td align="left" style="padding:0;Margin:0;width:360px">
																		<table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
																			<tr>
																				<td align="left" style="padding:0;Margin:0">
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:15px;color:#333333;font-size:10px"><strong>Nome:</strong> ' . $d["cliente_razao_social"] . '</p>
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:15px;color:#333333;font-size:10px"><strong>Endereço:</strong>' . $d["cliente_logradouro"] . $d["cliente_numero"] . '</p>
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:15px;color:#333333;font-size:10px"><strong>Cidade/UF:</strong> ' . $d["cliente_municipio"] . "-" . $d["cliente_uf"] . '</p>
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:15px;color:#333333;font-size:10px"><strong>CNPJ:</strong>' . $d["cliente_cnpj"] . '</p>
																				</td>
																			</tr>
																		</table>
																	</td>
																</tr>
															</table>
														</td>
														<td style="padding:0;Margin:0;width:40px"></td>
														<td class="esdev-mso-td" valign="top" style="padding:0;Margin:0">
															<table class="es-right" cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
																<tr>
																	<td align="left" style="padding:0;Margin:0;width:360px">
																		<table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
																			<tr>
																				<td align="left" style="padding:0;Margin:0">
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:15px;color:#333333;font-size:10px"><strong>Nome Fantasia: </strong> ' . $d["cliente_nome_fantasia"] . '</p>
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:15px;color:#333333;font-size:10px"><strong>Telefone: </strong>' . $d["cliente_telefone"] . '</p>
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:15px;color:#333333;font-size:10px"><strong>Responsável: </strong> ' . $d["cliente_nome"] . '</p>
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:15px;color:#333333;font-size:10px"><strong>E-mail: </strong>' . $d["cliente_email"] . '</p>
																				</td>
																			</tr>
																		</table>
																	</td>
																</tr>
																<tr>
																	<td align="left" style="padding:0;Margin:0;width:360px">
																		<table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
																			<tr>
																				<td align="left" style="padding:0;Margin:0">
																				</td>
																			</tr>
																		</table>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td class="esdev-adapt-off" align="left" style="padding:20px;Margin:0">
												<table cellpadding="0" cellspacing="0" class="esdev-mso-table" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:760px">
													<tr>
														<td class="esdev-mso-td" valign="top" style="padding:0;Margin:0">
															<table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
																<tr>
																	<td class="es-m-p0r" align="center" style="padding:0;Margin:0;width:240px">
																		<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
																			<tr>
																				<td align="center" bgcolor="#cccccc" style="padding:0;Margin:0">
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:15px;color:#333333;font-size:10px"><strong>ENTREGA</strong></p>
																				</td>
																			</tr>
																		</table>
																	</td>
																</tr>
															</table>
														</td>
														<td style="padding:0;Margin:0;width:20px"></td>
														<td class="esdev-mso-td" valign="top" style="padding:0;Margin:0">
															<table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
																<tr>
																	<td align="center" style="padding:0;Margin:0;width:240px">
																		<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
																			<tr>
																				<td align="center" bgcolor="#cccccc" style="padding:0;Margin:0">
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:15px;color:#333333;font-size:10px"><strong>PAGAMENTO</strong></p>
																				</td>
																			</tr>
																		</table>
																	</td>
																</tr>
															</table>
														</td>
														<td style="padding:0;Margin:0;width:20px"></td>
														<td class="esdev-mso-td" valign="top" style="padding:0;Margin:0">
															<table cellpadding="0" cellspacing="0" class="es-right" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
																<tr>
																	<td align="center" style="padding:0;Margin:0;width:240px">
																		<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
																			<tr>
																				<td align="center" bgcolor="#cccccc" style="padding:0;Margin:0">
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:15px;color:#333333;font-size:10px"><strong>GARANTIA</strong></p>
																				</td>
																			</tr>
																		</table>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td class="esdev-adapt-off" align="left" style="padding:20px; padding-top:-10px;Margin:0">
												<table cellpadding="0" cellspacing="0" class="esdev-mso-table" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:760px">
													<tr>
														<td class="esdev-mso-td" valign="top" style="padding:0;Margin:0">
															<table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
																<tr>
																	<td class="es-m-p0r" align="center" style="padding:0;Margin:0;width:240px">
																		<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
																			<tr>
																				<td align="left" style="padding:0;Margin:0">
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:15px;color:#333333;font-size:10px"><strong>Prazo de entrega:</strong> ' . $d["config_prazo_entrega"] . '</p>
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:15px;color:#333333;font-size:10px"><strong>Frete:</strong> ' . $d["config_frete"] . '</p>
																				</td>
																			</tr>
																		</table>
																	</td>
																</tr>
															</table>
														</td>
														<td style="padding:0;Margin:0;width:20px"></td>
														<td class="esdev-mso-td" valign="top" style="padding:0;Margin:0">
															<table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
																<tr>
																	<td align="center" style="padding:0;Margin:0;width:240px">
																		<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
																			<tr>
																				<td align="left" style="padding:0;Margin:0">
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:15px;color:#333333;font-size:10px"><strong>Forma de pagamento:</strong> ' . $d["config_forma_pagamento"] . '</p>
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:15px;color:#333333;font-size:10px"><strong>Prazo de pagamento:</strong> ' . $d["config_prazo_pagamento"] . '</p>
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:15px;color:#333333;font-size:10px"><strong>Natureza da nota Fiscal:</strong> ' . $d["config_natureza_nota"] . '</p>
																				</td>
																			</tr>
																		</table>
																	</td>
																</tr>
															</table>
														</td>
														<td style="padding:0;Margin:0;width:20px"></td>
														<td class="esdev-mso-td" valign="top" style="padding:0;Margin:0">
															<table cellpadding="0" cellspacing="0" class="es-right" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
																<tr>
																	<td align="center" style="padding:0;Margin:0;width:240px">
																		<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
																			<tr>
																				<td align="left" style="padding:0;Margin:0">
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:15px;color:#333333;font-size:10px"><strong>Garantia do serviço:</strong> ' . $d["config_garantia"] . '</p>
																				</td>
																			</tr>
																		</table>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td align="left" style="padding:0;Margin:0;padding-left:20px;padding-right:20px">
												<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
													<tr>
														<td align="center" valign="top" style="padding:0;Margin:0;width:760px">
															<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
																<tr>
																	<td align="center" bgcolor="#cccccc" style="padding:0;Margin:0">
																		<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px"><strong>ORÇAMENTO</strong></p>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td align="left" style="padding:0;Margin:0;padding-left:20px;padding-top:10px;padding-buttom:20px;padding-right:20px">
												<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
													<tr>
														<td align="center" valign="top" style="padding:0;Margin:0;width:760px">
															<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
																<tr>
																	<td align="left" style="padding:0;Margin:0">
																		<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:15px;color:#333333;font-size:10px"><strong>Objetivo: </strong>' . $d["orcamento_objetivo"] . '</p>
																		<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:15px;color:#333333;font-size:10px"><strong>Local de Instalação: </strong>' . $d["orcamento_local_instalacao"] . '</p>
																		<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:15px;color:#333333;font-size:10px"><br></p>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td align="left" style="padding:0;Margin:0;padding-left:20px;padding-right:20px;padding-top:10px;">
												<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
													<tr>
														<td align="center" valign="top" style="padding:0;Margin:0;width:760px">
															<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
																<tr>
																	<td align="center" bgcolor="#cccccc" style="padding:0;Margin:0">
																		<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px"><strong>PRODUTOS E SERVIÇOS</strong></p>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td class="esdev-adapt-off" align="left" style="padding:0;Margin:0;padding-top:10px;padding-left:20px;padding-right:20px">
												<table cellpadding="0" cellspacing="0" class="esdev-mso-table" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:760px">
													<tr>
														<td class="esdev-mso-td" valign="top" style="padding:0;Margin:0">
															<table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
																<tr>
																	<td class="es-m-p0r" align="center" style="padding:0;Margin:0;width:136px">
																		<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
																			<tr>
																				<td align="center" style="padding:0;Margin:0">
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px"><strong>Cod</strong></p>
																				</td>
																			</tr>
																		</table>
																	</td>
																</tr>
															</table>
														</td>
														<td style="padding:0;Margin:0;width:20px"></td>
														<td class="esdev-mso-td" valign="top" style="padding:0;Margin:0">
															<table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
																<tr>
																	<td align="center" style="padding:0;Margin:0;width:136px">
																		<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
																			<tr>
																				<td align="center" style="padding:0;Margin:0">
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px"><strong>Produtos/Serviço</strong></p>
																				</td>
																			</tr>
																		</table>
																	</td>
																</tr>
															</table>
														</td>
														<td style="padding:0;Margin:0;width:20px"></td>
														<td class="esdev-mso-td" valign="top" style="padding:0;Margin:0">
															<table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
																<tr>
																	<td align="center" style="padding:0;Margin:0;width:136px">
																		<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
																			<tr>
																				<td align="right" style="padding:0;Margin:0">
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px"><strong>Valor UNT</strong></p>
																				</td>
																			</tr>
																		</table>
																	</td>
																</tr>
															</table>
														</td>
														<td style="padding:0;Margin:0;width:20px"></td>
														<td class="esdev-mso-td" valign="top" style="padding:0;Margin:0">
															<table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
																<tr>
																	<td align="center" style="padding:0;Margin:0;width:136px">
																		<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
																			<tr>
																				<td align="center" style="padding:0;Margin:0">
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px"><strong>QTD</strong></p>
																				</td>
																			</tr>
																		</table>
																	</td>
																</tr>
															</table>
														</td>
														<td style="padding:0;Margin:0;width:20px"></td>
														<td class="esdev-mso-td" valign="top" style="padding:0;Margin:0">
															<table cellpadding="0" cellspacing="0" class="es-right" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
																<tr>
																	<td align="left" style="padding:0;Margin:0;width:136px">
																		<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
																			<tr>
																				<td align="right" style="padding:0;Margin:0">
																					<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px"><strong>Valor Total</strong></p>
																				</td>
																			</tr>
																		</table>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td class="esdev-adapt-off" align="left" style="padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px">
												<table cellpadding="0" cellspacing="0" class="esdev-mso-table" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:760px">
													'
	. $produto .
	'
												</table>
											</td>
										</tr>
										<tr>
											<td align="left" style="padding:0;Margin:0;padding-left:20px;padding-right:10px">
												<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
													<tr>
														<td align="center" valign="top" style="padding:0;Margin:0;width:760px">
															<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
																<tr>
																	<td align="right" style="padding:10;Margin:0">
																		<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:18px;font-size:14px"><strong>Total: <strong>R$:' . number_format(($d['orcamento_total_geral'] / 100), 2, ',', '') . ' </p>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
											</td>
										</tr>										
										<tr>
											<td align="left" style="padding:0;Margin:0;padding-left:20px;padding:20px;padding-right:20px">
												<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
													<tr>
														<td align="center" valign="top" style="padding:0;Margin:0;width:760px">
															<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
																<tr>
																	<td align="center" bgcolor="#cccccc" style="padding:0;Margin:0">
																		<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px"><strong>RELATÓRIO TÉCNICO</strong></p>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td align="left" style="padding:0;Margin:0;padding-top:5px;padding-left:20px;padding-right:20px">
												<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
													<tr>
														<td align="center" valign="top" style="padding:0;Margin:0;width:760px">
															<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
																<tr>
																	<td align="left" style="padding:0;Margin:0;padding-bottom:10px;padding-left:10px;padding-right:10px">
																		<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:12px;color:#333333;font-size:10px">' . $d["orcamento_laudo"] . '</p>
																		<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:12px;color:#333333;font-size:10px"><br></p>
																		<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:12px;color:#333333;font-size:10px"><br></p>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
	</body>
	</html>';
$mpdf->SetHTMLFooter('<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
	<tr>
		<td class="es-m-p0r" valign="top" align="center" style="padding:0;Margin:0;width:800px">
			<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
				<tr>
					<td align="left" style="padding:0;Margin:0">
						<p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica neue, helvetica, sans-serif;line-height:15px;color:#333333;font-size:10px"><strong>OBSERVAÇÕES:</strong> <br>' . $d["config_observacao"] . '<br>*Garantia ' . $d["config_garantia"] . '.</p>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>');
$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML($html);
$mpdf->Output();
