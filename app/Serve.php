<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serve extends Model
{
     protected $table = 'serve';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
           'nm_servidor',  
           'matricula',
           'sexo_id',
           'data_nascimento',
           'rg',
           'orgao_expedidor_id',
           'cpf',
           'pis_pasep',
           'nm_pai',
           'nm_mae',
           'telefone',
           'email',
           'obito_id',
           'origin_id',
           'type_serve_id',
           'marital_status_id'
           

    ];
    protected $guarded = [];
    
     public function origin(){
          return $this->belongsTo(Origin::class,'origin_id');
    }
    public function type_serve(){
         
          return $this->belongsTo(Type_Serve::class,'type_serve_id');
   }
    public function marital_status(){

          return $this->belongsTo(Marital_Status::class,'marital_status_id');
    }
    public function sexo(){

          return $this->belongsTo(Sexo::class,'sexo_id');
    }
    public function obito(){

          return $this->belongsTo(Obito::class,'obito_id');
    }
    public function orgao_expedidor(){

          return $this->belongsTo(Orgao_Expedidor::class,'orgao_expedidor_id');
    }
 
    
}
