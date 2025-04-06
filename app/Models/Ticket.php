<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre', 'description', 'statut', 'priorité', 'date_creation', 'date_mise_a_jour', 'id_employe', 'id_technicien'
    ];

    // Relation : Un ticket appartient à un utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

