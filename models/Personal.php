<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "personal".
 *
 * @property int $id_personal
 * @property string $nama_lengkap
 * @property string $nama_panggilan
 * @property string $jenis_kelamin
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $status_perkawinan
 * @property string $agama
 * @property string $pendidikan
 * @property string $alamat
 * @property string $no_ktp
 * @property string $no_hp
 * @property string $email
 *
 * @property Pegawai[] $pegawais
 */
class Personal extends \yii\db\ActiveRecord
{
    const STATUS_PERKAWINAN = ['Menikah' => 'Menikah', 'Belum Menikah' => 'Belum Menikah', 'Cerai Mati' => 'Cerai Mati', 'Cerai Hidup' => 'Cerai Hidup'];
    const PENDIDIKAN = ['DI' => 'DI', 'D2' => 'D2', 'D3' => 'D3', 'D4' => 'D4', 'S1' => 'S1', 'S2' => 'S2', 'S3' => 'S3'];
    const AGAMA = ['Islam' => 'Islam', 'Kristen' => 'Kristen', 'Budha' => 'Budha', 'Hindu' => 'Hindu', 'Lain-lain' => 'Lain-lain'];
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_lengkap', 'nama_panggilan', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'status_perkawinan', 'agama', 'pendidikan', 'alamat', 'no_ktp', 'no_hp', 'email'], 'required'],
            [['tanggal_lahir'], 'safe'],
            [['nama_lengkap', 'nama_panggilan', 'jenis_kelamin', 'tempat_lahir', 'status_perkawinan', 'agama', 'pendidikan', 'alamat', 'no_ktp', 'no_hp', 'email'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_personal' => 'Id Personal',
            'nama_lengkap' => 'Nama Lengkap',
            'nama_panggilan' => 'Nama Panggilan',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'status_perkawinan' => 'Status Perkawinan',
            'agama' => 'Agama',
            'pendidikan' => 'Pendidikan',
            'alamat' => 'Alamat',
            'no_ktp' => 'No Ktp',
            'no_hp' => 'No Hp',
            'email' => 'Email',
        ];
    }

    /**
     * Gets query for [[Pegawais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawais()
    {
        return $this->hasMany(Pegawai::class, ['id_personal' => 'id_personal']);
    }
    public function getPegawai()
    {
        return $this->hasOne(Pegawai::class, ['id_personal' => 'id_personal']);
    }
    public static function getAllPersonal(){
        $personal = Personal::find()->all();
        $personal = ArrayHelper::map($personal, 'id_personal', 'nama_lengkap');
        return $personal;
    }
}
