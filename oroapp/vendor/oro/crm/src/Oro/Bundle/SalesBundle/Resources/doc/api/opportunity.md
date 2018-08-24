# Oro\Bundle\SalesBundle\Entity\Opportunity

## ACTIONS

### get

Retrieve a specific opportunity record.

{@inheritdoc}

### get_list

Retrieve a collection of opportunity records.

{@inheritdoc}

### create

Create a new opportunity record.
The created record is returned in the response.

{@inheritdoc}

**Please note:**

*Either **account** or **customer** field should be specified. In case when both fields are provided
the customer should be a part of the specified account.*

{@request:json_api}
Example:

`</api/opportunities>`

```JSON
{  
   "data":{  
      "type":"opportunities",
      "attributes":{  
         "name":"Roy Greenwell",
         "budgetAmountCurrency":"USD",
         "budgetAmountValue":"5765.0000"
      },
      "relationships":{  
         "contact":{  
            "data":{  
               "type":"contacts",
               "id":"2"
            }
         },
         "owner":{  
            "data":{  
               "type":"users",
               "id":"43"
            }
         },
         "organization":{  
            "data":{  
               "type":"organizations",
               "id":"1"
            }
         },
         "customer":{
            "data":{  
               "type":"b2bcustomers",
               "id":"9"
            }
         },
         "account":{
            "data":null
         },
         "status":{  
            "data":{  
               "type":"opportunitystatuses",
               "id":"in_progress"
            }
         }
      }
   }
}
```
{@/request}

### update

Edit a specific opportunity record.
The updated record is returned in the response.

{@inheritdoc}

**Please note:**

*The **account** and **customer** fields are related and you cannot pass them together if
the customer is not a part of the specified account.
These fields could be used independent from each other, but must be correlated if both of them are specified.*

{@request:json_api}
Example:

`</api/opportunities/52>`

```JSON
{  
   "data":{  
      "type":"opportunities",
      "id":"52",
      "attributes":{  
         "name":"Roy Greenwell",
         "budgetAmountCurrency":"USD",
         "budgetAmountValue":"5765.0000"
      },
      "relationships":{  
         "contact":{  
            "data":{  
               "type":"contacts",
               "id":"2"
            }
         },
         "owner":{  
            "data":{  
               "type":"users",
               "id":"43"
            }
         },
         "organization":{  
            "data":{  
               "type":"organizations",
               "id":"1"
            }
         },
         "account":{
            "data":{
               "type":"accounts",
               "id":"3"
            }
         },
         "status":{  
            "data":{  
               "type":"opportunitystatuses",
               "id":"in_progress"
            }
         }
      }
   }
}
```
{@/request}

### delete

Delete a specific opportunity record.

{@inheritdoc}

### delete_list

Delete a collection of opportunity records.
The list of records that will be deleted, could be limited by filters.

{@inheritdoc}

## FIELDS

### name

#### create

{@inheritdoc}

**The required field**

#### update 

{@inheritdoc}

**Please note:**

*This field is **required** and must remain defined.*

### customer

A customer the opportunity is assigned to.

#### create

{@inheritdoc}

**Please note:**

*This field is **required** if the **account** field is not specified.*

*If both **customer** and **account** fields are provided the customer should be a part of the specified account.*

### account

An account the opportunity is assigned to.

#### create

{@inheritdoc}

**Please note:**

*This field is **required** if the **customer** field is not specified.*

### status

#### create

{@inheritdoc}

**The required field**

### campaign

The marketing campaign as a result of which the Opportunity was created.

## SUBRESOURCES

### closeReason

#### get_subresource

Retrieve the reason for opportunity closure.

#### get_relationship

Retrieve the ID of the reason for opportunity closure.

#### update_relationship

Update the reason for opportunity closure.

{@request:json_api}
Example:

`</api/opportunities/45/relationships/closeReason>`

```JSON
{
  "data": {
    "type": "opportunityclosereasons",
    "id": "outsold"
  }
}
```
{@/request}

### contact

#### get_subresource

Retrieve the person on the customer side who is directly related to the opportunity.

#### get_relationship

Retrieve the ID of the person on the customer side who is directly related to the opportunity.

#### update_relationship

Update the person on the customer side who is directly related to the opportunity.

{@request:json_api}
Example:

`</api/opportunities/1/relationships/contact>`

```JSON
{
  "data": {
    "type": "contacts",
    "id": "2"
  }
}
```
{@/request}

### customer

#### get_subresource

Retrieve a customer the opportunity is created for.

#### get_relationship

Retrieve the ID of a customer the opportunity is created for.

#### update_relationship

Update a customer the opportunity is created for.

{@request:json_api}
Example:

`</api/opportunities/1/relationships/customer>`

```JSON
{
  "data": {
    "type": "b2bcustomers",
    "id": "1"
  }
}
```
{@/request}

### account

#### get_subresource

Retrieve an account the opportunity is created for.

#### get_relationship

Retrieve the ID of an account the opportunity is created for.

#### update_relationship

Update an account the opportunity is created for.

{@request:json_api}
Example:

`</api/opportunities/1/relationships/account>`

```JSON
{
  "data": {
    "type": "accounts",
    "id": "1"
  }
}
```
{@/request}

### lead

#### get_subresource

Retrieve the sale prospect that has been successfully qualified into this opportunity.

#### get_relationship

Retrieve the ID of the sale prospect that has been successfully qualified into this opportunity.

#### update_relationship

Update the sale prospect that has been successfully qualified into this opportunity.

{@request:json_api}
Example:

`</api/opportunities/54/relationships/lead>`

```JSON
{
  "data": {
    "type": "leads",
    "id": "1"
  }
}
```
{@/request}

### organization

#### get_subresource

Retrieve an organization to which the opportunity belongs.

#### get_relationship

Retrieve the ID of an organization to which the opportunity belongs.

#### update_relationship

Update an organization to which the opportunity belongs.

{@request:json_api}
Example:

`</api/opportunities/1/relationships/organization>`

```JSON
{
  "data": {
    "type": "organizations",
    "id": "1"
  }
}
```
{@/request}

### owner

#### get_subresource

Retrieve an user who owns the opportunity.

#### get_relationship

Retrieve the ID of an user who owns the opportunity

#### update_relationship

Update an user who owns the opportunity.

{@request:json_api}
Example:

`</api/opportunities/1/relationships/owner>`

```JSON
{
  "data": {
    "type": "users",
    "id": "43"
  }
}
```
{@/request}

### status

#### get_subresource

Retrieve a stage in the process of a sale.

#### get_relationship

Retrieve the ID of a stage in the process of a sale.

#### update_relationship

Update a stage in the process of a sale.

{@request:json_api}
Example:

`</api/opportunities/1/relationships/status>`

```JSON
{
  "data": {
    "type": "opportunitystatuses",
    "id": "in_progress"
  }
}
```
{@/request}

# Extend\Entity\EV_Opportunity_Status

## ACTIONS  

### get

Retrieve a specific opportunity status record.

{@inheritdoc}

### get_list

Retrieve a collection of opportunity status records.

{@inheritdoc}


# Oro\Bundle\SalesBundle\Entity\OpportunityCloseReason

## ACTIONS

### get

Retrieve a specific opportunity close reason record.

{@inheritdoc}

### get_list

Retrieve the collection of opportunity closed reason records.

{@inheritdoc}


# Extend\Entity\EV_Opportunity_Status

## ACTIONS

### get

Retrieve a specific opportunity status record.

Opportunity status defines a deal's stage (Open, Closed Won, etc.).

### get_list

Retrieve a collection of opportunity statuses.

Opportunity status defines a deal's stage (Open, Closed Won, etc.).
