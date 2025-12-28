# Sephirot (WebEngine Template) — Full Pack

Este template está pensado para WebEngine 1.2.x con un look cyan/negro, header fixed y sidebar fixed.
Incluye:
- Landing Home (secciones tipo one-page) + scrollspy
- Links a Register / Account / Rankings (módulos estándar WebEngine)
- Layout PHP en `views/` para que puedas envolver módulos sin romper el diseño
- SCSS + Gulp (source) + CSS compilado listo para producción
- `.cpanel.yml` listo para deploy (sin rsync) usando tar/cp

## Instalación
1) Copia la carpeta `sephirot/` a:
   `public_html/templates/sephirot/`

2) En WebEngine AdminCP:
   Website Settings → Template → Selecciona "Sephirot".

3) Asegura que tus URLs existan:
   - `.../register`
   - `.../login` (si aplica)
   - `.../rankings`
   - `.../download` (si lo tienes como módulo/página)

## Compilar SCSS (local)
```bash
npm install
npm run build
# o
npm run watch
```

El CSS compilado se genera en: `assets/css/styles.css`

## Nota de integración
WebEngine suele renderizar módulos dentro del template. Para eso:
- `views/layout.php` incluye header + sidebar + wrapper
- Si la variable `$module_content` existe, se imprime dentro del contenedor para que Rankings/Register se vean con el mismo estilo.
Si tu base usa otra variable, cambia SOLO esa línea (lo dejo comentado).
