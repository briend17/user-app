<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# User App
<p>
    Proyecto realizado para cumplir el ciclo básico de registro de usuarios (CRUD), donde el administrador pueda ingresar, realizar operaciones CRUD con los usuarios, el usuario registrado recibirá un mail de bienvenida, de igual forma el administrador recibirá un mail con el conteo de usuarios por país.
</p>

## Disposición técnica
<ul>
    <li>Laravel 8</li>
    <li>Blade</li>
    <li>Tailwind css</li>
    <li>Postgresql</li>
    <li>Vue js</li>
    <li>Inertia js</li>
    <li>Git flow</li>
</ul>

## Instalación
<ul>
    <li>Clonar proyecto o descargar como zip</li>
    <li>Crear archivo .env tomando como base .env.example</li>
    <li>Configurar credenciales de BD en archivo .env</li>
    <li>Desde la linea de comandos:
        <ul>
            <li>composer install</li>
            <li>npm install && npm run dev</li>
            <li>php artisan key:generate</li>
            <li>Configurar Base de datos en archivo .env</li>
            <li>php artisan migrate --seed</li>
        </ul>
     </li>
</ul>

## Configuración email
    Para el correcto funcionaminto del envío de emails, es necesario configurar las variable de entorno correspondientes de acuerdo al driver de su preferencia, para las pruebas se utilizó mailtrap.
Finalizada la configuración: php artisan config:cache

Parámetro de configuración email de administrador:
Para esta configuración se debe modificar el usuario con perfil de administrador, ya que ese email es el utilizado para enviar el mail de usuarios por pais.

## Credenciales de acceso

    Usuario Administrador:
    email: admin@userapp.com.co
    clave: 12345678

    Usuario Cliente:
    Pueden ser registrados por el administrador sin límite alguno.

## Características principales puestas en práctica
<ul>
    <li>
        Metodología git flow, para control de versiones.
    </li>
    <li>
        Variables de entorno, para conexion a BD y envío de correos.
    </li>
    <li>
        Events y Listeners, para gestionar el envío de mails.
    </li>
    <li>
        Migraciones, BD relacional, relaciones eloquent.
    </li>
    <li>
    	Frontend, Vue js - Inertia js 
    </li>
</ul>
