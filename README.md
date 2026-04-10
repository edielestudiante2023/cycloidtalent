# Cycloid Talent — Sitio Web Corporativo

Sitio web corporativo de **Cycloid Talent**, empresa colombiana de consultoría en Seguridad y Salud en el Trabajo (SST). Construido con CodeIgniter 4, Tailwind CSS y Alpine.js.

**URL producción:** https://cycloidtalent.com

---

## Stack tecnológico

| Componente     | Tecnología                              |
|----------------|------------------------------------------|
| Backend        | PHP 8.2 + CodeIgniter 4.7               |
| Base de datos  | MySQL 8 (DigitalOcean Managed, SSL)      |
| CSS            | Tailwind CSS 3.4                         |
| JS             | Alpine.js 3.15                           |
| Email          | SendGrid API v3 (formulario de contacto) |
| Servidor web   | Nginx (Ubuntu 24.04, Hetzner)            |
| Panel          | aaPanel                                  |

---

## Módulos principales

| Módulo           | Descripción                                                        |
|------------------|--------------------------------------------------------------------|
| Home / Landing   | Hero, servicios destacados, clientes, CTA de contacto              |
| Nosotros         | Misión, visión, equipo de trabajo                                  |
| Servicios (6)    | Consultoría SST, Riesgo Psicosocial, Propiedad Horizontal, Brigada de Emergencia, Auditoría Proveedores, Vigía SST |
| Blog             | Artículos con CMS admin, SEO friendly                              |
| Contacto         | Formulario con validación, guardado en BD, notificación SendGrid   |
| Legal            | Reglamento interno, reglamento de higiene                          |
| Admin            | Dashboard, gestión de contactos, usuarios, blog, galería           |
| SEO              | Sitemap XML, robots.txt, meta tags dinámicos, redirects 301 Joomla |

---

## Roles de usuario

| Rol   | Acceso                                              |
|-------|-----------------------------------------------------|
| admin | Dashboard + gestión de contactos, usuarios, blog, galería |

---

## Estructura del proyecto

```
cycloidtalent/
├── app/
│   ├── Config/            # Routes, Database, Filters, App
│   ├── Controllers/       # 9 controladores públicos + 6 admin
│   │   └── Admin/         # Auth, Dashboard, Contacto, Usuarios, Blog, Galería
│   ├── Database/          # Migrations, Seeds
│   ├── Filters/           # AuthFilter (protección panel admin)
│   ├── Helpers/           # seo_helper.php (meta tags dinámicos)
│   ├── Models/            # 5 modelos (BlogPost, Contacto, Galeria, Rol, Usuario)
│   └── Views/             # Vistas PHP organizadas por módulo
├── docs/                  # Documentación técnica
├── public/                # Punto de entrada web (index.php, assets, imágenes)
├── scripts/               # Scripts de migración (blog, galería)
├── tests/                 # Tests PHPUnit
├── vendor/                # Dependencias PHP (Composer)
├── writable/              # Logs, cache, sesiones, uploads
├── .env                   # Variables de entorno (NO commitear)
├── .env.example           # Template de variables (SÍ commitear)
├── composer.json          # Dependencias PHP
├── package.json           # Dependencias Node (Tailwind, Alpine)
├── tailwind.config.js     # Configuración Tailwind CSS
├── spark                  # CLI de CodeIgniter
└── CONTRIBUTING.md        # Guía de contribución
```

---

## Requisitos previos

- PHP >= 8.2 con extensiones: intl, mbstring, mysqlnd, curl, json
- Composer
- Node.js >= 18 (para compilar Tailwind CSS)
- MySQL 8
- Servidor web: Nginx o Apache

---

## Instalación local

```bash
# 1. Clonar el repositorio
git clone https://github.com/edielestudiante2023/cycloidtalent.git
cd cycloidtalent

# 2. Instalar dependencias PHP
composer install

# 3. Instalar dependencias Node
npm install

# 4. Configurar variables de entorno
cp env .env
# Editar .env con tus datos locales (ver .env.example)

# 5. Compilar Tailwind CSS
npm run build

# 6. Iniciar servidor de desarrollo
php spark serve
# Visitar http://localhost:8080
```

---

## Variables de entorno

| Variable                      | Descripción                          |
|-------------------------------|--------------------------------------|
| `CI_ENVIRONMENT`              | development / production             |
| `app.baseURL`                 | URL base del sitio                   |
| `database.default.hostname`   | Host de la base de datos             |
| `database.default.database`   | Nombre de la base de datos           |
| `database.default.username`   | Usuario de BD                        |
| `database.default.password`   | Password de BD                       |
| `database.default.DBDriver`   | Driver (MySQLi)                      |
| `database.default.port`       | Puerto de BD                         |
| `SENDGRID_API_KEY`            | API Key de SendGrid (email contacto) |

---

## Deploy

El deploy se realiza via `git push` a la rama `main`. El servidor de producción (Hetzner, 66.29.154.174) tiene configurado un webhook/pull automático.

**Ruta en producción:** `/www/wwwroot/cycloidtalent/`

---

## Cron jobs

Este sitio web corporativo **no tiene cron jobs**. Es un sitio estático con formulario de contacto.

---

## Documentación adicional

- [CONTRIBUTING.md](CONTRIBUTING.md) — Guía de contribución
- [docs/HARDENING-cycloidtalent.md](docs/HARDENING-cycloidtalent.md) — Documento de hardening del repositorio
