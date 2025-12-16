<?php

namespace App\Models;

use App\Models\Company;
use App\Models\Position;
use App\Models\Departement;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = ['id'];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

        public function departement()
    {
        return $this->belongsTo(Departement::class, 'departement_id');
    }

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }
}
