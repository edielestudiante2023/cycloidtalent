# Guia de Contribucion — Cycloid Talent

## Flujo de ramas

```text
main          <- Produccion. Solo codigo validado y estable.
develop       <- Integracion. Cambios se unen aqui antes de ir a main.
feature/xxx   <- Nuevas funcionalidades. Se crean desde develop.
hotfix/xxx    <- Correcciones urgentes. Se crean desde main.
```

## Convencion de commits

Usar prefijos descriptivos en cada commit:

- `feat:` Nueva funcionalidad
- `fix:` Correccion de bug
- `docs:` Solo documentacion
- `refactor:` Refactorizacion sin cambio de comportamiento
- `chore:` Tareas de mantenimiento (deps, config, CI)
- `style:` Cambios de formato/estilo (CSS, indentacion)

Ejemplos:

```text
feat: agregar pagina de brigada de emergencia
fix: corregir validacion del formulario de contacto
docs: actualizar README con instrucciones de deploy
chore: actualizar dependencias de Tailwind CSS
```

## Convencion de nombres de ramas

- `feature/modulo-descripcion` — Ej: `feature/blog-paginacion`
- `hotfix/bug-descripcion` — Ej: `hotfix/contacto-validacion-email`

## Reglas

1. **No push directo a main** — Siempre via PR desde develop
2. **No credenciales en el codigo** — Usar variables de entorno (.env)
3. **No archivos temporales** — No commitear .tmp, logs, cache
4. **No operaciones destructivas en produccion** — No DROP, DELETE masivo, force push
5. **Compilar Tailwind antes de PR** — Ejecutar `npm run build` si se modificaron estilos

## Proceso de revision

1. Crear rama `feature/` o `hotfix/` desde la rama correspondiente
2. Desarrollar y hacer commits con la convencion establecida
3. Ejecutar `npm run build` si se modificaron estilos
4. Verificar que `php -l` no reporte errores de sintaxis
5. Crear PR hacia `develop` (o `main` para hotfix)
6. El pipeline CI/CD valida automaticamente (sintaxis, seguridad)
7. Revisar y aprobar el PR
8. Merge a la rama destino
