namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;

    protected $table = 'inventaris';

    protected $fillable = [
        'barang_id',
        'lokasi',
        'stok_tersedia',
    ];

    // Inventaris milik satu barang
    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
