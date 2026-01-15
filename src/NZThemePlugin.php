<?php

namespace Sniffle15\NZTheme;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Colors\Color;

class NZThemePlugin implements Plugin
{
    public function getId(): string
    {
        return 'nz-theme';
    }

    public function register(Panel $panel): void
    {
        $panel->viteTheme('plugins/nz-theme/resources/css/theme.css');

        $panel->colors([
            'gray' => [
                50 => '#eceff4',
                100 => '#e5e9f0',
                200 => '#d8dee9',
                300 => '#a7b1c5',
                400 => '#8c9ab3',
                500 => '#71829b',
                600 => '#4c566a',
                700 => '#434c5e',
                800 => '#3b4252',
                900 => '#2e3440',
                950 => '#232831',
            ],
            'primary' => [
                50 => '#f0f9fc',
                100 => '#dbeef4',
                200 => '#bce1ec',
                300 => '#88c0d0',
                400 => '#81a1c1',
                500 => '#5e81ac',
                600 => '#4c709b',
                700 => '#3b587a',
                800 => '#2a3f59',
                900 => '#192738',
                950 => '#0e1621',
            ],
            'secondary' => Color::hex('#5e81ac'),
            'info' => Color::hex('#88c0d0'),
            'success' => Color::hex('#a3be8c'),
            'warning' => Color::hex('#ebcb8b'),
            'danger' => Color::hex('#bf616a'),
        ]);
    }

    public function boot(Panel $panel): void {}
}
