<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Advoor\NovaEditorJs\NovaEditorJs;
use Whitecube\NovaFlexibleContent\Value\FlexibleCast;

class PageContent extends Model
{
    use HasFactory;

    protected $casts = [
        'flexible-content' => FlexibleCast::class
    ];
}
