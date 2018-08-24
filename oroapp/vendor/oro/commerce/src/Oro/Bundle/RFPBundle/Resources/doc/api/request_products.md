# Oro\Bundle\RFPBundle\Entity\RequestProduct

## ACTIONS

### get

Retrieve a specific request product record.

{@inheritdoc}

### get_list

Retrieve a collection of request product records.

The list of records that will be returned, could be limited by filters.

{@inheritdoc}

### create

Create a new request product record.

The created record is returned in the response.

{@inheritdoc}

{@request:json_api}
Example:

`</admin/api/requestproducts>`

```JSON
{
  "data": {
    "type": "requestproducts",
    "id": "1",
    "attributes": {
      "comment": "Notes 0"
    },
    "relationships": {
      "request": {
        "data": {
          "type": "requests",
          "id": "1"
        }
      },
      "product": {
        "data": {
          "type": "products",
          "id": "10"
        }
      },
      "requestProductItems": {
        "data": [
          {
            "type": "requestproductitems",
            "id": "1"
          }
        ]
      }
    }
  }
}
```
{@/request}

### update

Edit a specific request product record.

The updated record is returned in the response.

{@inheritdoc}

{@request:json_api}
Example:

`</admin/api/requestproducts/94>`

```JSON
{
  "data": {
    "type": "requestproducts",
    "id": "94",
    "attributes": {
      "comment": "Notes 0"
    },
    "relationships": {
      "request": {
        "data": {
          "type": "requests",
          "id": "1"
        }
      },
      "product": {
        "data": {
          "type": "products",
          "id": "10"
        }
      },
      "requestProductItems": {
        "data": [
          {
            "type": "requestproductitems",
            "id": "1"
          }
        ]
      }
    }
  }
}
```
{@/request}

### delete

Delete a specific request product record.

{@inheritdoc}

### delete_list

Delete a collection of request product records.

The list of records that will be deleted, could be limited by filters.

{@inheritdoc}

## FIELDS

### request

#### create

{@inheritdoc}

**The required field**

### product

#### create

{@inheritdoc}

**The required field**

### requestProductItems

#### create

{@inheritdoc}

**The required field**

## SUBRESOURCES

### product

#### get_subresource

Retrieve a record of product assigned to a specific request product record.

#### get_relationship

Retrieve the ID of product record assigned to a specific request product record.

#### update_relationship

Replace product assigned to a specific request product record.

{@request:json_api}
Example:

`</admin/api/requestproducts/1/relationships/product>`

```JSON
{
  "data": {
    "type": "products",
    "id": "1"
  }
}
```
{@/request}

### request

#### get_subresource

Retrieve the request records a specific request product record is assigned to.

#### get_relationship

Retrieve the ID of the request record which a specific request product record is assigned to.

#### update_relationship

Replace request assigned to a specific request product record.

{@request:json_api}
Example:

`</admin/api/requestproducts/1/relationships/request>`

```JSON
{
  "data": {
    "type": "requests",
    "id": "1"
  }
}
```
{@/request}

### requestProductItems

#### get_subresource

Retrieve a records of request product item assigned to a specific request product record.

#### get_relationship

Retrieve the IDs of request product item records assigned to a specific request product record.

#### update_relationship

Replace the list of request product item records assigned to a specific request product record.

{@request:json_api}
Example:

`</admin/api/requestproducts/1/relationships/requestProductItems>`

```JSON
{
  "data": [
    {
      "type": "requestproductitems",
      "id": "2"
    },
    {
      "type": "requestproductitems",
      "id": "3"
    }
  ]
}
```
{@/request}

#### add_relationship

Set request product item records for a specific request product record.

{@request:json_api}
Example:

`</admin/api/requestproducts/1/relationships/requestProductItems>`

```JSON
{
  "data": [
    {
      "type": "requestproductitems",
      "id": "2"
    },
    {
      "type": "requestproductitems",
      "id": "3"
    }
  ]
}
```
{@/request}

#### delete_relationship

Remove request product item records from a specific request product record.

{@request:json_api}
Example:

`</admin/api/requestproducts/1/relationships/requestProductItems>`

```JSON
{
  "data": [
    {
      "type": "requestproductitems",
      "id": "2"
    },
    {
      "type": "requestproductitems",
      "id": "3"
    }
  ]
}
```
{@/request}
