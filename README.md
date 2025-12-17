<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>



# Tarea – Desarrollo en Plataformas

**Estudiante:** Jonathan Heredia  
**Fecha:** 17/12/2025  
**Paralelo:** 2

---

## Mis Decisiones de Diseño

### 1. Tabla

**Nombre de la tabla:**  
`vehiculos`

**Campos:**

| Campo | Tipo | ¿Obligatorio? |
|---|---|---|
| id | bigint (auto incremental) | Sí |
| placa | varchar(10) | Sí |
| tipo | varchar(20) | Sí |
| propietario | varchar(100) | No |
| observaciones | text | No |
| estado | varchar(10) | Sí |
| created_at | timestamp | Sí |
| updated_at | timestamp | Sí |

---

### 2. Tipos de vehículo
- Automóvil  
- Motocicleta  
- Camioneta  

---

### 3. ¿Se puede eliminar registros?

**Respuesta:**  
No se eliminan físicamente los registros.

**Razón (1 línea):**  
Se aplica borrado lógico mediante el campo `estado`, marcando los registros como INACTIVO para mantener el historial y la trazabilidad de la información.
## 📸 Capturas del Sistema

### Listado de vehículos
![Listado de vehículos](capturas/listado.png)

### Registro de vehículo
![Registro de vehículo](capturas/capturaformularioregistrarvehiculo.png)

### Vehículo registrado
![Vehículo registrado](capturas/vehiculoregistrado.png)

### Edición de vehículo
![Edición de vehículo](capturas/capturaformulariovehicul.png)

### Vehículo actualizado
![Vehículo actualizado](capturas/vehiculoactualizado.png)

### Eliminación de vehículo (borrado lógico)
![Eliminación de vehículo](capturas/eliminarvehiculo.png)

### Vehículo marcado como inactivo
![Vehículo eliminado](capturas/vehiculoeliminado.png)

### Borrado lógico en la base de datos
![Borrado lógico en la base de datos](capturas/borradológicoenlabasededatos.png)

### Vista móvil
![Vista móvil](capturas/movil.png)

