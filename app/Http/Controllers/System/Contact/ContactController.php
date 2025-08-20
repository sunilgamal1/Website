<?php

namespace App\Http\Controllers\System\Contact;

use App\Http\Controllers\System\ResourceController;
use App\Services\System\ContactService;

class ContactController extends ResourceController
{
    public function __construct(private readonly ContactService $contactService)
    {
        parent::__construct($contactService);
    }

    public function moduleName()
    {
        return 'contacts';
    }

    public function viewFolder()
    {
        return 'system.contact';
    }
} 