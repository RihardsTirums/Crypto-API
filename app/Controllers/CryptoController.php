<?php declare(strict_types=1);

namespace App\Controllers;

use App\Redirect;
use App\Services\Crypto\IndexCryptoService;
use App\Services\Crypto\SearchCryptoService;
use App\Services\Crypto\ShowCryptoService;
use App\Template;

class CryptoController
{
    private IndexCryptoService $indexCryptoService;
    private ShowCryptoService $showCryptoService;
    private SearchCryptoService $searchCryptoService;

    public function __construct(IndexCryptoService  $indexCryptoService,
                                ShowCryptoService   $showCryptoService,
                                SearchCryptoService $searchCryptoService)
    {
        $this->indexCryptoService = $indexCryptoService;
        $this->showCryptoService = $showCryptoService;
        $this->searchCryptoService = $searchCryptoService;
    }

    public function index(): Template
    {
        $limit = 100;
        $coins = $this->indexCryptoService->execute($limit);
        return new Template('index.twig', ['cryptos' => $coins->getCoins()]);
    }

    public function show(array $vars): Template
    {
        $coin = $this->showCryptoService->execute((int)$vars['id']);
        return new Template('show.twig', ['coin' => $coin]);
    }

    public function search(): Redirect
    {
        $query = $_GET['query'];
        $coinId = $this->searchCryptoService->execute($query);
        if ($coinId) {
            return new Redirect("/coin/$coinId");
        }
        return new Redirect("/");
    }
}