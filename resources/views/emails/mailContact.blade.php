<!DOCTYPE html>
<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" lang="en">

<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
	<style>
		* {
			box-sizing: border-box;
		}

		body {
			margin: 0;
			padding: 0;
		}

		a[x-apple-data-detectors] {
			color: inherit !important;
			text-decoration: inherit !important;
		}

		#MessageViewBody a {
			color: inherit;
			text-decoration: none;
		}

		p {
			line-height: inherit
		}

		@media (max-width:520px) {

			.fullMobileWidth,
			.row-content {
				width: 100% !important;
			}

			.image_block img.big {
				width: auto !important;
			}

			.column .border {
				display: none;
			}

			.stack .column {
				width: 100%;
				display: block;
			}
		}
	</style>
</head>

<body style="background-color: #FFFFFF; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
	<table class="nl-container" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF;">
		<tbody>
			<tr>
				<td>
					<table class="row row-1" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #efefef;">
						<tbody>
							<tr>
								<td>
									<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fff9f9; color: #000000; width: 500px;" width="500">
										<tbody>
											<tr>
												<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
													<table class="image_block" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td style="width:100%;padding-right:0px;padding-left:0px;">
																<div align="center" style="line-height:10px"><img class="fullMobileWidth big" src="https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/BeeProAgency/770499_754083/OIFC-1.png" style="display: block; height: auto; border: 0; width: 150px; max-width: 100%;" width="150"></div>
															</td>
														</tr>
													</table>
													<table class="heading_block" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td style="text-align:center;width:100%;">
																<h2 style="margin: 0; color: #555555; direction: ltr; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 18px; font-weight: 700; letter-spacing: normal; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0;"><span class="tinyMce-placeholder">Bonjour OIFC, vous avez recu un nouveau message</span></h2>
															</td>
														</tr>
													</table>
													<table class="text_block" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
														<tr>
															<td style="padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:40px;">
																<div style="font-family: sans-serif">
																	<div style="font-size: 14px; mso-line-height-alt: 16.8px; color: #393d47; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;">
																		<p style="margin: 0; font-size: 14px;">Ci-dessous les détails de ce message :</p>
																		<p style="margin: 0; font-size: 14px; mso-line-height-alt: 16.8px;">&nbsp;</p>
																		<p style="margin: 0; font-size: 14px; mso-line-height-alt: 16.8px;">&nbsp;</p>
																		<p style="margin: 0; font-size: 14px;">Nom de l'internaute :<strong> {{$data['nom'] }}</strong></p>
																		<p style="margin: 0; font-size: 14px; mso-line-height-alt: 16.8px;">&nbsp;</p>
																		<p style="margin: 0; font-size: 14px; mso-line-height-alt: 16.8px;">&nbsp;</p>
																		<p style="margin: 0; font-size: 14px;">Adresse mail :<strong>  {{$data['email']}}</strong></p>
																		<p style="margin: 0; font-size: 14px; mso-line-height-alt: 16.8px;">&nbsp;</p>
																		<p style="margin: 0; font-size: 14px; mso-line-height-alt: 16.8px;">&nbsp;</p>
																		<p style="margin: 0; font-size: 14px;">Sujet du message : <strong> {{$data['sujet']}}&nbsp;</strong></p>
																		<p style="margin: 0; font-size: 14px; mso-line-height-alt: 16.8px;">&nbsp;</p>
																		<p style="margin: 0; font-size: 14px; mso-line-height-alt: 16.8px;">&nbsp;</p>
																		<p style="margin: 0; font-size: 14px;">Corps du message :</p>
																		<p style="margin: 0; font-size: 14px; mso-line-height-alt: 16.8px;">&nbsp;</p>
																		<p style="margin: 0; font-size: 14px;"><strong> <span style> {{$data['message']}}.</span></strong></p>
																	</div>
																</div>
															</td>
														</tr>
													</table>
													<table class="text_block" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
														<tr>
															<td style="padding-top:25px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
																<div style="font-family: sans-serif">
																	<div style="font-size: 14px; mso-line-height-alt: 16.8px; color: #393d47; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;">
																		<p style="margin: 0; font-size: 14px; text-align: center;"><span style="font-size:10px;"><em>Message envoyé automatiquement depuis le site www.oifcconsulting.com</em></span></p>
																	</div>
																</div>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
		</tbody>
	</table><!-- End -->
</body>

</html>