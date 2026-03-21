<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class LegalController extends Controller
{
    public function reglamentoInterno()
    {
        return view('legal/reglamento-interno', [
            'title'       => 'Reglamento Interno de Trabajo',
            'description' => 'Reglamento Interno de Trabajo de CYCLOID TALENT SAS.',
        ]);
    }

    public function reglamentoHigiene()
    {
        return view('legal/reglamento-higiene', [
            'title'       => 'Reglamento de Higiene y Seguridad Industrial',
            'description' => 'Reglamento de Higiene y Seguridad Industrial de CYCLOID TALENT SAS.',
        ]);
    }
}
