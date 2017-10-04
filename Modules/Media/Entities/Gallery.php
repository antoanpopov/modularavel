<?php

namespace Modules\Media\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Traits\NamespacedEntity;
use Modules\Media\Helpers\FileHelper;
use Modules\Media\Image\Facade\Imagy;
use Modules\Media\ValueObjects\MediaPath;
use Modules\Tag\Contracts\TaggableInterface;
use Modules\Tag\Traits\TaggableTrait;

/**
 * Class File
 * @package Modules\Media\Entities
 * @property \Modules\Media\ValueObjects\MediaPath path
 */
class Gallery extends Model implements TaggableInterface
{
    use Translatable, NamespacedEntity, TaggableTrait;
    /**
     * All the different images types where thumbnails should be created
     * @var array
     */
    private $imageExtensions = ['jpg', 'png', 'jpeg', 'gif'];

    protected $table = 'media__galleries';
    public $translatedAttributes = [
        'title',
        'description',
    ];
    protected $fillable = [
        'title',
        'description',
        'created_at',
        'updated_at',
    ];
}
