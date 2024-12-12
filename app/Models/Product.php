<?php
namespace App\Models;

use App\Services\HistoryService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id', 'action', 'action_timestamp',
        'tuman_user_id', 'baholash_user_id', 'invest_user_id',
        'yer_uchastkasi_raqami', 'tuman', 'mahalla', 'maydoni', 'manzil',
        'mulk_huquqi', 'ixtisosligi', 'photo', 'tuman_date',
        'tahmini_baholangan_qiymat', 'narx_sotix_som', 'narx_sotix_usd',
        'baholash_date', 'taklif_sotix_usd', 'taklif_date', 'tasdiqlangan_narx',
        'tasdiqlangan_date', 'shartnoma_raqami', 'shartnoma_sanasi',
        'does_he_putted_tuman_info', 'does_he_putted_baholash_info',
        'does_he_putted_taklif_info', 'does_he_putted_tasdiqlangan_info',
        'atsenka_elektron'
    ];

    protected static function booted()
    {
        static::created(function ($model) {
            self::recordHistory($model, 'created');
        });

        static::updated(function ($model) {
            self::recordHistory($model, 'updated');
        });

        static::deleted(function ($model) {
            self::recordHistory($model, 'deleted');
        });
    }

    private static function recordHistory($model, $action)
    {
        $original = $model->getOriginal();
        $changes = $model->getChanges();

        if ($action === 'deleted') {
            // For delete, we may want to save the original data as the "old_value"
            $changes = null; // No "new" changes for a delete action
        }

        HistoryService::record($model, $original, $changes);
    }

    public function tumanUser()
    {
        return $this->belongsTo(User::class, 'tuman_user_id');
    }

    public function baholashUser()
    {
        return $this->belongsTo(User::class, 'baholash_user_id');
    }

    public function investUser()
    {
        return $this->belongsTo(User::class, 'invest_user_id');
    }
}
