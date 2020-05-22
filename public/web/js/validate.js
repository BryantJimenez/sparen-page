$(document).ready(function(){
	//Usuarios register
	$("button[action='login']").on("click",function(){
		$("#test-form").validate({
			rules:
			{
				email: {
					required: true,
					email: true,
					minlength: 8,
					maxlength: 191
				},

				password: {
					required: true,
					minlength: 8,
					maxlength: 40
				}
			},
			messages:
			{
				email: {
					email: 'Introduce una dirección de correo valida.',
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},

				password: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				}
			}
		});
	});

	//Usuarios
	$("button[action='user']").on("click",function(){
		$("#formUser").validate({
			rules:
			{
				name: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				lastname: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				email: {
					required: true,
					email: true,
					minlength: 8,
					maxlength: 191
				},

				phone: {
					required: true,
					minlength: 5,
					maxlength: 15
				},

				dni: {
					required: true,
					minlength: 5,
					maxlength: 15
				},

				phone: {
					required: true,
					minlength: 5,
					maxlength: 15
				},

				password_confirmation: { 
					equalTo: "#password",
					minlength: 8,
					maxlength: 40
				}
			},
			messages:
			{
				name: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},

				lastname: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},

				email: {
					email: 'Introduce una dirección de correo valida.',
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},

				phone: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},

				dni: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},

				password: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},

				password_confirmation: { 
					equalTo: 'Los datos ingresados no coinciden.',
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				}
			}
		});
	});


	//Nosotros
	$("button[action='about']").on("click",function(){
		$("#formAbout").validate({
			rules:
			{
				paragraph1_spanish: {
					required: true,
					minlength: 2,
					maxlength: 191
				},
				paragraph1_english: {
					required: true,
					minlength: 2,
					maxlength: 191
				},
				paragraph2_spanish: {
					required: true,
					minlength: 2,
					maxlength: 191
				},
				paragraph2_english: {
					required: true,
					minlength: 2,
					maxlength: 191
				},
				list1_spanish: {
					required: true,
					minlength: 2,
					maxlength: 191
				},
				list1_english: {
					required: true,
					minlength: 2,
					maxlength: 191
				},
				list2_spanish: {
					required: true,
					minlength: 2,
					maxlength: 191
				},
				list2_english: {
					required: true,
					minlength: 2,
					maxlength: 191
				},
				list3_spanish: {
					required: true,
					minlength: 2,
					maxlength: 191
				},
				list3_english: {
					required: true,
					minlength: 2,
					maxlength: 191
				},
				picture: {
					required: true
				}
			},
			messages:
			{
				paragraph1_spanish: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				paragraph1_english: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				paragraph2_spanish: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				paragraph2_english: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				list1_spanish: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				list1_english: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				list2_spanish: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				list2_english: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				list3_spanish: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				list3_english: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				picture: {
					required: 'Seleccione una imágen.'
				}
			}
		});
	});

	//Banner
	$("button[action='banner']").on("click",function(){
		$("#formBanner").validate({
			rules:
			{
				banner1_spanish: {
					required: true,
					minlength: 2,
					maxlength: 191
				},
				banner1_english: {
					required: true,
					minlength: 2,
					maxlength: 191
				},
				banner2_spanish: {
					required: true,
					minlength: 2,
					maxlength: 191
				},
				banner2_english: {
					required: true,
					minlength: 2,
					maxlength: 191
				},
				banner3_spanish: {
					required: true,
					minlength: 2,
					maxlength: 191
				},
				banner3_english: {
					required: true,
					minlength: 2,
					maxlength: 191
				},
				picture1: {
					required: true
				},
				picture2: {
					required: true
				},
				picture3: {
					required: true
				}
			},
			messages:
			{
				banner1_spanish: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				banner1_english: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				banner2_spanish: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				banner2_english: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				banner3_spanish: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				banner3_english: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				picture1: {
					required: 'Seleccione una imágen.'
				},
				picture2: {
					required: 'Seleccione una imágen.'
				},
				picture3: {
					required: 'Seleccione una imágen.'
				}
			}
		});
	});

	//Objetivos
	$("button[action='objective']").on("click",function(){
		$("#formObjective").validate({
			rules:
			{
				title1_spanish: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				title1_english: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				title2_spanish: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				title2_english: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				title3_spanish: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				title3_english: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				content1_spanish: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				content1_english: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				content2_spanish: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				content2_english: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				content3_spanish: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				content3_english: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				picture: {
					required: true
				}
			},
			messages:
			{
				title1_spanish: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				title1_english: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				title2_spanish: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				title2_english: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				title3_spanish: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				title3_english: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				content1_spanish: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				content1_english: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				content2_spanish: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				content2_english: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				content3_spanish: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				content3_english: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				picture: {
					required: 'Seleccione una imágen.'
				}
			}
		});
	});

	//Consultorías
	$("button[action='consultancy']").on("click",function(){
		$("#formConsultancy").validate({
			rules:
			{
				title1_spanish: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				title1_english: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				title2_spanish: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				title2_english: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				title3_spanish: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				title3_english: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				content1_spanish: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				content1_english: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				content2_spanish: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				content2_english: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				content3_spanish: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				content3_english: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				picture: {
					required: true
				}
			},
			messages:
			{
				title1_spanish: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				title1_english: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				title2_spanish: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				title2_english: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				title3_spanish: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				title3_english: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				content1_spanish: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				content1_english: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				content2_spanish: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				content2_english: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				content3_spanish: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				content3_english: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				picture: {
					required: 'Seleccione una imágen.'
				}
			}
		});
	});

	//Servicios
	$("button[action='service']").on("click",function(){
		$("#formOService").validate({
			rules:
			{
				title1_spanish: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				title1_english: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				title2_spanish: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				title2_english: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				title3_spanish: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				title3_english: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				content1_spanish: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				content1_english: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				content2_spanish: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				content2_english: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				content3_spanish: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				content3_english: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				picture1: {
					required: true
				},
				picture2: {
					required: true
				},
				picture3: {
					required: true
				}
			},
			messages:
			{
				title1_spanish: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				title1_english: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				title2_spanish: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				title2_english: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				title3_spanish: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				title3_english: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				content1_spanish: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				content1_english: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				content2_spanish: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				content2_english: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				content3_spanish: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				content3_english: {
					minlength: 'Escribe mínimo {0} caracteres.',
					maxlength: 'Escribe máximo {0} caracteres.'
				},
				picture1: {
					required: true
				},
				picture2: {
					required: true
				},
				picture3: {
					required: true
				}
			}
		});
	});

		//Usuarios register
		$("button[action='contact']").on("click",function(){
			$("#formContact").validate({
				rules:
				{
					name: {
						required: true,
						minlength: 8,
						maxlength: 191
					}, 

					email: {
						required: true,
						email: true,
						minlength: 8,
						maxlength: 191
					},

					message: {
						required: true,
						minlength: 8,
						maxlength: 191
					},
				},
				messages:
				{
					name: {
						minlength: 'Escribe mínimo {0} caracteres.',
						maxlength: 'Escribe máximo {0} caracteres.'
					},

					email: {
						email: 'Introduce una dirección de correo valida.',
						minlength: 'Escribe mínimo {0} caracteres.',
						maxlength: 'Escribe máximo {0} caracteres.'
					},

					message: {
						minlength: 'Escribe mínimo {0} caracteres.',
						maxlength: 'Escribe máximo {0} caracteres.'
					}
				}
			});
		});

		//Report
		$("button[action='report']").on("click",function(){
			$("#formReport").validate({
				rules:
				{
					title_spanish: {
						required: true,
						minlength: 8,
						maxlength: 191
					}, 

					title_english: {
						required: true,
						minlength: 8,
						maxlength: 191
					}, 

					content_spanish: {
						required: true,
						minlength: 8,
						maxlength: 191
					},

					content_english: {
						required: true,
						minlength: 8,
						maxlength: 191
					},

					pdf_spanish: {
						required: true
					},

					pdf_english: {
						required: true
					}
				},
				messages:
				{
					title_spanish: {
						minlength: 'Escribe mínimo {0} caracteres.',
						maxlength: 'Escribe máximo {0} caracteres.'
					},

					title_english: {
						minlength: 'Escribe mínimo {0} caracteres.',
						maxlength: 'Escribe máximo {0} caracteres.'
					},

					content_spanish: {
						minlength: 'Escribe mínimo {0} caracteres.',
						maxlength: 'Escribe máximo {0} caracteres.'
					},

					content_english: {
						minlength: 'Escribe mínimo {0} caracteres.',
						maxlength: 'Escribe máximo {0} caracteres.'
					},

					pdf_spanish: {
						required: true
					},

					pdf_english: {
						required: true
					}
				}
			});
		});







	});