<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="content-language" content="de-DE">
        
        <title><?php Options::out( 'title' ) ?><?php if($request->display_entry && isset($post)) { echo " :: {$post->title}"; } ?></title>
        <link rel="shortcut icon" href="<?php Site::out_url( 'theme' ); ?>/images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="<?php Site::out_url( 'theme' ); ?>/stylesheets/reset.css" type="text/css" media="screen">
        <link rel="stylesheet" href="<?php Site::out_url( 'theme' ); ?>/stylesheets/style.css" type="text/css" media="screen">
        <link rel="stylesheet" href="<?php Site::out_url( 'theme' ); ?>/stylesheets/default.css" type="text/css" media="screen">
        <link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php $theme->feed_alternate(); ?>">
        <link rel="edit" type="application/atom+xml" title="Atom Publishing Protocol" href="<?php URL::out( 'atompub_servicedocument' ); ?>">
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php URL::out( 'rsd' ); ?>">
        <?php $theme->header(); ?>
    </head>
    <body>
        <div id="header">
            <h1><a href="<?php Site::out_url( 'habari' ); ?>" title="Home"><img src="<?php Site::out_url( 'theme' ); ?>/images/<?php echo $site['header']; ?>" alt="Uploadparty"></a></h1>
        </div>
        <ul id="navigation">
            <?php foreach ( $pages as $pagelink ) : ?>
            <li><a href="<?php echo $pagelink->permalink; ?>" title="<?php echo $pagelink->title; ?>"><?php echo $pagelink->title; ?></a></li>
            <?php endforeach; ?>
        </ul>