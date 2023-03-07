<?php

namespace IngenicoClient\PaymentMethod;

class Belfius extends PaymentMethod implements PaymentMethodInterface
{
    const CODE = 'belfius';

    /**
     * ID Code
     * @var string
     */
    protected string $id = self::CODE;

    /**
     * Name
     * @var string
     */
    protected string $name = 'Belfius';

    /**
     * Logo
     * @var string
     */
    protected string $logo = 'belfius.svg';

    /**
     * Category
     * @var string
     */
    protected string $category = 'real_time_banking';

    /**
     * Payment Method
     * @var string
     */
    protected string $pm = 'DEXIA NetBanking';

    /**
     * Brand
     * @var string
     */
    protected string $brand = 'DEXIA NetBanking';

    /**
     * Countries
     * @var array
     */
    protected array $countries = [
        'BE' => [
            'popularity' => 40
        ]
    ];

    /**
     * Is support Redirect only
     * @var bool
     */
    protected bool $is_redirect_only = true;

    /**
     * Transaction codes that indicate capturing.
     * @var array
     */
    protected array $direct_sales_success_code = [41];

    /**
     * Transaction codes that indicate authorization.
     * @var array
     */
    protected array $auth_mode_success_code = [];
}
