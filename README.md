# 🚀 Programando Ando

Plataforma web para estudiantes que desean aprender diferentes lenguajes de programación de manera estructurada y personalizada.

> **Proyecto Final** - Curso de Desarrollo Web con PHP

## 📋 Descripción del Proyecto

**Programando Ando** es una aplicación web desarrollada con Laravel que permite a los estudiantes registrarse y acceder a recursos de aprendizaje de programación. La plataforma cuenta con un sistema de autenticación robusto que incluye login tradicional y autenticación con Google OAuth 2.0.

Este proyecto fue desarrollado como proyecto final del curso **Desarrollo Web con PHP**, aplicando todos los conceptos aprendidos durante el curso: autenticación, control de acceso, OAuth 2.0, y gestión de sesiones.

## 🎓 Objetivo Académico

Este proyecto cumple con los requisitos del proyecto final del curso **Desarrollo Web con PHP**:

- ✅ Implementación de login con usuario y contraseña
- ✅ Implementación de login con Google OAuth 2.0
- ✅ Dashboard personalizado para usuarios registrados
- ✅ Página de bienvenida para visitantes no registrados
- ✅ Control de acceso y gestión de sesiones
- ✅ Uso de Laravel Breeze y Socialite
- ✅ Documentación completa del proyecto
- ✅ Versionamiento con Git y GitHub

## ✨ Características Principales

- 🔐 **Autenticación dual:**
  - Login tradicional con usuario y contraseña
  - Login con Google (OAuth 2.0)
  
- 👥 **Experiencias diferenciadas:**
  - Página de bienvenida para visitantes no registrados
  - Dashboard personalizado para estudiantes registrados
  
- 🎓 **Enfocado en el aprendizaje:**
  - Plataforma diseñada para estudiantes de programación
  - Acceso a recursos de múltiples lenguajes de programación

## 🛠️ Tecnologías Utilizadas

- **Backend:** PHP 8.x con Laravel 11.x
- **Frontend:** Blade Templates, TailwindCSS
- **Autenticación:** Laravel Breeze + Laravel Socialite
- **Base de datos:** SQLite (configurable a MySQL/PostgreSQL)
- **OAuth Provider:** Google Cloud Platform

## 📦 Requisitos Previos

Antes de instalar el proyecto, asegúrate de tener:

- PHP >= 8.2
- Composer
- Node.js y NPM
- Git

## 🚀 Instalación

### 1. Clonar el repositorio

```bash
git clone https://github.com/programmeuse5885/proyecto-final.git
cd proyecto-final
```

### 2. Instalar dependencias de PHP

```bash
composer install
```

### 3. Instalar dependencias de Node.js

```bash
npm install
```

### 4. Configurar variables de entorno

```bash
# Copiar el archivo de ejemplo
cp .env.example .env

# Generar la clave de aplicación
php artisan key:generate
```

### 5. Configurar archivo .env

Edita el archivo `.env` y configura:

```env
APP_NAME="Programando Ando"
APP_URL=http://programandoando.com

# Configuración de Google OAuth
GOOGLE_CLIENT_ID=tu_client_id_aqui
GOOGLE_CLIENT_SECRET=tu_client_secret_aqui
GOOGLE_REDIRECT_URI=http://programandoando.com/auth/google/callback
```

### 6. Configurar dominio local (Windows)

Edita el archivo `C:\Windows\System32\drivers\etc\hosts` como administrador y agrega:

```
127.0.0.1    programandoando.com
```

### 7. Configurar base de datos

```bash
# Crear la base de datos (SQLite)
touch database/database.sqlite

# Ejecutar migraciones
php artisan migrate
```

### 8. Compilar assets

```bash
npm run dev
```

### 9. Ejecutar el servidor

En una terminal separada:

```bash
php artisan serve --host=programandoando.com --port=80
```

## 🔑 Configuración de Google OAuth

Para habilitar el login con Google:

1. Ve a [Google Cloud Console](https://console.cloud.google.com/)
2. Crea un nuevo proyecto o selecciona uno existente
3. Habilita la API de Google+
4. Ve a "Credenciales" y crea credenciales OAuth 2.0
5. Configura las URIs autorizadas:
   - URI de redireccionamiento: `http://programandoando.com/auth/google/callback`
6. Copia el Client ID y Client Secret a tu archivo `.env`

## 📁 Estructura del Proyecto

```
proyecto-final/
├── app/
│   ├── Http/Controllers/     # Controladores de la aplicación
│   └── Models/               # Modelos
├── resources/
│   └── views/
│       ├── welcome.blade.php # Página de bienvenida (no registrados)
│       └── dashboard.blade.php # Dashboard (usuarios registrados)
├── routes/
│   └── web.php              # Rutas de la aplicación
├── database/
│   └── migrations/          # Migraciones de base de datos
└── .env.example             # Variables de entorno de ejemplo
```

## 🎯 Funcionalidades por Implementar

- [ ] Catálogo de cursos de programación
- [ ] Sistema de progreso del estudiante
- [ ] Recursos descargables por lenguaje
- [ ] Foros de discusión
- [ ] Sistema de certificados

## 👨‍💻 Historial de Commits

Este proyecto sigue una estructura de commits organizada:

1. **Inicial** - Proyecto Laravel base
2. **Feature: Breeze** - Autenticación con usuario y contraseña
3. **Feature: OAuth** - Integración con Google OAuth 2.0
4. **Docs: README** - Documentación del proyecto
5. **Feature: Vistas** - Personalización de dashboard y welcome

## 🤝 Contribuciones

Este es un proyecto académico, pero las sugerencias son bienvenidas.

## 📝 Licencia

Este proyecto es de código abierto y está disponible bajo la licencia MIT.

## 👤 Autor

**Programmeuse5885**
- GitHub: [@programmeuse5885](https://github.com/programmeuse5885)

## 📞 Soporte

Si tienes problemas con la instalación o configuración:

1. Verifica que todas las dependencias estén instaladas
2. Asegúrate de que el archivo `.env` esté correctamente configurado
3. Revisa que el dominio esté agregado al archivo hosts
4. Verifica que las credenciales de Google OAuth sean correctas

---

⭐ Si este proyecto te fue útil, no olvides darle una estrella en GitHub
