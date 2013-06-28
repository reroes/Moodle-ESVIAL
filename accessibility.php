<?php

    require_once('config.php');
    require_once($CFG->dirroot .'/course/lib.php');
    require_once($CFG->libdir .'/filelib.php');
    require_once($CFG->libdir . '/adminlib.php');

    global $COURSE, $CFG;


    $PAGE->set_url($CFG->wwwroot.'/accessibility.php', array());
    $PAGE->set_cacheable(false);

    $sitename = 'Accesibilidad';
    $PAGE->navbar->ignore_active();
    $PAGE->navbar->add($sitename, new moodle_url($CFG->wwwroot.'/accessibility.php'));

    $PAGE->set_pagetype('guest-*');
    $PAGE->set_pagelayout('base');
    $PAGE->set_title($SITE->fullname);
    $PAGE->set_heading($SITE->fullname);

    echo $OUTPUT->header();

    echo "<br><h1>".$sitename."</h1>";
    echo "<p>Nuestro sitio web ha sido modificado para que sea accesible.</p>
<p>A continuación detallaremos cuales son algunas de las herramientas que dejamos a su disposición para facilitarle la movilidad dentro del sitio.</p>";

    echo "<center><table border='1'>
	<caption><h2>Listado de atajos de teclado</h2></caption>
	<tr><th>Atajo de Teclado</th><th>Página Asociada</th></tr>
	<tr><td>1</td><td>Página de inicio</td></tr>
	<tr><td>2</td><td>Perfil de usuario (solo en el caso de que se tenga abierta la sesión)</td></tr>
	<tr><td>3</td><td>Mapa del Sitio</td></tr>
	<tr><td>4</td><td>Listado de Cursos</td></tr>
	<tr><td>5</td><td>Calendario de actividades</td></tr>
	<tr><td>6</td><td>Ingreso al sistema de Moodle (solo en el caso de que no tenga abierta la sesión)</td></tr>
	<tr><td>7</td><td>Egreso del sistema de Moodle (solo en el caso de que tenga abierta la sesión)</td></tr>
	<tr><td>0</td><td>Página sobre accesibilidad</td></tr>


	</table></center>";

    echo $OUTPUT->footer();

?>
