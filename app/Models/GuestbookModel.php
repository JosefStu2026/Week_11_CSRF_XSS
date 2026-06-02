<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestbookModel extends Model
{
    protected $table            = 'guestbook';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['username', 'comment']; // Safe mapping!
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = '';
}