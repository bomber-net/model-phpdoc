<?php

namespace BomberNet\ModelPhpdoc;

use Closure;
use DateTimeInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\LazyCollection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Query\Expression;

/**
 * @method static static create (array $attributes=[])
 * @method static static firstOrCreate (array $attributes=[],array $values=[])
 * @method static static firstOrNew (array $attributes=[],array $values=[])
 * @method static static updateOrCreate (array $attributes=[],array $values=[])
 * @method static Collection|static|null find (mixed $id,array|string $columns=['*'])
 * @method static Collection|static|mixed findOr (mixed $id,Closure|array|string $columns=['*'],Closure|null $callback=null)
 * @method static int upsert (array $values,array|string $uniqueBy,array|null $update=null)
 * @method static LazyCollection cursor ()
 * @method static Collection get (array $columns=['*'])
 * @method static Builder select (array|mixed $columns=['*'])
 * @method static Builder setQuery (Builder $query)
 * @method static Builder where (Closure|string|array|Expression $column,mixed $operator=null,mixed $value=null,string $boolean='and')
 * @method static Builder orWhere (Closure|array|string|Expression $column,mixed $operator=null,mixed $value=null)
 * @method static Builder whereIn (string $column,mixed $values,string $boolean='and',bool $not=false)
 * @method static Builder whereRaw (string $sql,mixed $bindings=[],string $boolean='and')
 * @method static Builder whereNull (string|array $columns,string $boolean='and',Bool $not=false)
 * @method static Builder whereNotNull (string|array $columns,string $boolean='and')
 * @method static Builder whereHas (string $relation,Closure|null $callback=null,string $operator='>=',int $count=1)
 * @method static Builder orWhereHas (string $relation,Closure|null $callback=null,string $operator='>=',int $count=1)
 * @method static Builder whereDoesntHave (string $relation,?Closure $callback=null)
 * @method static Builder whereDay (string $column,string $operator,DateTimeInterface|string|int|null $value=null,string $boolean='and')
 * @method int increment (string|Expression $column,float|int $amount=1,array $extra=[])
 * @method int decrement (string|Expression $column,float|int $amount=1,array $extra=[])
 * @method static Collection pluck (string|Expression $column,?string $key=null)
 * @method static int count (string $columns='*')
 */
trait PHPDocTrait
	{
	}
