Coding Challenge:
- Didn't have time to do the login and the unit tests

Postman collection : https://www.getpostman.com/collections/03023fd8a1ef7cd82abe

- products listing
GET /api/v1/products

- categories listing
GET /api/v1/categories

- get product
GET /api/v1/products/{product_id}

- create product
POST /api/v1/products
{name,
sku,
quantity,
price,
category}

- update product
POST /api/v1/products/{product_id}
{name,
sku,
quantity,
price,
category}

- delete product
DELETE /api/v1/products/{product_id}
