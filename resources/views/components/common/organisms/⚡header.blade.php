<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<flux:header class="block! bg-white lg:bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">
    <flux:navbar class="lg:hidden w-full">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />
        <flux:spacer />
        <flux:dropdown position="top" align="start">
            <flux:profile avatar="https://fluxui.dev/img/demo/user.png" />
            <flux:menu>
                <flux:menu.radio.group>
                    <flux:menu.radio checked>Olivia Martin</flux:menu.radio>
                    <flux:menu.radio>Truly Delta</flux:menu.radio>
                </flux:menu.radio.group>
                <flux:menu.separator />
                <flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
            </flux:menu>
        </flux:dropdown>
    </flux:navbar>
    <flux:navbar scrollable>
        <flux:navbar.item href="#" current>Dashboard</flux:navbar.item>
        <flux:navbar.item badge="32" href="#">Orders</flux:navbar.item>
        <flux:navbar.item href="#">Catalog</flux:navbar.item>
        <flux:navbar.item href="#">Configuration</flux:navbar.item>
    </flux:navbar>
</flux:header>
