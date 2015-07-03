#Filemanager para Laravel 5
Basado de https://github.com/simogeo/Filemanager

##Demo
<a target="_blank" href="http://laravel-filemanager.rhcloud.com/">http://laravel-filemanager.rhcloud.com/</a><br>
<a target="_blank" href="http://laravel-filemanager.rhcloud.com/filemanager/show">http://laravel-filemanager.rhcloud.com/filemanager/show</a>

##Requiere

"intervention/image": "2.*"

##Instalación

Edita tu `composer.json`.

	"require": {
		"pqb/filemanager-laravel": "2.*"
	}

Ejecuta

	composer update

Agrega en tu archivo app.php

	'Pqb\FilemanagerLaravel\FilemanagerLaravelServiceProvider',

Y en el Facade

	'FilemanagerLaravel'=> 'Pqb\FilemanagerLaravel\Facades\FilemanagerLaravel',

Copia el Controller, View a la carpeta resources/views/vendor/filemanager-laravel, la carpeta filemanager y tinymce a tu carpeta public, con el siguiente comando:
	
	php artisan vendor:publish

Al final Agrega en routes.php

	Route::group(array('middleware' => 'auth'), function(){
		Route::controller('filemanager', 'FilemanagerLaravelController');
	});


Para que carge tinymce con el plugin filemanager agrega:

```
<script type="text/javascript" src="{{ url('') }}/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="{{ url('') }}/tinymce/tinymce_editor.js"></script>
<script type="text/javascript">
editor_config.selector = "textarea";
editor_config.path_absolute = "http://laravel-filemanager.rhcloud.com/";
tinymce.init(editor_config);
</script>
```

##Si deseas poner en una sub carpeta
Ejemplo http://localhost/admin/filemanager/

Modifica tu routes.php
```
Route::group(array('middleware' => 'auth'), function(){
    Route::controller('admin/filemanager', 'FilemanagerLaravelController');
});
```
Modifica tu controller
```
// app/Http/Controllers/FilemanagerLaravelController.php
public function getConnectors()
	{
		$extraConfig = array('dir_filemanager'=>'/admin');
		$f = FilemanagerLaravel::Filemanager($extraConfig);
		$f->connector_url = url('/').'/admin/filemanager/connectors';
		$f->run();
	}
	public function postConnectors()
	{
		$extraConfig = array('dir_filemanager'=>'/admin');
		$f = FilemanagerLaravel::Filemanager($extraConfig);
		$f->connector_url = url('/').'/admin/filemanager/connectors';
		$f->run();
	}
```

Modifica todos los enlaces agregando el nombre de tu carpeta
```	
// resources/views/vendor/filemanager-laravel/filemanager/index.blade.php
<link rel="stylesheet" type="text/css" href="{{ url('') }}/admin/filemanager/styles/filemanager.css" />
```

Cambia la url absoluta:
```
<script type="text/javascript">
editor_config.selector = "textarea";
editor_config.path_absolute = "http://laravel-filemanager.rhcloud.com/admin/";
tinymce.init(editor_config);
</script>
```

#Filemanager para Laravel 4
Basado de https://github.com/simogeo/Filemanager

##Requiere

"intervention/image": "2.*"

##Instalación

Edita tu `composer.json`.

	"require": {
		"pqb/filemanager-laravel": "1.*"
	}

Ejecuta

	composer update

Agrega en tu archivo app.php

	'Pqb\FilemanagerLaravel\FilemanagerLaravelServiceProvider',

Y en el Facade

	'FilemanagerLaravel'=> 'Pqb\FilemanagerLaravel\Facades\FilemanagerLaravel',

Agrega en routes.php

	Route::group(array('before' => 'auth'), function(){
		Route::controller('filemanager', 'FilemanagerLaravelController');
	});

Copia las carpetas filemanager y tinymce a tu carpeta public

	php artisan asset:publish --path="vendor/pqb/filemanager-laravel/public" "../"

Para que carge tinymce con el plugin filemanager agrega:

```
<script type="text/javascript" src="{{ url('') }}/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="{{ url('') }}/tinymce/tinymce_editor.js"></script>
<script type="text/javascript">
editor_config.selector = "textarea";
tinymce.init(editor_config);
</script>
```

Cambiar la url absoluta en:
```
//tinymce/tinymce_editor.js
var cmsURL = 'http://localhost/filemanager/show?&field_name='+field_name+'&lang='+tinymce.settings.language;
```

##Demo
http://www.youtube.com/watch?v=yowJRKZ3Ums
