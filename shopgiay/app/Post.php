<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
	use Searchable;
   public function searchableAs()
   {
      return 'content';
   }

   public function toSearchableArray()
   {
      $array = $this->toArray();
      return $array;
   }
}
