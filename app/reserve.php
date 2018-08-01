<?php

namespace App;

use Ngt\Larafm\Database\Model;

class reserve extends Model
{
  public $timestamps = false;
  protected $layoutName = 'reserve';
  protected $fillable = [
    'date',
    'startTime',
    'endTime',
    'room',
    'subject',
    'content',
    'user',
    'delFlag',
  ];
}
