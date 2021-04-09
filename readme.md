# Gane - Betplay

Archivo csv para cargar códigos
```
storage/app/codes.csv
```

Cargar todos los código en base de datos
```
php artisan tinker
> \App\Code::loadCodesFromCSV();
```

Usar el sistema de migraciones de laravel para cargar la
estructura de la base de datos y los códigos a usar.
```
php artisan migrate --seed
```

Obtener cuantos códigos hay para activar en cada fecha.
```sql
SELECT `activation_date_start`, count(*) FROM `codes` group by `activation_date_start`
```

Correr prueba de creación aleatoria de clientes y asignarles códigos hasta que se acaben.
```
php artisan tinker
> \App\Client::testCreateClients(6000);
```

Generar reportes de cada que se llega a una meta de 500 usuarios.
El reporte solo se genera si el archivo storage/reports/meta[cantidad].csv no existe.
```
php artisan tinker
> \App\Code::generateReports();
```