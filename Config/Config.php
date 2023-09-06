<?php 
	const BASE_URL = "http://localhost/Corredor_BBY";


	//Zona horaria
	date_default_timezone_set('America/Costa_Rica');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "bd_cbby";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 0; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";



	//Datos envio de correo
	const NOMBRE_REMITENTE = "CBBY";
	const EMAIL_REMITENTE = "no-reply@CBBY.com";
	const NOMBRE_EMPESA = "Corredor Biologico Bosques del Yaguarundi";
	const WEB_EMPRESA = "www.CBBY.com";

	const DESCRIPCION = "CBBY.";
	const SHAREDHASH = "Corredor Biologico";

	//Datos Empresa
	const DIRECCION = "Territorio comprendido entre las Cuencas de los ríos Potrero, Caimital y Quirimán, Nicoya, Costa Rica";
	const TELEMPRESA = "+(506)7777777";
	const WHATSAPP = "+77777777";
	const EMAIL_EMPRESA = "Cbpotrerocaimital@gmail.com";
	const EMAIL_CONTACTO = "Cbpotrerocaimital@gmail.com";

	const CAT_SLIDER = "1,2,3";
	const CAT_BANNER = "4,5,6";
	const CAT_FOOTER = "1,2,3,4,5";


	//Envío


	//Módulos
	


	//Páginas
	const PINICIO = 1;
	const PTIENDA = 2;
	const PCARRITO = 3;
	const PNOSOTROS = 4;
	const PCONTACTO = 5;
	const PPREGUNTAS = 6;
	const PTERMINOS = 7;
	const PSUCURSALES = 8;
	const PERROR = 9;

	//Roles
	const RADMINISTRADOR = 1;
	const RSUPERVISOR = 2;
	const RCLIENTES = 3;

	const STATUS = array('Completo','Aprobado','Cancelado','Reembolsado','Pendiente','Entregado');

	//Productos por página
	const CANTPORDHOME = 8;
	const PROPORPAGINA = 4;
	const PROCATEGORIA = 4;
	const PROBUSCAR = 4;

	//REDES SOCIALES
	const FACEBOOK = "https://www.facebook.com/people/Corredor-Biol%C3%B3gico-Potrero-Caimital/100072017805336/";
	const INSTAGRAM = "https://www.instagram.com/febel24/";
	const SMONEY = "$";
	//Datos para Encriptar / Desencriptar
	const KEY = 'abelosh';
	const METHODENCRIPT = "AES-128-ECB";
	
	//Módulos
	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCLIENTES = 3;
	const MPRODUCTOS = 4;
	const MPEDIDOS = 5;
	const MCATEGORIAS = 6;
	const MSUSCRIPTORES = 7;
	const MDCONTACTOS = 8;
	const MDPAGINAS = 9;

 ?>