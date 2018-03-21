<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;
class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
      Form::component('bsText','components.form.text',['name','value' =>null, 'attributes' =>[] ]);
      Form::component('bsTextarea','components.form.textarea',['name','value' =>null, 'attributes' =>[] ]);
      Form::component('bsSubmit','components.form.submit',['value' =>'Submit', 'attributes' =>[] ]);
      Form::component('bsFile','components.form.file',['name', 'attributes' =>[] ]);
      Form::component('bsHidden', 'components.form.hidden', ['name', 'value' => null, 'attributes' => []]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
