<?php

namespace LuizFabianoNogueira\ZapSign;

use LuizFabianoNogueira\ZapSign\Lib\Template;
use LuizFabianoNogueira\ZapSign\Lib\ZapSign;

class ZapSignService extends ZapSign
{
    public function __construct()
    {
        parent::__construct();
    }

    public function templateList()
    {
        return (new Template())->list(1);
    }
}
