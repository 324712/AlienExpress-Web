<?php
require("./src/database.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>AlienExpress</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="./dist/css/uikit.min.css" />
    <link rel="stylesheet" href="./dist/css/alien_base.css" />

    <script src="./dist/js/uikit.min.js"></script>
    <script src="https://kit.fontawesome.com/892035833b.js" crossorigin="anonymous"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="./dist/img/branding/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./dist/img/branding/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./dist/img/branding/favicon/favicon-16x16.png">
    <link rel="manifest" href="./dist/img/branding/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>
<body>

<div class="uk-container" style="margin-bottom: 50px; margin-top: 50px;">
    <div class="uk-child-width-1-3@m uk-grid">
        <div style="margin-bottom: 50px;">
            <h2>Examples</h2>
            <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-success">Success</button>
            <button type="button" class="btn btn-danger">Danger</button>
            <button type="button" class="btn btn-warning">Warning</button>
            <button type="button" class="btn btn-info">Info</button>
            <button type="button" class="btn btn-light">Light</button>
            <button type="button" class="btn btn-dark">Dark</button>
            <button type="button" class="btn btn-text">Text</button>
            <button type="button" class="btn btn-link">Link</button>
        </div>

        <div>
            <h2>Button tags</h2>
            <a class="btn btn-primary" href="#" role="button">Link</a>
            <button class="btn btn-primary" type="submit">Button</button>
            <input class="btn btn-primary" type="button" value="Input">
            <input class="btn btn-primary" type="submit" value="Submit">
            <input class="btn btn-primary" type="reset" value="Reset">
        </div>

        <div>
            <h2>Outline buttons</h2>
            <button type="button" class="btn btn-outline-primary">Primary</button>
            <button type="button" class="btn btn-outline-success">Success</button>
            <button type="button" class="btn btn-outline-danger">Danger</button>
            <button type="button" class="btn btn-outline-warning">Warning</button>
            <button type="button" class="btn btn-outline-info">Info</button>
            <button type="button" class="btn btn-outline-light">Light</button>
            <button type="button" class="btn btn-outline-dark">Dark</button>
        </div>

        <div style="margin-bottom: 50px;">
            <h2>Sizes</h2>
            <button type="button" class="btn btn-primary btn-sm">Small</button>
            <button type="button" class="btn btn-primary">Standard</button>
            <button type="button" class="btn btn-primary btn-lg">Large</button>
        </div>

        <div>
            <h2>Block</h2>
            <button type="button" class="btn btn-primary btn-block">Block button</button>
            <button type="button" class="btn btn-outline-primary btn-block">Block button</button>
        </div>

        <div>
            <h2>Full</h2>
            <button type="button" class="btn btn-primary btn-block btn-full">Full button</button>
            <button type="button" class="btn btn-outline-primary btn-block btn-full">Full button</button>
        </div>

        <div style="margin-bottom: 50px;">
            <h2>Button round radius</h2>
            <button type="button" class="btn btn-primary btn-rnd">Round radius</button>
            <button type="button" class="btn btn-outline-primary btn-rnd">Round radius</button>
        </div>

        <div>
            <h2>Button no radius</h2>
            <button type="button" class="btn btn-primary btn-blc">No radius</button>
            <button type="button" class="btn btn-outline-primary btn-blc">No radius</button>
        </div>

        <div>
            <h2>Button with icons</h2>
            <button type="button" class="btn btn-primary"><i class="far fa-check-circle fa-fw icon-left"></i> Left</button>
            <button type="button" class="btn btn-primary">Right <i class="far fa-arrow-alt-circle-right fa-fw icon-right"></i></button>
            <button type="button" class="btn btn-outline-primary"><i class="far fa-check-circle fa-fw icon-left"></i> Left</button>
            <button type="button" class="btn btn-outline-primary">Right <i class="far fa-arrow-alt-circle-right fa-fw icon-right"></i></button>
        </div>

        <div>
            <h2>Button only icon</h2>
            <button type="button" class="btn btn-primary"><i class="far fa-check-circle fa-fw"></i></button>
            <button type="button" class="btn btn-outline-primary btn-rnd"><i class="far fa-check-circle fa-fw"></i></button>
            <button type="button" class="btn btn-text btn-rnd"><i class="far fa-check-circle fa-fw"></i></button>
        </div>

        <div>
            <h2>Grouped buttons</h2>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary">Left</button>
                <button type="button" class="btn btn-primary">Middle</button>
                <button type="button" class="btn btn-primary">Right</button>
            </div>

            <div class="btn-group" role="group">
                <button type="button" class="btn btn-secondary"><i class="fas fa-align-left fa-fw"></i></button>
                <button type="button" class="btn btn-secondary"><i class="fas fa-align-justify fa-fw"></i></button>
                <button type="button" class="btn btn-secondary"><i class="fas fa-align-right fa-fw"></i></button>
            </div>
        </div>
    </div>
</div>

<div class="uk-container" style="margin-bottom: 50px;">
    <div class="blox-card">
        <div class="blox-card-head">
                <span class="blox-card-title">
                    .blox-card-title.
                </span>

            <span class="blox-card-titleRight">
                    .blox-card-titleRight.
                </span>

            <span class="blox-card-subtitle">
                    .blox-card-subtitle.
                </span>
        </div>
        <div class="blox-card-body">
            .blox-card-body
        </div>
        <div class="blox-card-footer">
            .blox-card-footer
        </div>
    </div>

    <div class="blox-card">
        <div class="blox-card-imageTop"></div>
        <div class="blox-card-head">
                <span class="blox-card-title">
                    .blox-card-title.
                </span>
        </div>
    </div>

    <div class="blox-card">
        <div class="blox-card-head">
                <span class="blox-card-title">
                    .blox-card-title.
                </span>

            <span class="blox-card-titleRight">
                    .blox-card-titleRight.
                </span>

            <span class="blox-card-subtitle">
                    .blox-card-subtitle.
                </span>
        </div>
        <div class="blox-card-body">
            .blox-card-body
        </div>
        <div class="blox-card-footer">
            .blox-card-footer
        </div>
        <div class="blox-card-button">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-half btn-primary">Left</button>
                <button type="button" class="btn btn-half btn-secondary">Right</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
