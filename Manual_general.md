# Manual General de Laravel

Este documento contiene algunas indicaciones o comandos basicos para la creacion de proyectos _Web_ cpon el _framework Laravel_.

- ## Creacion de proyectos

  Este comando crea un proyecto _Laravel_

  _$ composer create-project laravel/laravel nombre-proyecto_

- ## Componente _artisan_

  _Artisan_ es una linea de comandos, creada para poder trabajar en _laravel_, nos ayuda a tener comandos establecidos para ciertas actividades

  - **Ver lista de comandos y funcionalidades que nos suministra _artisan_**

    _$ php artisan_

  - **Ejecutar proyecto**

    _$ php artisan serve_

  - **Migraciones**

    _Laravel_ cuenta con un _ORM_ robusto el cual nos permitira administrar la base de dats d emanera eficientes,

    - Modelos

      Como todo _ORM_ este se basa en modelos, mara crear un modelo usaremos el siguiebte comando

      _$ php artisan make:model modelo -m_

      **_make:model_** es la directoiva que me permite crear el nuevo modelo **_-m_** esla directiva que usamos para indicar que al momento de crear el modelo tambien me cree la migracion correspondiente

      Para apliar la migracion usaremos el siguiente comando

      _$ php artisan migrate_

      Esto aplicara todas las migraciones pendientes, para ver el estado de las migraciones usaremos el comando

      _$ php artisan migrate:status_

      En caso de querernos desacer del ultimo cambio ejecutamos el sigiente comando

      _$ php artisan migrate:rollback_

  - Controladores

    Los controladores me permitiran unir la vista con el modelo, para crear un controlador usamos el siguiente comando

    _$ php artisan make:controller nombrw_controlador_

- **Sintaxis de plantillas _Laravel_**

  Laravel cuenta con un sistema de plantillas que me permite crear componentes los cuales pueden ser heredados o incorporados entre ellos

  - **_@yield_**

    Esta directiva me crea un espacio dentro de un componente, el cual puede hacerse referencia desde otra plantilla, para crear un espacio se hace de la siguiente manera:

    _@yield('seccion')_

    Para poder usar la plantilla donde creamos este espacio se usa este codigo

    _@extends('plantilla_maestra');_ **<-** Extendemos de l aplantilla maestra

    _@section('seccion')_ **<-** Abrimos el bloque se seccion definico den laplantilla maestra

    _@endsection_ **<-** Cerramos el bloque de seccion definido en la plantilla maestra
