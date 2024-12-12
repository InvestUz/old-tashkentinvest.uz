<?php

namespace App\Models;

use App\Services\HistoryService;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected static function booted()
    {
        static::updated(function ($model) {
            $original = $model->getOriginal();
            $changes = $model->getChanges();

            HistoryService::record($model, $original, $changes);
        });

        static::deleted(function ($model) {
            History::create([
                'model_type' => get_class($model),
                'model_id' => $model->id,
                'field' => 'deleted',
                'old_value' => json_encode($model->getOriginal()), // Store old data as JSON
                'new_value' => null,
                'user_id' => auth()->id() ?? 1,
            ]);
        });
    }
    protected $fillable = [
        'user_id', 'action', 'action_timestamp',
        'category_id',
        'unique_number',
        'district',
        'street',
        'mahalla',
        'land',
        'contact_person',
        'elon_fayl',
        'pratakol_fayl',
        'qoshimcha_fayl',
        'implementation_period',
        'status',
        'srok_realizatsi',
        'start_date',
        'end_date',
        'second_stage_start_date',
        'second_stage_end_date',
        'investor_initiative_date',
        'company_name',
        'hokim_resolution_no',
    ];

    

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
