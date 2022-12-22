<?php declare(strict_types=1);

namespace App\Controllers;

use App\Authentication;

use App\FormRequests\ShortSellCryptoFormRequest;
use App\Redirect;
use App\Services\ShortSell\CloseShortService;
use App\Services\ShortSell\OpenShortService;
use App\Services\ShortSell\ShortSellCryptoServiceRequest;
use App\Validation\Validation;

class ShortSellCryptoController
{
    private OpenShortService $openShortService;
    private CloseShortService $closeShortService;
    private Validation $validation;

    public function __construct(OpenShortService  $openShortService,
                                CloseShortService $closeShortService,
                                Validation        $validation)
    {
        $this->openShortService = $openShortService;
        $this->closeShortService = $closeShortService;
        $this->validation = $validation;
    }

    public function openShort(array $vars): Redirect
    {
        $this->validation->validateOpenShortSellCryptoForm(new ShortSellCryptoFormRequest(
            Authentication::getAuthId(),
            (int)$vars['id'],
            (float)$_POST['amount'],
            (float)$_POST['openPrice'],
            (float)$_POST['closePrice'],

        ));

        if ($this->validation->hasErrors()) {
            return new Redirect('/coin/' . $vars['id']);
        }

        $this->openShortService->execute(new ShortSellCryptoFormRequest(
            Authentication::getAuthId(),
            (int)$vars['id'],
            (float)$_POST['amount'],
            (float)$_POST['openPrice'],
            (float)$_POST['closePrice'],



        ));
        return new Redirect('/dashboard');
    }

    public function closeShort(array $vars): Redirect
    {
        $this->validation->validateCloseShortSellCryptoForm((new ShortSellCryptoFormRequest(
            Authentication::getAuthId(),
            (int)$vars['id'],
            (float)$_POST['amount'],
            (float)$_POST['openPrice'],
            (float)$_POST['closePrice'],
        )));

        if ($this->validation->hasErrors()) {
            return new Redirect('/coin/' . $vars['id']);
        }

        $this->closeShortService->execute(new ShortSellCryptoServiceRequest(
            Authentication::getAuthId(),
            (int)$vars['id'],
            (float)$_POST['amount'],
            (float)$_POST['openPrice'],
        ));
        return new Redirect('/dashboard');
    }
}

