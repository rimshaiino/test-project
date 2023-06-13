<?php
namespace App\Providers;

use App\Folder; // ★ 追加
use App\Policies\FolderPolicy; // ★ 追加


class AuthServiceProvider
{
    protected $policies = [
        Folder::class => FolderPolicy::class,
    ];
    
}
