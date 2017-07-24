<?php

namespace App\Models\RBAC;
use App\Models\BaseModel;

class Role extends BaseModel
{

    protected $fillable = ['name'];


    public function users()
    {
        return $this->belongsToMany('App\Models\User','user_role');
    }

    public function permissions()
    {
        return $this->belongsToMany('App\Models\RBAC\Permission', 'permission_role');
    }

    public function owner()
    {
        return $this->belongsTo('App\Models\GEWIS\Organ');
    }
}
