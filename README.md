# 📟 Calculadora Colaborativa

## 1. Introducción

Este proyecto consiste en el desarrollo de una calculadora web básica utilizando tecnologías web y herramientas profesionales de control de versiones.

El objetivo principal ha sido simular un entorno real de trabajo colaborativo utilizando Git y GitHub.

Se han aplicado conceptos como:

- Trabajo colaborativo
- Uso de ramas (branches)
- Pull Requests
- Resolución de conflictos
- Commits profesionales
- Documentación técnica en Markdown

---

## 2. Tecnologías utilizadas

### Frontend
- HTML5
- CSS3

### Backend
- PHP

### Control de versiones
- Git
- GitHub

### Documentación
- Markdown

---

## 3. Estructura del proyecto
calculadora-colaborativa/
│
├── README.md
├── index.html
├── style.css
├── calculadora.php
├── docs/
│ ├── guia-usuario.md
│ ├── manual-tecnico.md
│ ├── faq.md
│ ├── issues.md
│ └── capturas/


---

## 4. Trabajo colaborativo

Se han utilizado dos cuentas de GitHub:

| Cuenta | Rol |
|--------|-----|
| mario0033 | Desarrollador principal |
| mario442244 | Colaborador |

Se realizó la invitación desde:

Settings → Collaborators → Add people

---

## 5. Configuración de Git


git config --global user.name "mario0033"
git config --global user.email "mario.cebgon@educa.jcyl.es"


---

##  6. Clonado del repositorio

git clone https://github.com/mario0033/calculadora-colaborativa.git
cd calculadora-colaborativa

---

## 7. Uso de ramas

git checkout -b interfaz
git checkout -b logica-php

---

##  8. Desarrollo del proyecto
index.html

Se ha creado un formulario que permite introducir dos números y seleccionar una operación matemática (suma, resta, multiplicación o división). Los datos se envían mediante método POST a PHP.

style.css

Se ha diseñado una interfaz sencilla y centrada, con un contenedor principal, sombras suaves y estilos básicos para inputs y botones.

calculadora.php
Se implementa la lógica del backend:
Suma
Resta
Multiplicación
División
Validación de datos numéricos
Control de división entre cero

---

##  9. Commits realizados
git commit -m "Añade estructura inicial del proyecto"
git commit -m "He creado la interfaz HTML"
git commit -m "Mejora la lógica PHP"

---

##  10. Subida a GitHub
git push origin interfaz
git push origin logica-php

---

##  11. Pull Requests

Se han utilizado Pull Requests para integrar cambios en la rama principal.

Ejemplo de descripción:

Cambios realizados
Se añade interfaz HTML
Se añade diseño CSS
Se implementa lógica PHP
Se realizan pruebas funcionales

---

## 12. Resolución de conflictos
<<<<<<< HEAD
<h1>Calculadora Básica</h1>
=======
<h1>Calculadora Web</h1>
>>>>>>> rama

<h1>Calculadora Web Básica</h1>