# ☕ ToMaBra

Sistema web de ecommerce desarrollado con Laravel para la gestión y venta de café artesanal.

---

## 🚀 Características

- Autenticación de usuarios con 2FA (doble factor)
- Gestión de productos
- Sistema de compras con comprobante (ticket)
- Panel administrativo
- Validación de ventas
- Control de acceso mediante roles (cliente, admin, gerente)
- Manejo de archivos públicos y privados

---

## 🛠️ Tecnologías utilizadas

- PHP 8.2
- Laravel 12
- MySQL / SQLite
- TailwindCSS
- GitHub Actions (CI)

---

## ⚙️ Instalación local

```bash
git clone https://github.com/TU_USUARIO/Tomabra.git
cd Tomabra

composer install
npm install

cp .env.example .env
php artisan key:generate

php artisan migrate

npm run dev
php artisan serve


🧪 Pruebas
php artisan test

🔐 Variables de entorno

Ejemplo:

APP_NAME=ToMaBra
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_DATABASE=ecommerce
DB_USERNAME=root
DB_PASSWORD=
🌐 Despliegue

Aplicación desplegada en:

👉 https://tu-app.onrender.com

👨‍💻 Autor

Proyecto desarrollado como parte del curso de Programación Web.

📌 Notas
El sistema implementa autenticación con código de verificación (2FA)
Se utiliza almacenamiento privado para comprobantes de compra
Se aplican políticas de acceso para seguridad del sistema

---

# 🧠 CONSEJO PRO (IMPORTANTE)

Haz estos commits:

```bash
git add .
git commit -m "Inicialización del proyecto Tomabra"
git commit -m "Implementación de autenticación 2FA"
git commit -m "Sistema de ventas y comprobantes"
git commit -m "Configuración de pipeline CI"
git commit -m "Versión final lista para despliegue"