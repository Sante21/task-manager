<?php

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.auth')] class extends Component {
    public string $email = '';

    /**
     * Send a password reset link to the provided email address.
     */
    public function sendPasswordResetLink(): void
    {
        $this->validate([
            'email' => ['required', 'string', 'email'],
        ]);

        Password::sendResetLink($this->only('email'));

        session()->flash('status', __('Se enviará un enlace de restablecimiento si la cuenta existe.'));
    }
}; ?>

<div class="flex flex-col gap-6">
    <x-auth-header title="Has olvidado tu contraseña" description="Inserta tu correo para recibir un enlace de restablecimiento de contraseña" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="sendPasswordResetLink" class="flex flex-col gap-6">
        <!-- Email Address -->
        <flux:input
            wire:model="email"
            label="{{ __('Correo electrónico') }}"
            type="email"
            name="email"
            required
            autofocus
            placeholder="email@ejemplo.com"
        />

        <flux:button variant="primary" type="submit" class="w-full">{{ __('Obtener una nueva contraseña') }}</flux:button>
    </form>

    <div class="space-x-1 text-center text-sm text-zinc-400">
        O, vuelve a
        <flux:link href="{{ route('login') }}" wire:navigate>iniciar sessión</flux:link>
    </div>
</div>
