# Task Manager

## 📌 Descripción
Task Manager es una aplicación web desarrollada en **Laravel + Livewire + Eloquent + SQL**, diseñada para gestionar tareas dentro de una empresa. Permite asignar responsables, establecer prioridades y etiquetas, y relacionar tareas con clientes.

## 🚀 Tecnologías utilizadas
- **Backend:** Laravel, Livewire, Eloquent, SQL
- **Frontend:** Blade con TailwindCSS
- **Base de datos:** MySQL
- **Autenticación:** Laravel Breeze
- **Despliegue:** Laravel Sail (Docker) opcional

## 📂 Estructura del Proyecto
```
/task-manager
│── app/              # Código fuente de la aplicación
│── database/         # Migraciones, seeders y factories
│── public/           # Archivos públicos (CSS, JS, imágenes)
│── resources/        # Vistas Blade y Livewire components
│── routes/           # Definición de rutas web y API
│── storage/          # Logs y caché de la aplicación
│── tests/            # Pruebas unitarias y funcionales
│── .env.example      # Configuración de entorno
│── composer.json     # Dependencias de Laravel
│── README.md         # Documentación del proyecto
```

## 🔧 Instalación y configuración
### 1️⃣ Clonar el repositorio
```sh
git clone https://github.com/Sante21/task-manager.git
cd task-manager
```

### 2️⃣ Instalar dependencias
```sh
composer install
npm install && npm run dev
```

### 3️⃣ Configurar variables de entorno
Copia el archivo `.env.example` a `.env` y configura la base de datos:
```sh
cp .env.example .env
php artisan key:generate
```

### 4️⃣ Configurar la base de datos
```sh
php artisan migrate --seed
```

### 5️⃣ Iniciar el servidor
```sh
php artisan serve
```

## 🛠 Funcionalidades principales
✔️ Autenticación de usuarios (Login/Register con Laravel Breeze)  
✔️ Gestión de tareas con asignación de responsables  
✔️ Priorización y etiquetado de tareas  
✔️ Relación de tareas con clientes  
✔️ Panel de administración con Livewire  

## 📜 Licencia
Este proyecto está bajo la licencia MIT.
