# OroOrganizationBundle

OroOrganizationBundle extends the OroPlatform ACL system with organization and business unit ownership levels and provides the ability for the application users to reflect the company organizational structure in the application ACL permission scheme.

## Overview

The `OroOrganizationBundle` introduced 2 entities: Organization and Business Units that will help with data
responsibility and configuration.

Organization can have multiple business units assigned.

Each Business Unit must have parent organization assigned and can have an owning Business Unit.

Each User can be assigned to multiple business units. A business units tree on user update page was added for easy assignment.

### Entity Ownerships

Each entity can have one of 3 ownership types defined: User, Business Unit or Organization.

Ownership type is stored in entity config and can be defined through entity class annotation

``` php
/**
    ...
 * @Configurable(
 *  defaultValues={
 *      "entity"={"label"="User", "plural_label"="Users"},
 *      "ownership"={
 *          "owner_type"="BUSINESS_UNIT",
 *          "owner_field_name"="owner",
 *          "owner_column_name"="business_unit_owner_id"
 *      }
 *  }
 * )
    ...
 */
 class User
```

Available Ownership Types

<table>
<tr>
    <th>Label</th>
    <th>Code</th>
</tr>
<tr>
    <td>User</td>
    <td>USER</td>
</tr>
<tr>
    <td>Business Unit</td>
    <td>BUSINESS_UNIT</td>
</tr>
<tr>
    <td>Organization</td>
    <td>ORGANIZATION</td>
</tr>
</table>

Users with ASSIGN permission can change owners of any record they have access to.
If change owner permission is not granted, 2 cases are possible when entity is created:
    - If ownership type is USER, owner is automatically set to current user
    - If ownership type is BUSINESS_UNIT or ORGANIZATION, user has to choose owner from the list of business units or organizations he is assigned to
