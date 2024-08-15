# NB: This package is still under development

## Draft (table schema)

[![Product](https://i.ibb.co/XWZ4k1s/Laravel-attributable-package.png)](https://dbdiagram.io/d/Laravel-attributable-package-657ae60c56d8064ca00664ad)

### Feature List for Product Variations Module

| Feature                                      | Status          |
|----------------------------------------------|-----------------|
| Add attributes (e.g., Color, Capacity)       | ⭕              |
| Add attribute values (e.g., Blue, 64 GB)     | ⭕              |
| Manage prices for each variant               | ⭕              |
| Manage stock levels for each variant         | ⭕              |
| Manage variants                              | ⭕              |

#### Legend
- ✅ (implemented)
- ⭕ (not implemented)


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


### Full Example

| Product Name    | Color | Capacity | Price | Stock | SKU      | Created At          | Updated At          |
|-----------------|-------|----------|-------|-------|----------|---------------------|---------------------|
| USB Drive 64 GB | Blue  | 64 GB    | 1.00  | 20    | USB-B-64 | 2024-08-15 12:00:00 | 2024-08-15 12:00:00 |
| USB Drive 64 GB | Red   | 64 GB    | 1.20  | 15    | USB-R-64 | 2024-08-15 12:00:00 | 2024-08-15 12:00:00 |
| USB Drive 2 GB  | Red   | 2 GB     | 0.50  | 0     | USB-R-2  | 2024-08-15 12:00:00 | 2024-08-15 12:00:00 |

- This module will allow you to manage product variations, such as color, capacity, etc.
- Prices and stock levels can be managed for each combination of attributes.
- The SKU is automatically generated based on the attribute values.
