# sat-simulacion-client-php

API para simular la extracción de información fiscal del SAT para personas morales.
<br/><br><img src='https://developer.circulodecredito.com.mx/sites/default/files/2020-10/circulo_de_credito-apihub.png' height='40' width='220'/></p><br/>

## Requisitos

PHP >= 7.2
### Dependencias adicionales
- Composer [vea como instalar][1]
- Se debe contar con las siguientes dependencias de PHP:
    - ext-curl
    - ext-mbstring
```sh
# RHEL distros
yum install php-mbstring
yum install curl
# Debian distros
apt-get install php-mbstring
apt-get install php-curl
```

## Instalación

Ejecutar: `composer install`

## Guía de inicio

### Paso 1. Agregar el producto a la aplicación

Al iniciar sesión seguir los siguientes pasos:

 1. Dar clic en la sección "**Mis aplicaciones**".
 2. Seleccionar la aplicación.
 3. Ir a la pestaña de "**Editar '@tuApp**' ".
    <p align="center">
      <img src="https://github.com/APIHub-CdC/imagenes-cdc/blob/master/edit_applications.jpg" width="900">
    </p>
 4. Al abrirse la ventana emergente, seleccionar el producto.
 5. Dar clic en el botón "**Guardar App**":
    <p align="center">
      <img src="https://github.com/APIHub-CdC/imagenes-cdc/blob/master/selected_product.jpg" width="400">
    </p>


### Paso 2. Modificar URL y credenciales

 Modificar la URL y las credenciales de acceso a la petición en ***test/Api/CredentialsApiTest.php***, como se muestra en el siguiente fragmento de código:

```php
...
public  function setUp():  void {
    $this->apiKey =  "your-api-key";
    $apiUrl       =  "https://api-url";
    $this->config =  new Configuration();
    $this->config->setHost($apiUrl);
    
    $this->httpClient =  new HttpClient();
}
...
 ```
 
 ### Paso 3. Capturar los datos y realizar la petición

> **NOTA:** Los datos de la siguiente petición son sólo representativos.
```php
...
public  function testPostCredentials()  {
        $requestPayload = new  CredentialCiecInput();
        $requestPayload->setType("ciec");
        $requestPayload->setRfc("");
        $requestPayload->setPassword("");
    
        $response = null;
    
        try  {
            $client = new CredentialsApi($this->httpClient, $this->config);
            $response = $client->createCredential($this->apiKey, $requestPayload);
            print("\n".$response);
            
        }  catch  (ApiException $exception)  {
            print("\nThe HTTP request failed, an error occurred: ".($exception->getMessage()));
            print("\n".$exception->getResponseObject());
        }
    
        $this->assertNotNull($response);
    }
...
```

## Pruebas unitarias

Para ejecutar las pruebas unitarias:
```sh
./vendor/bin/phpunit
```
[1]: https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos

---
[CONDICIONES DE USO, REPRODUCCIÓN Y DISTRIBUCIÓN](https://github.com/APIHub-CdC/licencias-cdc)

[1]: https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos
