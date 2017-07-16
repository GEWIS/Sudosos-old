<?php
namespace App\Models\GEWIS;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $connection = 'mysql_gewisdb';
    protected $table = 'Member';
    protected $primaryKey = 'lidnr';

    public function organMemberships()
    {
        return $this->hasOne('App\Models\GEWIS\OrganMember', 'lidnr', 'lidnr');
    }
}