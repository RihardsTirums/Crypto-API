<?php

namespace App\Controllers;

use App\Authentication;
use App\Services\UserDashboard\IndexUserDashboardService;
use App\Template;

class UserDashboardController
{
    private IndexUserDashboardService $indexUserDashboardService;

    public function __construct(IndexUserDashboardService $indexUserDashboardService)
    {
        $this->indexUserDashboardService = $indexUserDashboardService;
    }

    public function index(): Template
    {
        $data = $this->indexUserDashboardService->execute(Authentication::getAuthId());
        return new Template('user-dashboard.twig',
            ['portfolio' => $data->getPortfolio() ? $data->getPortfolio()->getPortfolio() : [],
                'transactions' => $data->getTransactions() ? $data->getTransactions()->getTransactions() : []
            ]);
    }
}