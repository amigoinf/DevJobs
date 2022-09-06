<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        VerifyEmail::toMailUsing((function($notificable, $url){
            return (new MailMessage)
                ->subject('Verifica tu cuenta')
                ->line('Tu cuenta ya esta casi lista, solo necesitas comprobar tu email usando el enlace a continuacion')
                ->action('Confirma que este es tu email', $url)
                ->line('Si tu no has solicitado nada no necesitas hacer nada, olvida este correo')
                ->line('Aunque siempre puedes reenviarlo a csi@devjobs.com para que invertiguemos lo sucedido');
        }));
    }
}
