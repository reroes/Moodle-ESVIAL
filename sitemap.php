<?php

    require_once('config.php');
    require_once($CFG->dirroot .'/course/lib.php');
    require_once($CFG->libdir .'/filelib.php');
    require_once($CFG->libdir . '/adminlib.php');

    global $COURSE, $CFG;


    $PAGE->set_url($CFG->wwwroot.'/sitemap.php', array());
    $PAGE->set_cacheable(false);

    $PAGE->navbar->ignore_active();
    $PAGE->navbar->add('Sitemap', new moodle_url($CFG->wwwroot.'/sitemap.php'));

    $PAGE->set_pagetype('guest');
    $PAGE->set_pagelayout('standard');
    $PAGE->blocks->add_region('content');
    $PAGE->set_title($SITE->fullname);
    $PAGE->set_heading($SITE->fullname);
    echo $OUTPUT->header();
    echo $OUTPUT->blocks_for_region('content');

    echo $OUTPUT->footer();

?>
