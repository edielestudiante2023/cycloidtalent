<?= $this->extend('layouts/legal') ?>
<?= $this->section('content') ?>

<nav class="text-sm text-gray-400 mb-8">
    <a href="<?= base_url('/') ?>" class="hover:text-cycloid-blue">Inicio</a>
    <span class="mx-2">›</span>
    <span class="text-cycloid-text">Reglamento de Higiene y Seguridad Industrial</span>
</nav>

<div class="mb-10 pb-8 border-b border-gray-200">
    <h1 class="text-3xl font-extrabold text-cycloid-navy mb-2">Reglamento de Higiene y Seguridad Industrial</h1>
    <p class="text-gray-500 text-sm">CYCLOID TALENT SAS — NIT 901.653.912-2</p>
    <p class="text-gray-500 text-sm">Tv. 24B #17-209, Conjunto Residencial Sandalo, Oficina 202, Soacha, Cundinamarca</p>
    <p class="text-gray-500 text-sm mt-2">Actividad económica: Consultoría en Seguridad y Salud en el Trabajo — Clase de Riesgo I</p>
</div>

<?php
$articulos = [
    [
        'num' => 'ARTÍCULO 1',
        'titulo' => 'IDENTIFICACIÓN',
        'contenido' => 'CYCLOID TALENT SAS, con NIT 901.653.912-2, domiciliada en Tv. 24B #17-209, Conjunto Residencial Sandalo, Oficina 202, Soacha, Cundinamarca, con actividad económica de consultoría especializada en Seguridad y Salud en el Trabajo, se compromete mediante el presente reglamento a dar cumplimiento a las disposiciones contenidas en el Decreto Legislativo 1295 de 1994, la Resolución 2400 de 1979, la Ley 9 de 1979 y demás normas vigentes en materia de higiene y seguridad industrial.',
    ],
    [
        'num' => 'ARTÍCULO 2',
        'titulo' => 'MEDICINA PREVENTIVA Y DEL TRABAJO',
        'contenido' => 'CYCLOID TALENT SAS destinará los recursos necesarios para ejecutar el programa de medicina preventiva y del trabajo, el cual comprende: exámenes médicos de ingreso, periódicos y de egreso; programa de vigilancia epidemiológica para los riesgos identificados; primeros auxilios; bienestar laboral; y prevención del consumo de alcohol y sustancias psicoactivas. Se garantizará el acceso a la atención médica oportuna ante accidentes de trabajo y enfermedades laborales.',
    ],
    [
        'num' => 'ARTÍCULO 3',
        'titulo' => 'SANEAMIENTO BÁSICO',
        'contenido' => 'Los lugares de trabajo mantendrán condiciones adecuadas de orden y aseo. Se garantizará la disponibilidad de agua potable para el consumo humano, servicios sanitarios en buen estado y suficientes, ventilación e iluminación apropiada en todos los puestos de trabajo, manejo adecuado de residuos sólidos y control de plagas. Los trabajadores contribuirán a mantener las condiciones higiénicas del lugar de trabajo.',
    ],
    [
        'num' => 'ARTÍCULO 4',
        'titulo' => 'HIGIENE INDUSTRIAL',
        'contenido' => 'Se identificarán, evaluarán y controlarán los factores de riesgo físico, químico, biológico, ergonómico y psicosocial presentes en los puestos de trabajo. Las medidas de control se implementarán en el siguiente orden de prioridad: eliminación del riesgo, sustitución, controles de ingeniería, controles administrativos y, finalmente, elementos de protección personal (EPP). Los trabajadores recibirán capacitación sobre los riesgos de su cargo y las medidas de control.',
    ],
    [
        'num' => 'ARTÍCULO 5',
        'titulo' => 'ELEMENTOS DE PROTECCIÓN PERSONAL',
        'contenido' => 'CYCLOID TALENT SAS suministrará gratuitamente los elementos de protección personal (EPP) requeridos según el cargo y el riesgo identificado. Los trabajadores están obligados a usar los EPP asignados en todo momento durante la ejecución de actividades que los requieran. El deterioro o pérdida de los EPP deberá ser reportado inmediatamente para su reposición. El uso incorrecto o la negativa a usar EPP será considerado falta disciplinaria.',
    ],
    [
        'num' => 'ARTÍCULO 6',
        'titulo' => 'PREVENCIÓN Y CONTROL DE INCENDIOS',
        'contenido' => 'La empresa mantendrá extintores vigentes y en lugares de fácil acceso, debidamente señalizados. Se establecerán rutas de evacuación claramente marcadas y puntos de encuentro. La brigada de emergencia recibirá capacitación periódica en control de incendios. Se prohíbe el almacenamiento de materiales inflamables cerca de fuentes de calor o ignición. Los equipos eléctricos deberán apagarse al finalizar la jornada.',
    ],
    [
        'num' => 'ARTÍCULO 7',
        'titulo' => 'ACCIDENTES DE TRABAJO Y ENFERMEDADES LABORALES',
        'contenido' => 'Todo accidente de trabajo, por leve que sea, deberá reportarse de inmediato al jefe inmediato y al responsable SST. La empresa reportará el accidente a la ARL dentro de los dos (2) días hábiles siguientes. Se realizará investigación de todo accidente e incidente de trabajo para determinar causas y establecer medidas correctivas. Los trabajadores deben colaborar en el proceso de investigación y en la implementación de las medidas preventivas.',
    ],
    [
        'num' => 'ARTÍCULO 8',
        'titulo' => 'VIGENCIA',
        'contenido' => 'El presente Reglamento de Higiene y Seguridad Industrial rige a partir del momento de su publicación en lugar visible de la empresa y tiene vigencia indefinida. Será actualizado cuando se produzcan cambios en las actividades, el número de trabajadores, los riesgos identificados o la normativa vigente. Una copia del presente reglamento estará disponible para todos los trabajadores en todo momento.',
    ],
];
?>

<div class="space-y-8">
    <?php foreach ($articulos as $art): ?>
    <section>
        <div class="flex items-start gap-3 mb-2">
            <span class="text-xs font-bold text-cycloid-blue bg-cycloid-blue/10 px-2 py-1 rounded-lg whitespace-nowrap shrink-0"><?= $art['num'] ?></span>
            <h2 class="text-base font-bold text-cycloid-navy uppercase tracking-wide"><?= $art['titulo'] ?></h2>
        </div>
        <p class="text-gray-600 text-sm leading-relaxed pl-0"><?= $art['contenido'] ?></p>
    </section>
    <?php endforeach; ?>
</div>

<div class="mt-12 pt-8 border-t border-gray-200">
    <p class="text-sm text-gray-500 mb-4">Firma del Representante Legal:</p>
    <div class="border-t border-gray-300 w-48 mt-10 mb-1"></div>
    <p class="text-sm text-cycloid-navy font-semibold">Edison Cuervo</p>
    <p class="text-xs text-gray-500">Representante Legal</p>
    <p class="text-xs text-gray-500">CYCLOID TALENT SAS — NIT 901.653.912-2</p>
</div>

<?= $this->endSection() ?>
