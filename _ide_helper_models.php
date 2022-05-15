<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Bulanlaporan
 *
 * @property int $id
 * @property string $bulan_angka
 * @property string $nama_bulan
 * @property string $tahun
 * @property int $id_satker
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Satuankerja|null $satuankerja
 * @method static \Illuminate\Database\Eloquent\Builder|Bulanlaporan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bulanlaporan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bulanlaporan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bulanlaporan whereBulanAngka($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bulanlaporan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bulanlaporan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bulanlaporan whereIdSatker($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bulanlaporan whereNamaBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bulanlaporan whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bulanlaporan whereUpdatedAt($value)
 */
	class Bulanlaporan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Penerbit
 *
 * @property int $id
 * @property string $nama_penerbit
 * @property string $kota
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Penerbit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Penerbit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Penerbit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Penerbit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Penerbit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Penerbit whereKota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Penerbit whereNamaPenerbit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Penerbit whereUpdatedAt($value)
 */
	class Penerbit extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Rk1
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Rk1 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rk1 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rk1 query()
 */
	class Rk1 extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Satuankerja
 *
 * @property int $id
 * @property string $nama_satker
 * @property string $alamat_satker
 * @property string $telepon_satker
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Satuankerja newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Satuankerja newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Satuankerja query()
 * @method static \Illuminate\Database\Eloquent\Builder|Satuankerja whereAlamatSatker($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Satuankerja whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Satuankerja whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Satuankerja whereNamaSatker($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Satuankerja whereTeleponSatker($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Satuankerja whereUpdatedAt($value)
 */
	class Satuankerja extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $username
 * @property string $no_hp
 * @property string $level
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $last_login
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $id_satker
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIdSatker($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNoHp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\lipa
 *
 * @property int $id
 * @property string $no_urut
 * @property string $kode_lipa
 * @property string $uraian_lipa
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|lipa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|lipa newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|lipa query()
 * @method static \Illuminate\Database\Eloquent\Builder|lipa whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|lipa whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|lipa whereKodeLipa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|lipa whereNoUrut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|lipa whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|lipa whereUraianLipa($value)
 */
	class lipa extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\lipa1
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|lipa1 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|lipa1 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|lipa1 query()
 * @method static \Illuminate\Database\Eloquent\Builder|lipa1 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|lipa1 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|lipa1 whereUpdatedAt($value)
 */
	class lipa1 extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\tambahlaporan
 *
 * @property int $id
 * @property string $bulan
 * @property int $tahun
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|tambahlaporan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|tambahlaporan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|tambahlaporan query()
 * @method static \Illuminate\Database\Eloquent\Builder|tambahlaporan whereBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|tambahlaporan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|tambahlaporan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|tambahlaporan whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder|tambahlaporan whereUpdatedAt($value)
 */
	class tambahlaporan extends \Eloquent {}
}

