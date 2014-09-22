<?php

class Setting extends Model {
  protected $fillable = ['key', 'value'];

  protected static $expireTime = 240; // minutes

  public static function get($key) {
	  if(Cache::has($key)) {
		  return Cache::get($key);
	  }
	  $value = Setting::find($key, ['key']);
	  Cache::put($key, $value, self::$expireTime);
	  return $value;
  }

  public static function set($key, $value) {
	  $setting = Setting::firstOrNew(['key' => $key]);
	  $setting->key = $key;
	  $setting->value = $value;

	  Cache::put($key, $value, self::$expireTime);

	  return $setting->save();
  }

  public static function contains($key, $string) {
	  return strpos(static::get($key), $string) !== false;
  }
}
