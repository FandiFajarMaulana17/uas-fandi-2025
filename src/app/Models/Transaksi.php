namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksis';

    protected $fillable = [
        'barang_id',
        'jenis',      // misalnya: 'masuk' atau 'keluar'
        'jumlah',
        'tanggal',
        'keterangan',
    ];

    // Transaksi milik satu barang
    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
