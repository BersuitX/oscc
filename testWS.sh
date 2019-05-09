#!/bin/bash
#FILEC="retrieveC.xml"
#FILER="vn.xml"
#FILER="validateNumber.json"
#FILER="retrieveR.xml"
FILER="retrieveP.xml"

URL_WS="http://172.24.160.135:8080/SelfServiceMobile_Project/Services/Proxy_Pipelines/ServiceManagement_PS?WSDL"
#URL_WS="https://www.apiselfservice.co/api/index.php/v1/soap/validateMember.json";
#time curl -v --trace-time -X POST --data @${FILEC} $URL_WS
cnt=1
tests=${1:-10}
secs=${2:-0}

while [ $cnt -le $tests ];
do
 echo "==================== $cnt ====================";
 time curl -X POST -H "Content-Type: text/xml" --data @${FILER} $URL_WS
 let cnt++
 sleep $secs
done


#URL_WS="https://www.apiselfservice.co/SelfServiceMobile_Project/Services/Proxy_Pipelines/ServiceManagement_PS"
#URL_WS="http://www.apiselfservice.co/api/index.php/v1/soap/retrieveConsumptionDetailInformation.json"
#URL_WS="https://www.apiselfservice.co/api/index.php/v1/soap/retrievePlan.json"
#URL_WS="https://www.apiselfservice.co/api/index.php/v1/soap/validateNumber.json"
#URL_WS="http://172.24.160.135:8080/SelfServiceMobile_Project/Services/Proxy_Pipelines/ServiceManagement_PS?WSDL"
#URL_WS_DOC="https://apiselfservice.co/api/index.php/v1/soap/document.json"
#URL_WS_CODE_DOC="https://apiselfservice.co/api/index.php/v1/soap/codificacionContrato.json"

#curl ${CURL_OPTS} --data @retrievePlan.json --trace retrievePlan.log ${URL_WS}

#curl ${CURL_OPTS} --data @validateNumber.json --trace validateNumber.log ${URL_WS}

#curl ${CURL_OPTS} --data @retrieveConsumptionDetailInformation.json --trace consumo.log ${URL_WS}

#curl ${CURL_OPTS} --data @document.json ${URL_WS_DOC}

#curl ${CURL_OPTS} --data @document.json ${URL_WS_CODE_DOC}

#curl -v -X POST -H "Content-type: text/xml" -H "SOAPAction:Claro.SelfCareManagement.Services.Entities.Contracts/SelfCareManagementService/loginUsuario" ${CURL_OPTS} --data @login.xml http://190.85.248.31/SelfCare/SelfCareManagementService.svc?wsdl



