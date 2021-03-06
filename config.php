<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Base Site URL
|--------------------------------------------------------------------------
|
| URL to your CodeIgniter root. Typically this will be your base URL,
| WITH a trailing slash:
|
|	http://example.com/
|
| WARNING: You MUST set this value!
|
| If it is not set, then CodeIgniter will try guess the protocol and path
| your installation, but due to security concerns the hostname will be set
| to $_SERVER['SERVER_ADDR'] if available, or localhost otherwise.
| The auto-detection mechanism exists only for convenience during
| development and MUST NOT be used in production!
|
| If you need to allow multiple domains, remember that this file is still
| a PHP script and you can easily do that on your own.
|
*/
//http://190.85.229.195/SelfCareManagement/SelfCareManagementService.svc
//http://190.85.248.31/SelfCare/SelfCareManagementService.svc

$config['api_key'] = 'a21c218df41f6d7fd032535fe20394e2';
$config['base_url'] = 'http://'.$_SERVER["HTTP_HOST"].'/';

$config["app"]=array(
    "AES"=>"PUZ66Q9J",
    "AES_paradigma"=>"A9b8C7d6E5f4G3h2",
    "produccion"=>0
    );

//URLS GPS
$urlGPSDev = "http://192.168.18.109:8084/Webservices/wsRest/api.php?url=";
$urlGPS = "http://192.168.18.44/WebServices/wsRest/api.php?url=";

$config["servicios"]=array(

            "getCMDataAccount"=>"https://172.31.228.201/pollerWs_test/services/DiagResService?wsdl",
            "getWifiDataIVR"=>"https://172.31.228.201/pollerWs_test/services/DiagResService?wsdl",
            "getWifiData"=>"https://172.31.228.201/pollerWs_V2/services/DiagResService?wsdl",
            "cmSetWpaKey"=>"https://172.31.228.201/wifi_ws/services/WiFi?wsdl",
            "cmSetSsid"=>"https://172.31.228.201/wifi_ws/services/WiFi?wsdl",
            "cmSetEncMode"=>"https://172.31.228.201/wifi_ws/services/WiFi?wsdl",

            //legalizacion
            "esLegalizada"=>"http://172.22.61.94:8080/WSAutolegalizacion/WSAutolegalizacionService?wsdl",
            "validarDatosDemograficos"=>"http://172.22.61.94:8080/WSAutolegalizacion/WSAutolegalizacionService?wsdl",
            "legalizarLinea"=>"http://172.22.61.94:8080/WSAutolegalizacion/WSAutolegalizacionService?wsdl",

            "retrieveIMEI"=>"http://172.24.160.135:8080/{PROJECT}/Services/Proxy_Pipelines/ServiceManagement_PS?WSDL",
            "retrievePlan"=>"http://172.24.160.135:8080/{PROJECT}/Services/Proxy_Pipelines/ServiceManagement_PS?WSDL",
            "switchPlan"=>"http://172.24.160.135:8080/{PROJECT}/Services/Proxy_Pipelines/ServiceManagement_PS?WSDL",
            "retrievePlans"=>"http://172.24.160.135:8080/{PROJECT}/Services/Proxy_Pipelines/BusinessAnalyticsManagement_PS?WSDL",
            "retrieveBillDetails"=>"http://172.24.160.135:8080/{PROJECT}/Services/Proxy_Pipelines/BillingManagement_PS?WSDL",
            "retrieveCustomerData"=>"http://172.24.160.135:8080/{PROJECT}/Services/Proxy_Pipelines/AccountManagement_PS?WSDL",
            "validateMobileNumber"=>"http://172.24.160.135:8080/{PROJECT}/Services/Proxy_Pipelines/AccountManagement_PS?WSDL",
            "legalizeAccount"=>"http://172.24.160.135:8080/{PROJECT}/Services/Proxy_Pipelines/AccountManagement_PS?WSDL",

            "ValidarRegistroCuentaClienteFija"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?WSDL",
            "ConsultarEstadoCuentaFija"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?WSDL",
            "CambiarNumeroMovil"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?WSDL",
            "ConfigurarFacturaElectronicaMovil"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?WSDL",
            "ConsultarInformacionCuentaMovil"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?WSDL",
            "CambiarPlanMovil"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?WSDL",
            "GenerarOTP"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?WSDL",
            "generarOTPUsuario"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?WSDL",
            "RegistroAliasCuenta"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?WSDL",

            "solicitudRecuperarClave"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?wsdl",
            "solicitudCambioClave"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?wsdl",
            "LoginUsuario"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?wsdl",
            "NotificarCompraPaqueteElegible"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?wsdl",
            //consulta la informacion de usuario
            "ConsultarInformacionUsuario"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?wsdl",
            
            "SolicitarCambioNombreUsuario"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?wsdl",
            "AsociarCuentaUsuario"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?wsdl",
            "ValidacionRegistroUsuario"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?wsdl",
            "RegistroUsuario"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?wsdl",
            "DesactivarCuentaUsuario"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?wsdl",

            "ConsultarPaquetes"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?wsdl",

            //Tokenizacion
            "SolicitarTokenAutenticacionSSO"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?WSDL",


            "retrievePaperlessPublications"=>"http://172.24.160.135:8080/{PROJECT}/Services/Proxy_Pipelines/BillingManagement_PS?WSDL",
            "retrievePaperlessNotifications"=>"http://172.24.160.135:8080/{PROJECT}/Services/Proxy_Pipelines/BillingManagement_PS?WSDL",
            "retrievePaperlessSubscriptions"=>"http://172.24.160.135:8080/{PROJECT}/Services/Proxy_Pipelines/BillingManagement_PS?WSDL",


            "validateNumber"=>"http://172.24.35.240/{PROJECT}/Services/Proxy_Pipelines/AccountManagement_PS?WSDL",


            "retrieveAccountHistory"=>"http://172.24.160.135:8080/{PROJECT}/Services/Proxy_Pipelines/AccountManagement_PS?WSDL",

            "retrieveElectronicDocumentPDF"=>"http://172.24.160.135:8080/{PROJECT}/Services/Proxy_Pipelines/BillingManagement_PS?WSDL",
            "retrieveBillHistoryList"=>"http://172.24.160.135:8080/{PROJECT}/Services/Proxy_Pipelines/BillingManagement_PS?WSDL",
            "getPaperless"=>"http://172.24.160.135:8080/{PROJECT}/Services/Proxy_Pipelines/BillingManagement_PS?WSDL",
            "setPaperless"=>"http://172.24.160.135:8080/{PROJECT}/Services/Proxy_Pipelines/BillingManagement_PS?WSDL",
            "retrieveConsumptionDetailInformation"=>"http://172.24.160.135:8080/{PROJECT}/Services/Proxy_Pipelines/ServiceManagement_PS?WSDL",
            "retrieveFrequentNumberDetailList"=>"http://172.24.160.135:8080/{PROJECT}/Services/Proxy_Pipelines/CustomerManagement_PS?WSDL",
            "createFrequentNumber"=>"http://172.24.160.135:8080/{PROJECT}/Services/Proxy_Pipelines/CustomerManagement_PS?WSDL",
            "deleteFrequentNumber"=>"http://172.24.160.135:8080/{PROJECT}/Services/Proxy_Pipelines/CustomerManagement_PS?WSDL",
            "changePhoneNumber"=>"http://172.24.160.135:8080/{PROJECT}/Services/Proxy_Pipelines/ServiceManagement_PS?WSDL",
            "retrieveOTADevice"=>"http://172.24.160.135:8080/{PROJECT}/Services/Proxy_Pipelines/AccountManagement_PS?WSDL",
            "registerIMEI"=>"http://172.24.160.135:8080/{PROJECT}/Services/Proxy_Pipelines/ServiceManagement_PS?WSDL",
            "retrieveContractDocument"=>"http://172.24.160.135:8080/{PROJECT}/Services/Proxy_Pipelines/ContractManagement_PS?WSDL",
            "getSubscriberInfo"=>"http://172.24.160.135:8080/{PROJECT}/Services/Proxy_Pipelines/UtilitySelfService_PS?WSDL",

            //descargar factura hogar

            "document"=>"http://10.244.143.120:8013/WsVentaDigital/Proxies/searchVentaDigital_PS?wsdl",
            "codificacionContrato"=>"http://10.244.143.120:8013/OLM/Proxies/MTService_PS?wsdl",
            "RegistrarConsultaContrato"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?WSDL",
            //HD
            "consultaSerCliente"=>"http://192.168.18.76:8090/telmex/MTservice?wsdl",
            "consultaSerClienteNew"=>"http://192.168.18.76:8090/telmex/MTservice?wsdl",
            "adicionarServicios"=>"http://192.168.18.76:8090/telmex/MTservice?wsdl",
            "adicionarNew"=>"http://192.168.18.76:8090/telmex/MTservice?wsdl",
            //REPOSICIONES
            "ConsultarProductosRepos"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?WSDL",
            "ConsultarDetalleProducto"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?WSDL",
            "SolicitarPedido"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?WSDL",
            //CAMBIODEPLAN
            "ConsultarPlanesPospago"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?WSDL",
            //paquetesMundialistas
            "ValidarCompraPaquetePartido"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?WSDL",
            "ComprarPaquetePartido"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?WSDL",
            //Evidente
            "ValidarUsuarioCliente"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?wsdl",

            //enviar pin al correo
            "GenerarOTPValidacionNombreUsuario"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?wsdl",


            //Datos granel
            "ConsultarProductos"=>"http://itelnn.comcel.com.co:9999/IntegradorSubscriptionManager/consultarProductos_PS?wsdl",
            "inscripcion"=>"http://172.22.61.94:9026/WSPaquetesDatosRecurrentesZonas/WSPaquetesDatosRecurrentesZonasService?wsdl",
            //"consultaPaquetes"=>"http://172.22.61.94:9026/WSPaquetesDatosRecurrentesZonas/WSPaquetesDatosRecurrentesZonasService?wsdl",
            "desactivacionServicio"=>"http://172.22.61.94:9026/WSPaquetesDatosRecurrentesZonas/WSPaquetesDatosRecurrentesZonasService?wsdl",

            //ITEL
            //"itel205"=>"http://172.22.86.103:9999/ITEL/Core/Proxies/ejecutarTramaEspecifica_PS?wsdl",
            "itel205Granel"=>"http://itelnn.comcel.com.co:9999/ITEL/Core/Proxies/ejecutarTramaEspecifica_PS?wsdl",
            "itel414TodoDestino"=>"http://itelnn.comcel.com.co:9999/ITEL/Core/Proxies/ejecutarTramaEspecifica_PS?wsdl",
            "itel415CompraDatos"=>"http://itelnn.comcel.com.co:9999/ITEL/Core/Proxies/ejecutarTramaEspecifica_PS?wsdl",
            "itel417ActivarGranel"=>"http://itelnn.comcel.com.co:9999/ITEL/Core/Proxies/ejecutarTramaEspecifica_PS?wsdl",
            "itel417DesactivarGranel"=>"http://itelnn.comcel.com.co:9999/ITEL/Core/Proxies/ejecutarTramaEspecifica_PS?wsdl",
            "itel210PaquetesActivos"=>"http://itelnn.comcel.com.co:9999/ITEL/Core/Proxies/ejecutarTramaEspecifica_PS?wsdl",
            "itel212PaquetesActivos"=>"http://itelnn.comcel.com.co:9999/ITEL/Core/Proxies/ejecutarTramaEspecifica_PS?wsdl",
            "itel220PaquetesActivosDTH"=>"http://itelnn.comcel.com.co:9999/ITEL/Core/Proxies/ejecutarTramaEspecifica_PS?wsdl",
            "itel223ValidarIpoConsumo"=>"http://itelnn.comcel.com.co:9999/ITEL/Core/Proxies/ejecutarTramaEspecifica_PS?wsdl",
            "itel215PaquetesDatos"=>"http://itelnn.comcel.com.co:9999/ITEL/Core/Proxies/ejecutarTramaEspecifica_PS?wsdl",
            "itel216ConsumoPaquetesDatos"=>"http://itelnn.comcel.com.co:9999/ITEL/Core/Proxies/ejecutarTramaEspecifica_PS?wsdl",
            "itel217ConsumoPaquetesDatosActivos"=>"http://itelnn.comcel.com.co:9999/ITEL/Core/Proxies/ejecutarTramaEspecifica_PS?wsdl",
            "itel409CompraPaqueresVoz"=>"http://itelnn.comcel.com.co:9999/ITEL/Core/Proxies/ejecutarTramaEspecifica_PS?wsdl",

            

            "retrieveBalances"=>"https://172.24.35.240/{PROJECT}/Services/Proxy_Pipelines/AccountManagement_PS?wsdl",

            //"getCitiConsumo"=>"https://172.23.50.227:443/1.0/consumo/57{AccountId}/{tipo}?integrator=MiCLARO&platform={platform}",
            "getCitiConsumo"=>"http://172.23.50.167:7003/siccon-webservices/api",
            
            "getSicconXdrConsumo"=>"http://172.23.50.167:7003/siccon-webservices/api",
            "getXdrResumenPrepago"=>"http://172.23.50.167:7003/siccon-webservices/api",

            "getSicconXdrRecargasPrepago"=>"http://172.23.50.167:7003/siccon-webservices/api",
            //"getXdrRecargasPrepago"=>"http://172.23.50.167:7008/xdrws/xdr/pre/recargas",
            "getXdrRecargasPrepago"=>"http://172.23.50.167:7003/siccon-webservices/api",

            "getXdrConsumo"=> "http://172.23.50.166:7009/xdrws/Claro/GPRS",//"http://172.23.50.167:7003/siccon-webservices/api",//"http://172.23.50.166:7009/xdrws/Claro/GPRS",
            
            //"getXdrConsumosPrepago"=>"http://172.23.50.167:7008/xdrws/xdr/pre/consumos",
            "getXdrConsumosPrepago"=>"http://172.23.50.167:7003/siccon-webservices/api",
            //LDI
            "getSicconLdiPospago"=>"http://172.23.50.167:7003/siccon-webservices/api",


            "getCustomerDocuments"=>"http://facturasclaro.paradigma.com.co/ebpClaro/Pages/Services/ServiceAppClaro.aspx/getCustomerDocuments",
            "getCustomerProducts"=>"http://facturasclaro.paradigma.com.co/ebpClaro/Pages/Services/ServiceAppClaro.aspx/getCustomerProducts",
            "sendDocumentByEmail"=>"http://facturasclaro.paradigma.com.co/ebpClaro/Pages/Services/ServiceAppClaro.aspx/sendDocumentByEmail",
            "getCustomerDocumentsAll"=>"http://facturasclaro.paradigma.com.co/ebpClaro/Pages/Services/ServiceAppClaro.aspx/getCustomerDocumentsAll",
            "getCustomerEmailAuthInfo"=>"http://facturasclaro.paradigma.com.co/ebpClaro/Pages/Services/ServiceAppClaro.aspx/getCustomerEmailAuthInfo",
            "setCustomerEmailAuth"=>"http://facturasclaro.paradigma.com.co/ebpClaro/Pages/Services/ServiceAppClaro.aspx/setCustomerEmailAuth",
            "getURLPDFDocument"=>"http://facturasclaro.paradigma.com.co/ebpClaro/Pages/Services/ServiceAppClaro.aspx/getURLPDFDocument",
            
            "app_getCiudadesWifi"=>"http://miclaro.appsclaro.com.co/WS/wigilabs.aspx?metodo=app_getCiudadesWifi",
            
            //Datos Compartidos
            "getCommunityInformation"=>"http://172.24.35.235:80/CommunityServiceApplication_SBProject/Proxies/CommunityInformationWS_PS?WSDL",
            "getTransactionCost"=>"http://172.24.35.235:80/CommunityServiceApplication_SBProject/Proxies/CommunityInformationWS_PS?WSDL",
            "getCommunityConsumption"=>"http://172.24.35.235:80/CommunityServiceApplication_SBProject/Proxies/CommunityInformationWS_PS?WSDL",
            "validateMember"=>"http://172.24.35.235:80/CommunityServiceApplication_SBProject/Proxies/CommunityValidationWS_PS?WSDL",
            "addMember"=>"http://172.24.35.235:80/CommunityServiceApplication_SBProject/Proxies/CommunityAdmWS_PS?WSDL",
            "modifyMember"=>"http://172.24.35.235:80/CommunityServiceApplication_SBProject/Proxies/CommunityAdmWS_PS?WSDL",
            "removeMember"=>"http://172.24.35.235:80/CommunityServiceApplication_SBProject/Proxies/CommunityAdmWS_PS?WSDL",
			
            //Consultar/Activar/Desactivar Familia y Amigos
            //"consultaFamiliaAmigos"=>"http://172.22.87.27:8102/WSFamiliaAmigos/WSFamiliaAmigosService?WSDL",
            //"activarDesactivarServicio"=>"http://172.22.87.27:8102/WSFamiliaAmigos/WSFamiliaAmigosService?WSDL",
            "consultaFamiliaAmigos"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?WSDL",
            "activarDesactivarServicio"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?WSDL",

            //Referidos
            "ConsultarCupon"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?WSDL",
            "RedencionCupon"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?WSDL",
			
			//GPS
			"ListarAgenda"=>$urlGPS."ConsultaAgendaMGW/ListarAgenda/{AccountId}",
			"EstadoAgenda"=>$urlGPS."ConsultaAgendaMGW/EstadoAgenda/{idAgenda}",
			"getActivities"=>"https://api.etadirect.com/rest/ofscCore/v1/activities/custom-actions/search?searchInField=apptNumber&searchForValue={orden}&dateFrom={fechaIni}&dateTo={fechaFin}",
			"getDetalleVisita"=>"https://api.etadirect.com/rest/ofscCore/v1/activities/{activityId}",
			"getDetalleTecnico"=>"https://api.etadirect.com/rest/ofscCore/v1/resources/{resourceId}",
			"getSmartLocation"=>"https://api.etadirect.com/soap/location/?wsdl",
			"envioCorreoVisita"=>$urlGPS."ConsultaAgendaMGW/EnvioMailAgenda/{orden}/{tipo}/{correo}/1",
			"cancelarVisita"=>$urlGPS."ConsultaAgendaMGW/SolicitarCancelacionAgenda/{orden}/{tipo}/{idMotivo}/{observaciones}",
            
            //Elegidos fija
            //"retrievePlanFija"=>"http://172.24.160.135:8080:8080/SelfServiceFixed_Project/Services/Proxy_Pipelines/ServiceManagement_PS",
            "retrievePlanFija"=>"http://172.24.160.135:8080/SelfServiceFixed_Project/Services/Proxy_Pipelines/ServiceManagement_PS",
            //"consultarTest"=>"https://10.244.143.134/OperacionElegidoEJB/OperacionElegidoEJBService?wsdl",
            "realizarOperacion"=>"https://10.244.143.134/OperacionElegidoEJB/OperacionElegidoEJBService?wsdl",
            "consulta_fijo_masivo"=>"http://172.22.84.4:8080/AmigoClaroFijoWS/AmigoClaroFijo?WSDL",
            "RecSinergia"=>"http://172.22.84.4:8080/AmigoClaroFijoWS/AmigoClaroFijo?WSDL",

            //blindaje
            "AceptarPropuestaOferta"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?WSDL",

            //lista paquetes por categoria
            "ConsultarCatalogoPaqueteRecarga"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?wsdl",
            //Blindaje
            "getSicconBlindaje"=>"http://172.23.50.167:7003/siccon-webservices/api",
            "historicoPaquetes"=>"http://172.23.50.167:7003/siccon-webservices/api",
            //IMEI            
            //"ConsultarImei"=>"http://172.24.129.95:8002/GestionImeiV1/Proxies/GestionImeiServiceV1.0_PS?wsdl",
            "ConsultarImei"=>"http://172.24.160.135:8080/GestionImeiV1/Proxies/GestionImeiServiceV1.0_PS?WSDL",
            //"RegistrarImei"=>"http://172.24.129.95:8002/GestionImeiV1/Proxies/GestionImeiServiceV1.0_PS?wsdl",
            "RegistrarImei"=>"http://172.24.160.135:8080/GestionImeiV1/Proxies/GestionImeiServiceV1.0_PS?WSDL",
            //IMEI 2
            //"RegistrarImeiDuplicado" => "http://172.24.160.135:8080/GestionImeiV1/Proxies/GestionImeiServiceV1.0_PS?WSDL",
            "RegistrarImeiDuplicado" => "http://172.24.160.135:8080/GestionImeiV1/Proxies/GestionImeiServiceV1.0_PS?WSDL",
            "ValidarRegistroAnexo2" => "http://172.24.160.135:8080/GestionImeiV1/Proxies/GestionImeiServiceV1.0_PS?WSDL",

            "consultaInformacion"=>"http://172.22.61.94:9028/WSRegistroEquipos/WSRegistroEquiposService?WSDL",
            "ConsultaInfo"=>"http://172.22.61.94:9028/WSRegistroEquipos/WSRegistroEquiposService?WSDL",
            //blindaje
            "ConsultarOfertaBeneficioMovil"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?wsdl",
            "AceptarOfertaBeneficioMovil"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?wsdl",
            "ConsultarOfertaBeneficioFija"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?wsdl",
            "AceptarOfertaBeneficioFija"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?wsdl",

            /****INSPIRA****/
            //Tabla Bridge            
            "getAplicationsCustomer" =>"http://172.24.42.211:8002/TableBridge/V1.0?wsdl",
            
            //consuntar saldo
            "consultarSaldoTotal"=>"http://172.22.61.94:8080/WSConsultaSaldoFactura/WSConsultaSaldoFacturaService?WSDL",

            //ValidacionDeComportamientoDeUsuario -- REPOS
            "GetCustomerInformation"=>"http://172.22.83.114:85/Comcel.Repos.Wcf.Replacement/ReplacementService.svc?wsdl",

            //oferta datos personalizada
            "consultaSoluciones"=>"http://172.22.61.94:9017/WSOfertaDatosPersonalizada/WSOfertaDatosPersonalizadaService?WSDL",
            "PersonalizacionOfertaUsuario"=>"http://172.22.61.94:9017/WSOfertaDatosPersonalizada/WSOfertaDatosPersonalizadaService?WSDL",
            //Consulta detalle plan prepago
            "Info_Comercial_Plan"=>"http://172.22.61.94:8080/WSPromociones_Servicios_PROD/WSPromocionesService?wsdl",
            //Contro usuario Protabilidad
            "ControlUsuariosPortabilidad"=> "http://172.24.35.235/ControlUsuariosPortabilidad/Proxies/ControlUsuariosPortabilidadV1.0_PS?wsdl",
            //UpdateCustomerData: Movi && Fija 
            "updateCustomerData"=> "http://172.24.160.135:8080/{PROJECT}/Services/Proxy_Pipelines/AccountManagement_PS",
            //paquetes complemetario
            "listarOfertaComercial"=>"http://172.22.61.94:9024/WSPaquetesComplementarios/WSPaquetesComplementariosService?wsdl",
            "consultarPaqueteComplementario" => "http://172.22.61.94:9024/WSPaquetesComplementarios/WSPaquetesComplementariosService?wsdl",
            "activarPaquete" => "http://172.22.61.94:9024/WSPaquetesComplementarios/WSPaquetesComplementariosService?wsdl",
            "desactivarPaquete" => "http://172.22.61.94:9024/WSPaquetesComplementarios/WSPaquetesComplementariosService?wsdl",
            "ConsultarOfertaBeneficioMovilPrepago"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?wsdl",
            "NotificarCompraPaqueteComplementario"=>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?wsdl",
            //RoamingInternacional
            "retrieveRoamingService"=>"http://172.24.160.135:8080/SelfServiceMobile_Project/Services/Proxy_Pipelines/ServiceManagement_PS",
            //"activateRoamingService"=>"http://172.24.160.135:8080:8080/SelfServiceMobile_Project/Services/Proxy_Pipelines/ServiceManagement_PS",
            "activateRoamingService"=>"http://172.24.160.135:8080/{PROJECT}/Services/Proxy_Pipelines/ServiceManagement_PS?WSDL",
            "addVAS"=>"http://172.24.160.135:8080/SelfServiceMobile_Project/Services/Proxy_Pipelines/ServiceManagement_PS",
            //NIP
            "ValidateUserAppNIP"=>"http://172.24.160.135:8080/NIPService_Project/Services/Proxy_Pipelines/NIPService_Main_PS?WSDL",
            "ApplyNIP"=>"http://172.24.160.135:8080/NIPService_Project/Services/Proxy_Pipelines/NIPService_Main_PS?WSDL",
            //Pasatiempos
            "validarCondiciones" => "http://172.22.61.94:9026/PasaTiempoWS/PasatiempoWS?WSDL",
            "validarRecarga" => "http://172.22.61.94:9026/PasaTiempoWS/PasatiempoWS?WSDL",
            "ejecutaPasatiempo" => "http://172.22.61.94:9026/PasaTiempoWS/PasatiempoWS?WSDL",
            //IMEI-->3
            "ConsultarImei" => "http://172.24.160.135:8080/GestionImeiV1/Proxies/GestionImeiServiceV1.0_PS?WSDL",
            //Traslados
            "TransladoDigitalRS"=>"http://172.24.160.148:8080/wsDime/Proxies/trasladoDigital_PS",

            "conWS_Result"=>"http://172.24.160.127:9011/FinancingIntegrator/Core/Proxies/consultaFinanciacionDetallada_PS?WSDL",

            "ReportarRoboPerdidaImei" => "http://172.24.160.135:8080/GestionImeiV1/Proxies/GestionImeiServiceV1.0_PS?WSDL",
            //Rio
            "RegistrarCuentaListaBlancaRIO" =>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?wsdl",
            //SubidaYBajada
            "ConsultarVelocidadServicioInternetHogar" =>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?wsdl",
            //Compra de Paquetes Roaming
            "ConsultarCatalogoPaqueteRoaming" =>"http://190.85.248.31/SelfCare/SelfCareManagementService.svc?wsdl",
            //Compra de Paquetes recurrentes Prepago (Activar)
            "ActivarPaqueteRecurrente" =>"http://172.24.160.134:8083/WSPaquetesBundle/WsPaquetesBundleService?WSDL",
            //Compra de Paquetes recurrentes Prepago (Desactivar)
            "DesactivarSuscripcion" =>"http://172.24.160.134:8083/WSPaquetesBundle/WsPaquetesBundleService?WSDL",
            //Compra de Paquetes recurrentes Prepago (Consultar)
            "ConsultaSuscripcion" =>"http://172.24.160.134:8083/WSPaquetesBundle/WsPaquetesBundleService?WSDL"
    );

$config["selfcare"]=array(
      "RegistrarCuentaListaBlancaRIO"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/registrarCuentaListaBlancaRIO\"",
      "AceptarOfertaBeneficioFija"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/aceptarOfertaBeneficioFija\"",
      "ConsultarOfertaBeneficioFija"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/consultarOfertasBeneficioFija\"",
      "AceptarOfertaBeneficioMovil"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/aceptarOfertaBeneficioMovil\"",
      "ConsultarOfertaBeneficioMovil"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/consultarOfertasBeneficioMovil\"",
      "GenerarOTPValidacionNombreUsuario"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/generarOTPValidacionNombreUsuario\"",
        "ConsultarProductosRepos"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/consultarProductos\"",
        "ConsultarDetalleProducto"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/consultarDetalleProducto\"",
        "SolicitarPedido"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/solictarPedido\"",        
        "AceptarPropuestaOferta"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/aceptarPropuestaOferta\"",
        "RegistrarConsultaContrato"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/registrarConsultaContrato\"",
        "ConsultarInformacionCuentaMovil"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/consultarInformacionCuentaMovil\"",
        "ValidacionRegistroUsuario"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/validacionRegistroUsuario\"",
        "RegistroUsuario"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/registroUsuario\"",
        "solicitudRecuperarClave"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/recuperarContraseñaUsuario\"",
        "solicitudCambioClave"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/cambiarContraseñaUsuario\"",
        "LoginUsuario"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/loginUsuario\"",
        "NotificarCompraPaqueteElegible"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/notificarCompraPaqueteElegible\"",
        "SolicitarCambioNombreUsuario"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/solicitarCambioNombreUsuario\"",
        "ConsultarVelocidadServicioInternetHogar"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/consultarVelocidadServicioInternetHogar\"",
        "ConsultarCatalogoPaqueteRoaming"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/consultarCatalogoPaqueteRoaming\"",
        
        "ConsultarInformacionUsuario"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/consultarInformacionUsuario\"",

        "AsociarCuentaUsuario"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/asociarCuentaUsuario\"",
        "ValidarRegistroCuentaClienteFija"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/validarRegistroCuentaClienteFija\"",
        "ConsultarEstadoCuentaFija"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/consultarEstadoCuentaFija\"",
        "ConsultarPaquetes"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/consultarPaquetes\"",
        "CambiarNumeroMovil"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/cambiarNumeroMovil\"",
        "ConfigurarFacturaElectronicaMovil"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/configurarFacturaElectronicaMovil\"",
        "DesactivarCuentaUsuario"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/desactivarCuentaUsuario\"",
        "CambiarPlanMovil"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/cambiarPlanMovil\"",
		"getSmartLocation"=>"SOAPAction: \"locationService/get_position\"",
        "GenerarOTP"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/generarOTPUsuario\"",
        "generarOTPUsuario"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/generarOTPUsuario\"",
        "RegistroAliasCuenta"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/registrarAliasCuenta\"",
		"SolicitarTokenAutenticacionSSO"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/solicitarTokenAutenticacionSSO\"",
        "ConsultarCupon"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/consultarCupones\"",
        "RedencionCupon"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/redencionCupon\"",
        "consultaFamiliaAmigos"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/consultaFamiliaAmigos\"",
        "activarDesactivarServicio"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/activarDesactivarServicio\"",
        "retrievePlanFija"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/retrievePlan\"",
        "ConsultarPlanesPospago"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/consultarPlanesPospago\"",
        "ValidarCompraPaquetePartido"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/validarCompraPaquetePartido\"",
        "ComprarPaquetePartido"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/comprarPaquetePartido\"",
        "ConsultarCatalogoPaqueteRecarga"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/consultarCatalogoPaqueteRecarga\"",
        "ValidarUsuarioCliente"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/validarUsuarioCliente\"",
        "ConsultarOfertaBeneficioMovilPrepago"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/consultarOfertaBeneficioMovilPrepago\"",
        "NotificarCompraPaqueteComplementario"=>"SOAPAction: \"Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/notificarCompraPaqueteComplementario\"",
        "GetCustomerInformation"=>"SOAPAction: \"http://tempuri.org/IReplacementService/GetCustomerInformation\""
    );



/*
|--------------------------------------------------------------------------
| Index File
|--------------------------------------------------------------------------
|
| Typically this will be your index.php file, unless you've renamed it to
| something else. If you are using mod_rewrite to remove the page set this
| variable so that it is blank.
|
*/
$config['index_page'] = 'index.php';

/*
|--------------------------------------------------------------------------
| URI PROTOCOL
|--------------------------------------------------------------------------
|
| This item determines which server global should be used to retrieve the
| URI string.  The default setting of 'REQUEST_URI' works for most servers.
| If your links do not seem to work, try one of the other delicious flavors:
|
| 'REQUEST_URI'    Uses $_SERVER['REQUEST_URI']
| 'QUERY_STRING'   Uses $_SERVER['QUERY_STRING']
| 'PATH_INFO'      Uses $_SERVER['PATH_INFO']
|
| WARNING: If you set this to 'PATH_INFO', URIs will always be URL-decoded!
*/
$config['uri_protocol']	= 'REQUEST_URI';

/*
|--------------------------------------------------------------------------
| URL suffix
|--------------------------------------------------------------------------
|
| This option allows you to add a suffix to all URLs generated by CodeIgniter.
| For more information please see the user guide:
|
| http://codeigniter.com/user_guide/general/urls.html
*/
$config['url_suffix'] = '';

/*
|--------------------------------------------------------------------------
| Default Language
|--------------------------------------------------------------------------
|
| This determines which set of language files should be used. Make sure
| there is an available translation if you intend to use something other
| than english.
|
*/
$config['language']	= 'spanish';

/*
|--------------------------------------------------------------------------
| Default Character Set
|--------------------------------------------------------------------------
|
| This determines which character set is used by default in various methods
| that require a character set to be provided.
|
| See http://php.net/htmlspecialchars for a list of supported charsets.
|
*/
$config['charset'] = 'UTF-8';

/*
|--------------------------------------------------------------------------
| Enable/Disable System Hooks
|--------------------------------------------------------------------------
|
| If you would like to use the 'hooks' feature you must enable it by
| setting this variable to TRUE (boolean).  See the user guide for details.
|
*/
$config['enable_hooks'] = FALSE;

/*
|--------------------------------------------------------------------------
| Class Extension Prefix
|--------------------------------------------------------------------------
|
| This item allows you to set the filename/classname prefix when extending
| native libraries.  For more information please see the user guide:
|
| http://codeigniter.com/user_guide/general/core_classes.html
| http://codeigniter.com/user_guide/general/creating_libraries.html
|
*/
$config['subclass_prefix'] = 'MY_';

/*
|--------------------------------------------------------------------------
| Composer auto-loading
|--------------------------------------------------------------------------
|
| Enabling this setting will tell CodeIgniter to look for a Composer
| package auto-loader script in application/vendor/autoload.php.
|
|	$config['composer_autoload'] = TRUE;
|
| Or if you have your vendor/ directory located somewhere else, you
| can opt to set a specific path as well:
|
|	$config['composer_autoload'] = '/path/to/vendor/autoload.php';
|
| For more information about Composer, please visit http://getcomposer.org/
|
| Note: This will NOT disable or override the CodeIgniter-specific
|	autoloading (application/config/autoload.php)
*/
$config['composer_autoload'] = FALSE;

/*
|--------------------------------------------------------------------------
| Allowed URL Characters
|--------------------------------------------------------------------------
|
| This lets you specify which characters are permitted within your URLs.
| When someone tries to submit a URL with disallowed characters they will
| get a warning message.
|
| As a security measure you are STRONGLY encouraged to restrict URLs to
| as few characters as possible.  By default only these are allowed: a-z 0-9~%.:_-
|
| Leave blank to allow all characters -- but only if you are insane.
|
| The configured value is actually a regular expression character group
| and it will be executed as: ! preg_match('/^[<permitted_uri_chars>]+$/i
|
| DO NOT CHANGE THIS UNLESS YOU FULLY UNDERSTAND THE REPERCUSSIONS!!
|
*/
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';

/*
|--------------------------------------------------------------------------
| Enable Query Strings
|--------------------------------------------------------------------------
|
| By default CodeIgniter uses search-engine friendly segment based URLs:
| example.com/who/what/where/
|
| By default CodeIgniter enables access to the $_GET array.  If for some
| reason you would like to disable it, set 'allow_get_array' to FALSE.
|
| You can optionally enable standard query string based URLs:
| example.com?who=me&what=something&where=here
|
| Options are: TRUE or FALSE (boolean)
|
| The other items let you set the query string 'words' that will
| invoke your controllers and its functions:
| example.com/index.php?c=controller&m=function
|
| Please note that some of the helpers won't work as expected when
| this feature is enabled, since CodeIgniter is designed primarily to
| use segment based URLs.
|
*/
$config['allow_get_array'] = TRUE;
$config['enable_query_strings'] = FALSE;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd';

/*
|--------------------------------------------------------------------------
| Error Logging Threshold
|--------------------------------------------------------------------------
|
| You can enable error logging by setting a threshold over zero. The
| threshold determines what gets logged. Threshold options are:
|
|	0 = Disables logging, Error logging TURNED OFF
|	1 = Error Messages (including PHP errors)
|	2 = Debug Messages
|	3 = Informational Messages
|	4 = All Messages
|
| You can also pass an array with threshold levels to show individual error types
|
| 	array(2) = Debug Messages, without Error Messages
|
| For a live site you'll usually only enable Errors (1) to be logged otherwise
| your log files will fill up very fast.
|
*/
$config['log_threshold'] = 0;

/*
|--------------------------------------------------------------------------
| Error Logging Directory Path
|--------------------------------------------------------------------------
|
| Leave this BLANK unless you would like to set something other than the default
| application/logs/ directory. Use a full server path with trailing slash.
|
*/
$config['log_path'] = '';

/*
|--------------------------------------------------------------------------
| Log File Extension
|--------------------------------------------------------------------------
|
| The default filename extension for log files. The default 'php' allows for
| protecting the log files via basic scripting, when they are to be stored
| under a publicly accessible directory.
|
| Note: Leaving it blank will default to 'php'.
|
*/
$config['log_file_extension'] = '';

/*
|--------------------------------------------------------------------------
| Log File Permissions
|--------------------------------------------------------------------------
|
| The file system permissions to be applied on newly created log files.
|
| IMPORTANT: This MUST be an integer (no quotes) and you MUST use octal
|            integer notation (i.e. 0700, 0644, etc.)
*/
$config['log_file_permissions'] = 0644;

/*
|--------------------------------------------------------------------------
| Date Format for Logs
|--------------------------------------------------------------------------
|
| Each item that is logged has an associated date. You can use PHP date
| codes to set your own date formatting
|
*/
$config['log_date_format'] = 'Y-m-d H:i:s';

/*
|--------------------------------------------------------------------------
| Error Views Directory Path
|--------------------------------------------------------------------------
|
| Leave this BLANK unless you would like to set something other than the default
| application/views/errors/ directory.  Use a full server path with trailing slash.
|
*/
$config['error_views_path'] = '';

/*
|--------------------------------------------------------------------------
| Cache Directory Path
|--------------------------------------------------------------------------
|
| Leave this BLANK unless you would like to set something other than the default
| application/cache/ directory.  Use a full server path with trailing slash.
|
*/
$config['cache_path'] = '';

/*
|--------------------------------------------------------------------------
| Cache Include Query String
|--------------------------------------------------------------------------
|
| Whether to take the URL query string into consideration when generating
| output cache files. Valid options are:
|
|	FALSE      = Disabled
|	TRUE       = Enabled, take all query parameters into account.
|	             Please be aware that this may result in numerous cache
|	             files generated for the same page over and over again.
|	array('q') = Enabled, but only take into account the specified list
|	             of query parameters.
|
*/
$config['cache_query_string'] = FALSE;

/*
|--------------------------------------------------------------------------
| Encryption Key
|--------------------------------------------------------------------------
|
| If you use the Encryption class, you must set an encryption key.
| See the user guide for more info.
|
| http://codeigniter.com/user_guide/libraries/encryption.html
|
*/
$config['encryption_key'] = 'hidesoft';

/*
|--------------------------------------------------------------------------
| Session Variables
|--------------------------------------------------------------------------
|
| 'sess_driver'
|
|	The storage driver to use: files, database, redis, memcached
|
| 'sess_cookie_name'
|
|	The session cookie name, must contain only [0-9a-z_-] characters
|
| 'sess_expiration'
|
|	The number of SECONDS you want the session to last.
|	Setting to 0 (zero) means expire when the browser is closed.
|
| 'sess_save_path'
|
|	The location to save sessions to, driver dependent.
|
|	For the 'files' driver, it's a path to a writable directory.
|	WARNING: Only absolute paths are supported!
|
|	For the 'database' driver, it's a table name.
|	Please read up the manual for the format with other session drivers.
|
|	IMPORTANT: You are REQUIRED to set a valid save path!
|
| 'sess_match_ip'
|
|	Whether to match the user's IP address when reading the session data.
|
|	WARNING: If you're using the database driver, don't forget to update
|	         your session table's PRIMARY KEY when changing this setting.
|
| 'sess_time_to_update'
|
|	How many seconds between CI regenerating the session ID.
|
| 'sess_regenerate_destroy'
|
|	Whether to destroy session data associated with the old session ID
|	when auto-regenerating the session ID. When set to FALSE, the data
|	will be later deleted by the garbage collector.
|
| Other session cookie settings are shared with the rest of the application,
| except for 'cookie_prefix' and 'cookie_httponly', which are ignored here.
|
*/
$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'ci_session';
$config['sess_expiration'] = 7200;
$config['sess_save_path'] = NULL;
$config['sess_match_ip'] = FALSE;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = FALSE;

/*
|--------------------------------------------------------------------------
| Cookie Related Variables
|--------------------------------------------------------------------------
|
| 'cookie_prefix'   = Set a cookie name prefix if you need to avoid collisions
| 'cookie_domain'   = Set to .your-domain.com for site-wide cookies
| 'cookie_path'     = Typically will be a forward slash
| 'cookie_secure'   = Cookie will only be set if a secure http connection exists.
| 'cookie_httponly' = Cookie will only be accessible via HTTP(S) (no javascript)
|
| Note: These settings (with the exception of 'cookie_prefix' and
|       'cookie_httponly') will also affect sessions.
|
*/
$config['cookie_prefix']	= '';
$config['cookie_domain']	= '';
$config['cookie_path']		= '/';
$config['cookie_secure']	= FALSE;
$config['cookie_httponly'] 	= FALSE;

/*
|--------------------------------------------------------------------------
| Standardize newlines
|--------------------------------------------------------------------------
|
| Determines whether to standardize newline characters in input data,
| meaning to replace \r\n, \r, \n occurrences with the PHP_EOL value.
|
| This is particularly useful for portability between UNIX-based OSes,
| (usually \n) and Windows (\r\n).
|
*/
$config['standardize_newlines'] = FALSE;

/*
|--------------------------------------------------------------------------
| Global XSS Filtering
|--------------------------------------------------------------------------
|
| Determines whether the XSS filter is always active when GET, POST or
| COOKIE data is encountered
|
| WARNING: This feature is DEPRECATED and currently available only
|          for backwards compatibility purposes!
|
*/
$config['global_xss_filtering'] = FALSE;

/*
|--------------------------------------------------------------------------
| Cross Site Request Forgery
|--------------------------------------------------------------------------
| Enables a CSRF cookie token to be set. When set to TRUE, token will be
| checked on a submitted form. If you are accepting user data, it is strongly
| recommended CSRF protection be enabled.
|
| 'csrf_token_name' = The token name
| 'csrf_cookie_name' = The cookie name
| 'csrf_expire' = The number in seconds the token should expire.
| 'csrf_regenerate' = Regenerate token on every submission
| 'csrf_exclude_uris' = Array of URIs which ignore CSRF checks
*/
$config['csrf_protection'] = FALSE;
$config['csrf_token_name'] = 'csrf_test_name';
$config['csrf_cookie_name'] = 'csrf_cookie_name';
$config['csrf_expire'] = 7200;
$config['csrf_regenerate'] = TRUE;
$config['csrf_exclude_uris'] = array();

/*
|--------------------------------------------------------------------------
| Output Compression
|--------------------------------------------------------------------------
|
| Enables Gzip output compression for faster page loads.  When enabled,
| the output class will test whether your server supports Gzip.
| Even if it does, however, not all browsers support compression
| so enable only if you are reasonably sure your visitors can handle it.
|
| Only used if zlib.output_compression is turned off in your php.ini.
| Please do not use it together with httpd-level output compression.
|
| VERY IMPORTANT:  If you are getting a blank page when compression is enabled it
| means you are prematurely outputting something to your browser. It could
| even be a line of whitespace at the end of one of your scripts.  For
| compression to work, nothing can be sent before the output buffer is called
| by the output class.  Do not 'echo' any values with compression enabled.
|
*/
$config['compress_output'] = FALSE;

/*
|--------------------------------------------------------------------------
| Master Time Reference
|--------------------------------------------------------------------------
|
| Options are 'local' or any PHP supported timezone. This preference tells
| the system whether to use your server's local time as the master 'now'
| reference, or convert it to the configured one timezone. See the 'date
| helper' page of the user guide for information regarding date handling.
|
*/
$config['time_reference'] = 'local';

/*
|--------------------------------------------------------------------------
| Rewrite PHP Short Tags
|--------------------------------------------------------------------------
|
| If your PHP installation does not have short tag support enabled CI
| can rewrite the tags on-the-fly, enabling you to utilize that syntax
| in your view files.  Options are TRUE or FALSE (boolean)
|
| Note: You need to have eval() enabled for this to work.
|
*/
$config['rewrite_short_tags'] = FALSE;

/*
|--------------------------------------------------------------------------
| Reverse Proxy IPs
|--------------------------------------------------------------------------
|
| If your server is behind a reverse proxy, you must whitelist the proxy
| IP addresses from which CodeIgniter should trust headers such as
| HTTP_X_FORWARDED_FOR and HTTP_CLIENT_IP in order to properly identify
| the visitor's IP address.
|
| You can use both an array or a comma-separated list of proxy addresses,
| as well as specifying whole subnets. Here are a few examples:
|
| Comma-separated:	'10.0.1.200,192.168.5.0/24'
| Array:		array('10.0.1.200', '192.168.5.0/24')
*/
$config['proxy_ips'] = '';
