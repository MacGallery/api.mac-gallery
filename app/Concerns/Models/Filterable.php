<?php

namespace App\Concerns\Models;

trait Filterable
{
    /**
     * add filtering.
     *
     * @param  $builder: query builder.
     * @param  $filters: array of filters.
     * @return query builder.
     */
    public function scopeFilterable($builder, $filters = [])
    {
        if (!$filters) {
            return $builder;
        }
        $tableName = $this->getTable();
        $defaultFillableFields = $this->filterable;
        foreach ($filters as $field => $value) {
            if ($this->boolFilterFields && in_array($field, $this->boolFilterFields) && $value != null) {
                $builder->where($field, (bool)$value);
                continue;
            }
            if ($defaultFillableFields && !in_array($field, $defaultFillableFields) || !$value) {
                continue;
            }
            if ($this->likeFilterFields && in_array($field, $this->likeFilterFields)) {
                $builder->where($tableName . '.' . $field, 'LIKE', "%$value%");
            } else if (in_array($field, $defaultFillableFields) && is_array($value)) {
                $builder->whereIn($field, $value);
            } else if (in_array($field, $defaultFillableFields)) {
                $builder->where($field, $value);
            }
        }
        return $builder;
    }
}