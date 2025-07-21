namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barangs';

    protected $fillable = [
        'nama',
        'kode',
        'deskripsi',
        'stok',
        'satuan',
        'harga',
    ];

    // Barang punya banyak transaksi
    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }

    // Barang punya satu inventaris
    public function inventaris()
    {
        return $this->hasOne(Inventaris::class);
    }
}
