<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    protected $fillable = ['key', 'value', 'type', 'description'];

    public static function get(string $key, $default = null)
    {
        return Cache::remember("setting.{$key}", 3600, function () use ($key, $default) {
            $setting = self::where('key', $key)->first();
            
            if (!$setting) {
                return $default;
            }

            return match ($setting->type) {
                'boolean', 'bool' => filter_var($setting->value, FILTER_VALIDATE_BOOLEAN),
                'integer', 'int'  => (int) $setting->value,
                'json', 'array'   => json_decode($setting->value, true),
                default          => $setting->value,
            };
        });
    }

    public static function set(string $key, $value, ?string $type = null): bool
    {
        $setting = self::updateOrCreate(
            ['key' => $key],
            array_filter([
                'value' => is_array($value) ? json_encode($value) : $value,
                'type'  => $type,
            ])
        );

        Cache::forget("setting.{$key}");
        return $setting->exists;
    }

    public static function clearCache(): void
    {
        foreach (self::pluck('key') as $key) {
            Cache::forget("setting.{$key}");
        }
    }
}