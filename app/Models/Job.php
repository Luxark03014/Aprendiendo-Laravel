<?php

namespace App\Models; //organiza para que no haya confusiones con nombres parecidos y tenerlo todo mas estructurado

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;




class Job extends Model 
{
    use HasFactory;
    protected $table = 'job_listings'; //nombre de la tabla en la base de Datos
    
    protected $fillable = ['title', 'salary'];//se crea este atributo protegido para que un usuario que intente hacer un post no pueda rellenar o cambiar cosas que no queremos como el ID, de esta manera solo cambiaran los campos que se puedan rellenar (fillable)
    

    public function employer(){
        return $this->belongsTo(Employer::class);

    }

}
