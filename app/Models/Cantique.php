<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cantique extends Model
{
    protected $fillable = [
        'numero',
        'titreFR',
        'titreMoore',
        'paroles',
        'nbvoix',
        'audio_tous',
        'audio_soprano',
        'audio_altos',
        'audio_tenor',
        'audio_basse'
    ];


    // On crée un "Accesseur" pour transformer le nom du fichier en URL complète
    public function getAudioTousAttribute($value)
    {
        if ($value) {
            // Transforme "1_tous.mp3" en "http://.../storage/audio/1_tous.mp3"
            return asset('storage/audio/' . $value);
        }
        return null;
    }
    // On crée un "Accesseur" pour transformer le nom du fichier en URL complète
    public function getAudioSopranoAttribute($value)
    {
        if ($value) {
            // Transforme "1_tous.mp3" en "http://.../storage/audio/1_tous.mp3"
            return asset('storage/audio/' . $value);
        }
        return null;
    }
    // On crée un "Accesseur" pour transformer le nom du fichier en URL complète
    public function getAudioAltosAttribute($value)
    {
        if ($value) {
            // Transforme "1_tous.mp3" en "http://.../storage/audio/1_tous.mp3"
            return asset('storage/audio/' . $value);
        }
        return null;
    }
    // On crée un "Accesseur" pour transformer le nom du fichier en URL complète
    public function getAudioBasseAttribute($value)
    {
        if ($value) {
            // Transforme "1_tous.mp3" en "http://.../storage/audio/1_tous.mp3"
            return asset('storage/audio/' . $value);
        }
        return null;
    }
    // On crée un "Accesseur" pour transformer le nom du fichier en URL complète
    public function getAudioTenorAttribute($value)
    {
        if ($value) {
            // Transforme "1_tous.mp3" en "http://.../storage/audio/1_tous.mp3"
            return asset('storage/audio/' . $value);
        }
        return null;
    }
}
