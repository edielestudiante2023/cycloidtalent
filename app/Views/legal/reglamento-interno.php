<?= $this->extend('layouts/legal') ?>
<?= $this->section('content') ?>

<nav class="text-sm text-gray-400 mb-8">
    <a href="<?= base_url('/') ?>" class="hover:text-cycloid-blue">Inicio</a>
    <span class="mx-2">›</span>
    <span class="text-cycloid-text">Reglamento Interno de Trabajo</span>
</nav>

<div class="mb-10 pb-8 border-b border-gray-200">
    <h1 class="text-3xl font-extrabold text-cycloid-navy mb-2">Reglamento Interno de Trabajo</h1>
    <p class="text-gray-500 text-sm">CYCLOID TALENT SAS — NIT 901.653.912-2</p>
    <p class="text-gray-500 text-sm">Tv. 24B #17-209, Conjunto Residencial Sandalo, Oficina 202, Soacha, Cundinamarca</p>
</div>

<?php
$capitulos = [
    [
        'titulo' => 'CAPÍTULO I — IDENTIFICACIÓN Y DENOMINACIÓN DEL EMPLEADOR',
        'contenido' => 'CYCLOID TALENT SAS, identificada con NIT 901.653.912-2, con domicilio principal en la Tv. 24B #17-209, Conjunto Residencial Sandalo, Oficina 202, Soacha, Cundinamarca, Colombia, es una empresa dedicada a la prestación de servicios de consultoría en Seguridad y Salud en el Trabajo (SST), evaluación de riesgo psicosocial y gestión empresarial.',
    ],
    [
        'titulo' => 'CAPÍTULO II — CONDICIONES DE ADMISIÓN',
        'contenido' => 'Toda persona que aspire a ser trabajador de CYCLOID TALENT SAS deberá acreditar los siguientes requisitos: documento de identidad vigente, certificados de estudios y experiencia laboral, referencias personales y laborales, y los demás documentos exigidos por la ley o por la empresa según el cargo. La empresa verificará los antecedentes judiciales y disciplinarios de conformidad con la normativa vigente.',
    ],
    [
        'titulo' => 'CAPÍTULO III — CONTRATO DE TRABAJO',
        'contenido' => 'Los contratos de trabajo se celebrarán por escrito y en las modalidades previstas en el Código Sustantivo del Trabajo: indefinido, a término fijo, por obra o labor contratada, o accidental. Todo contrato incluirá la descripción del cargo, funciones, remuneración, lugar de trabajo y condiciones de la relación laboral. Los períodos de prueba no podrán exceder los límites legales establecidos.',
    ],
    [
        'titulo' => 'CAPÍTULO IV — JORNADA DE TRABAJO',
        'contenido' => 'La jornada laboral ordinaria es de ocho (8) horas diarias y cuarenta y ocho (48) horas semanales, conforme al artículo 161 del C.S.T. El horario regular es de lunes a viernes de 8:00 a.m. a 5:30 p.m., con una hora de almuerzo. La empresa podrá establecer jornadas especiales o flexibles de acuerdo con las necesidades del servicio, previo acuerdo con el trabajador. El trabajo suplementario será remunerado conforme a la ley.',
    ],
    [
        'titulo' => 'CAPÍTULO V — DÍAS DE DESCANSO REMUNERADO',
        'contenido' => 'Los trabajadores tienen derecho a descanso remunerado el día domingo y en los días festivos reconocidos por la ley. Los trabajadores que laboren en días de descanso obligatorio recibirán la remuneración correspondiente según lo establecido en el Código Sustantivo del Trabajo. El descanso compensatorio se concederá en los términos legales.',
    ],
    [
        'titulo' => 'CAPÍTULO VI — VACACIONES',
        'contenido' => 'Todo trabajador que preste sus servicios por un año continuo a CYCLOID TALENT SAS tendrá derecho a quince (15) días hábiles consecutivos de vacaciones remuneradas, conforme al artículo 186 del C.S.T. Las vacaciones serán programadas de acuerdo con las necesidades del servicio, con previo acuerdo entre el trabajador y la empresa. El empleador podrá acumular hasta dos períodos de vacaciones.',
    ],
    [
        'titulo' => 'CAPÍTULO VII — SALARIO',
        'contenido' => 'El salario será acordado libremente por las partes, no podrá ser inferior al salario mínimo legal mensual vigente (SMMLV) y comprenderá todas las condiciones retributivas del servicio. El pago se realizará quincenalmente por consignación bancaria. Los incrementos salariales se realizarán conforme a la política interna de la empresa y a la normativa laboral.',
    ],
    [
        'titulo' => 'CAPÍTULO VIII — HORAS EXTRAS Y TRABAJO SUPLEMENTARIO',
        'contenido' => 'El trabajo suplementario solo podrá realizarse con autorización previa del empleador. Se reconocerá un recargo del 25% sobre el valor del trabajo ordinario diurno, del 75% para el nocturno, del 100% para el festivo diurno y del 150% para el festivo nocturno, conforme al C.S.T. El máximo de horas extras por semana es de doce (12) horas.',
    ],
    [
        'titulo' => 'CAPÍTULO IX — PRESTACIONES SOCIALES',
        'contenido' => 'CYCLOID TALENT SAS reconocerá y pagará oportunamente todas las prestaciones sociales de ley: prima de servicios, cesantías, intereses sobre cesantías, dotación (cuando aplique), y seguridad social integral (salud, pensión y riesgos laborales). El pago de aportes se realizará dentro de los plazos establecidos por la ley.',
    ],
    [
        'titulo' => 'CAPÍTULO X — OBLIGACIONES DEL TRABAJADOR',
        'contenido' => 'Son obligaciones del trabajador: realizar personalmente las labores encomendadas; observar los reglamentos de la empresa; mantener absoluta reserva sobre los asuntos de negocios de la empresa; conservar y restituir en buen estado los bienes confiados; comunicar al empleador las irregularidades que puedan afectar a la empresa; cumplir las normas del SG-SST; asistir puntualmente al trabajo; y mantener un comportamiento respetuoso con compañeros y clientes.',
    ],
    [
        'titulo' => 'CAPÍTULO XI — PROHIBICIONES A LOS TRABAJADORES',
        'contenido' => 'Se prohíbe a los trabajadores: sustraer bienes de la empresa sin autorización; presentarse al trabajo bajo efectos del alcohol o sustancias psicoactivas; portar armas; usar datos e información confidencial de la empresa para beneficio propio; realizar actividades de la competencia durante la relación laboral; ceder o transferir el contrato de trabajo sin autorización; y realizar actos contrarios a la buena convivencia laboral.',
    ],
    [
        'titulo' => 'CAPÍTULO XII — ORDEN JERÁRQUICO',
        'contenido' => 'El orden jerárquico de la empresa es: Gerente General, Coordinadores de Área, Profesionales y Técnicos, Auxiliares y personal de apoyo. Cada nivel jerárquico tiene funciones y responsabilidades definidas en el Manual de Funciones de la empresa, el cual hace parte integral de este reglamento.',
    ],
    [
        'titulo' => 'CAPÍTULO XIII — LABORES PROHIBIDAS A MUJERES Y MENORES',
        'contenido' => 'CYCLOID TALENT SAS no contratará menores de edad. En cumplimiento del artículo 242 del C.S.T., no se asignarán a mujeres en estado de embarazo labores que requieran esfuerzo físico incompatible con su condición. Tampoco se asignarán labores de alto riesgo a trabajadores en periodo de lactancia.',
    ],
    [
        'titulo' => 'CAPÍTULO XIV — SANCIONES DISCIPLINARIAS',
        'contenido' => 'Las sanciones disciplinarias que podrá imponer la empresa son: llamado verbal de atención, amonestación escrita, suspensión hasta por ocho (8) días y terminación del contrato por justa causa. Toda sanción se aplicará previo proceso disciplinario garantizando el derecho de defensa y contradicción del trabajador.',
    ],
    [
        'titulo' => 'CAPÍTULO XV — PROCEDIMIENTO DISCIPLINARIO',
        'contenido' => 'Antes de imponer una sanción, la empresa citará al trabajador a una diligencia de descargos, con un plazo mínimo de 24 horas. El trabajador podrá asistir acompañado de un representante del COPASST o Vigía SST. La sanción será motivada por escrito y entregada al trabajador. Se respetará en todo momento el debido proceso.',
    ],
    [
        'titulo' => 'CAPÍTULO XVI — RECLAMOS',
        'contenido' => 'Los trabajadores podrán elevar reclamos ante la Gerencia mediante comunicación escrita, la cual deberá ser respondida dentro de los quince (15) días hábiles siguientes. El reclamo puede referirse a salarios, prestaciones, condiciones de trabajo, aplicación de este reglamento o cualquier asunto relacionado con la relación laboral.',
    ],
    [
        'titulo' => 'CAPÍTULO XVII — PREVENCIÓN DEL ACOSO LABORAL',
        'contenido' => 'En cumplimiento de la Ley 1010 de 2006, CYCLOID TALENT SAS rechaza toda forma de acoso laboral. El Comité de Convivencia Laboral conocerá las quejas presentadas por los trabajadores relacionadas con posibles conductas de acoso. Las sanciones por acoso laboral se aplicarán conforme a la ley.',
    ],
    [
        'titulo' => 'CAPÍTULO XVIII — SEGURIDAD Y SALUD EN EL TRABAJO',
        'contenido' => 'Todo trabajador está obligado a: usar los elementos de protección personal asignados; reportar condiciones inseguras y accidentes de trabajo de inmediato; participar en capacitaciones y simulacros SST; asistir a exámenes médicos ocupacionales; y cumplir con el SG-SST de la empresa. El incumplimiento de las normas SST será considerado falta grave.',
    ],
    [
        'titulo' => 'CAPÍTULO XIX — DISPOSICIONES SOBRE TECNOLOGÍA Y DATOS',
        'contenido' => 'Los equipos tecnológicos, software y accesos digitales suministrados por la empresa son de uso exclusivo laboral. El trabajador se compromete a usar responsablemente las herramientas digitales, proteger las contraseñas y accesos, y no compartir información confidencial de clientes ni de la empresa. El uso indebido de datos personales se regirá por la Ley 1581 de 2012.',
    ],
    [
        'titulo' => 'CAPÍTULO XX — MECANISMO DE QUEJAS Y SUGERENCIAS',
        'contenido' => 'CYCLOID TALENT SAS dispone de un canal interno para que los trabajadores presenten quejas, sugerencias o reportes de irregularidades. Las comunicaciones pueden dirigirse directamente a la Gerencia o al área de Recursos Humanos. Se garantiza la confidencialidad del denunciante y la no represalia.',
    ],
    [
        'titulo' => 'CAPÍTULO XXI — AUTORIZACIÓN DE DESCUENTOS',
        'contenido' => 'El empleador solo podrá efectuar descuentos al salario del trabajador cuando medie autorización escrita del mismo, orden judicial, retención en la fuente, aportes a seguridad social, o cuotas sindicales. Los descuentos por créditos a cooperativas o entidades financieras requieren autorización expresa del trabajador.',
    ],
    [
        'titulo' => 'CAPÍTULO XXII — VIGENCIA Y MODIFICACIONES',
        'contenido' => 'El presente Reglamento Interno de Trabajo entra en vigencia a partir de su aprobación por el Ministerio del Trabajo o de su publicación en lugar visible del establecimiento. Cualquier modificación deberá surtir el mismo proceso de aprobación. CYCLOID TALENT SAS se compromete a mantener este reglamento actualizado conforme a los cambios normativos.',
    ],
];
?>

<div class="space-y-8">
    <?php foreach ($capitulos as $cap): ?>
    <section>
        <h2 class="text-base font-bold text-cycloid-navy mb-3 uppercase tracking-wide"><?= $cap['titulo'] ?></h2>
        <p class="text-gray-600 text-sm leading-relaxed"><?= $cap['contenido'] ?></p>
    </section>
    <?php endforeach; ?>
</div>

<div class="mt-12 pt-8 border-t border-gray-200 text-center">
    <p class="text-sm text-gray-400">CYCLOID TALENT SAS — NIT 901.653.912-2</p>
    <p class="text-xs text-gray-400 mt-1">Soacha, Cundinamarca, Colombia</p>
</div>

<?= $this->endSection() ?>
