<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Ingredient extends Model
{
    protected $fillable = ['supplier_id', 'name', 'unit', 'stock_quantity', 'unit_price', 'minimum_stock'];

    protected function casts(): array
    {
        return [
            'stock_quantity' => 'decimal:2',
            'unit_price' => 'decimal:2',
            'minimum_stock' => 'decimal:2',
        ];
    }

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }

    public function recipeItems(): HasMany
    {
        return $this->hasMany(RecipeItem::class);
    }

    public function inventoryMovements(): HasMany
    {
        return $this->hasMany(InventoryMovement::class);
    }
}
