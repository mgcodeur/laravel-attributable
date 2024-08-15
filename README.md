# NB: This package is still under development

## Draft (table schema)

### Table `product`

| id  | name | description         | category_id | created_at          | updated_at          |
|-----|------|---------------------|-------------|---------------------|---------------------|
| 1   | USB  | USB Drive 64 GB     | 1           | 2024-08-15 12:00:00 | 2024-08-15 12:00:00 |
| 2   | USB  | USB Drive 2 GB      | 1           | 2024-08-15 12:00:00 | 2024-08-15 12:00:00 |

### Table `category`

| id  | name           | parent_id |
|-----|----------------|-----------|
| 1   | PC Accessories | NULL      |
| 2   | Storage        | 1         |

### Table `attribute`

| id  | name     |
|-----|----------|
| 1   | Color    |
| 2   | Capacity |

### Table `attribute_value`

| id  | attribute_id | value  |
|-----|--------------|--------|
| 1   | 1            | Blue   |
| 2   | 1            | Red    |
| 3   | 2            | 64 GB  |
| 4   | 2            | 2 GB   |

### Table `model_variant`

| id  | model_id | model_type             | price | stock | sku       | created_at          | updated_at          |
|-----|----------|------------------------|-------|-------|-----------|---------------------|---------------------|
| 1   | 1        | App\Models\Product     | 1.00  | 20    | USB-B-64  | 2024-08-15 12:00:00 | 2024-08-15 12:00:00 |
| 2   | 1        | App\Models\Product     | 1.20  | 15    | USB-R-64  | 2024-08-15 12:00:00 | 2024-08-15 12:00:00 |
| 3   | 2        | App\Models\Product     | 0.50  | 0     | USB-R-2   | 2024-08-15 12:00:00 | 2024-08-15 12:00:00 |

### Table `model_variant_attribute`

| id  | model_variant_id | attribute_value_id |
|-----|------------------|--------------------|
| 1   | 1                | 1                  |  // Color: Blue
| 2   | 1                | 3                  |  // Capacity: 64 GB
| 3   | 2                | 2                  |  // Color: Red
| 4   | 2                | 3                  |  // Capacity: 64 GB
| 5   | 3                | 2                  |  // Color: Red
| 6   | 3                | 4                  |  // Capacity: 2 GB
