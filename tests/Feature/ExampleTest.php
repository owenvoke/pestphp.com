<?php

it('has welcome page')
    ->get('/')
    ->assertStatus(200);

it('has team page')
    ->get('/docs/team')
    ->assertStatus(200);

it('has installation page')
    ->get('/docs/installation')
    ->assertStatus(200);

it('has screencasts page')
    ->get('/screencasts')
    ->assertStatus(302);
