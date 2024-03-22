<?php

use CodebarAg\FilamentJsonField\Infolists\Components\JsonEntry;

it('can have folding code ', function () {
    $field = JsonEntry::make('json');

    expect($field->getHasFoldingCode())->toBe(true);

    $field->foldingCode(false);
    expect($field->getHasFoldingCode())->toBe(false);

    $field->foldingCode(true);
    expect($field->getHasFoldingCode())->toBe(true);
});

it('can have auto closing brackets code ', function () {
    $field = JsonEntry::make('json');

    expect($field->getHasAutoCloseBrackets())->toBe(true);

    $field->autoCloseBrackets(false);
    expect($field->getHasAutoCloseBrackets())->toBe(false);

    $field->autoCloseBrackets(true);
    expect($field->getHasAutoCloseBrackets())->toBe(true);
});

it('can have line numbers code ', function () {
    $field = JsonEntry::make('json');

    expect($field->getHasLineNumbers())->toBe(true);

    $field->lineNumbers(false);
    expect($field->getHasLineNumbers())->toBe(false);

    $field->lineNumbers(true);
    expect($field->getHasLineNumbers())->toBe(true);
});

it('can have line wrapping code ', function () {
    $field = JsonEntry::make('json');

    expect($field->getHasLineWrapping())->toBe(true);

    $field->lineWrapping(false);
    expect($field->getHasLineWrapping())->toBe(false);

    $field->lineWrapping(true);
    expect($field->getHasLineWrapping())->toBe(true);
});

it('can have code ', function () {
    $field = JsonEntry::make('json');

    expect($field->getHasDarkTheme())->toBe(false);

    $field->darkTheme(false);
    expect($field->getHasDarkTheme())->toBe(false);

    $field->darkTheme(true);
    expect($field->getHasDarkTheme())->toBe(true);
});
