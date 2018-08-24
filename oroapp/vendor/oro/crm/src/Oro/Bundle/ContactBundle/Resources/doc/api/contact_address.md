# Oro\Bundle\ContactBundle\Entity\ContactAddress

## ACTIONS  

### get

Retrieve a specific contact address record.

{@inheritdoc}

### get_list

Retrieve a collection of contact address records.

{@inheritdoc}

### create

Create a new contact address record.
The created record is returned in the response.

{@inheritdoc}

{@request:json_api}
Example:

`</api/contactaddresses>`

```JSON
{  
   "data":{  
      "type":"contactaddresses",
      "attributes":{  
         "primary":true,
         "label":"Primary Address",
         "street":"873 John Avenue",
         "city":"Jackson",
         "postalCode":"49201",
         "firstName":"Ramona",
         "lastName":"Venters"
      },
      "relationships":{  
         "owner":{  
            "data":{  
               "type":"contacts",
               "id":"1"
            }
         },
         "country":{  
            "data":{  
               "type":"countries",
               "id":"US"
            }
         },
         "region":{  
            "data":{  
               "type":"regions",
               "id":"US-MI"
            }
         }
      }
   }
}
```
{@/request}

### update

Edit a specific contact address record.

{@inheritdoc}

{@request:json_api}
Example:

`</api/contactaddresses/79>`

```JSON
{  
   "data":{  
      "type":"contactaddresses",
      "id":"79",
      "attributes":{  
         "primary":true,
         "label":"Primary Address",
         "street":"873 John Avenue",
         "city":"Jackson",
         "postalCode":"49201",
         "firstName":"Ramona",
         "lastName":"Venters"
      },
      "relationships":{  
         "owner":{  
            "data":{  
               "type":"contacts",
               "id":"1"
            }
         },
         "country":{  
            "data":{  
               "type":"countries",
               "id":"US"
            }
         },
         "region":{  
            "data":{  
               "type":"regions",
               "id":"US-MI"
            }
         }
      }
   }
}
```
{@/request}

### delete

Delete a specific contact address record.

{@inheritdoc}

### delete_list

Delete a collection of contact address records.
The list of records that will be deleted, could be limited by filters.

{@inheritdoc}

## FIELDS

### id

#### update

{@inheritdoc}

**The required field**

### country

#### create

{@inheritdoc}

**The required field**

### owner

#### create

{@inheritdoc}

**The required field**

## SUBRESOURCES

### country

#### get_subresource

Retrieve the record of the country configured for a specific contact address record.

#### get_relationship

Retrieve the ID of the country configured for a specific contact address record.

#### update_relationship

Replace the country configured for a specific contact address record.

{@request:json_api}
Example:

`</api/contactaddresses/1/relationships/country>`

```JSON
{
  "data": {
    "type": "countries",
    "id": "US"
  }
}
```
{@/request}

### owner

#### get_subresource

Retrieve the record of the contact who is the owner of a specific contact address record.

#### get_relationship

Retrieve the ID of the contact who is the owner of a specific contact address record.

#### update_relationship

Replace the owner of a specific contact address record.

{@request:json_api}
Example:

`</api/contactaddresses/1/relationships/owner>`

```JSON
{
  "data": {
    "type": "contacts",
    "id": "1"
  }
}
```
{@/request}

### region

#### get_subresource

Retrieve the record of the region configured for a specific contact address record.

#### get_relationship

Retrieve the ID of the region that is configured for a specific contact address record.

#### update_relationship

Replace the region that is configured for a specific contact address record.

{@request:json_api}
Example:

`</api/contactaddresses/1/relationships/region>`

```JSON
{
  "data": {
    "type": "regions",
    "id": "US-NY"
  }
}
```
{@/request}

### types

#### get_subresource

Retrieve a collection of the address type records that are configured for a specific contact address record.

#### get_relationship

Retrieve the IDs of the address types ('billing,' 'shipping') that are configured for a specific contact address record.

#### add_relationship

Set the address types for a specific contact address record.

{@request:json_api}
Example:

`</api/contactaddresses/1/relationships/types>`

```JSON
{  
   "data":[  
      {  
         "type":"addresstypes",
         "id":"billing"
      }
   ]
}
```
{@/request}

#### update_relationship

Replace the address types for a specific contact address record.

{@request:json_api}
Example:

`</api/contactaddresses/1/relationships/types>`

```JSON
{  
   "data":[  
      {  
         "type":"addresstypes",
         "id":"billing"
      }
   ]
}
```
{@/request}

#### delete_relationship

Remove the address types of a specific contact address record.