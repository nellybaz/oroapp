Category visibility
-------------------

Category visibility is a functionality that allows to show or hide some products specific category based on settings parent category
customer or customer group. Category visibility related to the product visibility and affects [product visibility](./product-visibility.md).

### General Information
As product visibility category visibility has same 3 levels.

#### Visibility to all:
* **Parent Category** - `Default value`. Value is taken from the parent category
* **Config** - The value is taken from the system configuration parameter "Category Visibility to Customers"
* **Hidden** - Specific static value
* **Visible** - Specific static value

#### Visibility to Customer Groups:
* **Visibility to All**  - `Default value`. Fallback to Visibility to All value
* **Parent Category** - Value is taken from the parent category for selected customer group
* **Hidden** - Specific static value
* **Visible** - Specific static value

#### Visibility to Customers:
* **Customer Group** - `Default value`. Fallback to Visibility to Customer Groups
* **Visibility to All** - Fallback to Visibility to All value
* **Parent Category** - Value is taken from the parent category for selected customer
* **Hidden** - Specific static value
* **Visible** - Specific static value

As well as for the product visibility there are entities in database for each listed level:
`CategoryVisibility`, `CustomerGroupCategoryVisibility`, `CustomerCategoryVisibility` each of which implements 
`VisibilityInterface` interface.

#### Addition information:

* If default value is selected then the entity is not written to the database.
* If category doesn't have parent category then "Parent Category" option is not available for all levels. 

### Category Visibility Cache

Resolved category category visibility settings must be pre-calculated and cached for greater performance. 
To do this there are 3 resolved entities that contains only static visibility values (visible or hidden) or fallback to config value.

There are resolved entities in database for each level:
`CategoryVisibilityResolved`, `CustomerGroupCategoryVisibilityResolved`, `CustomerCategoryVisibilityResolved`
each of which extend `BaseCategoryVisibilityResolved` abstract class.

For `CustomerCategoryVisibilityResolved`, `CustomerGroupCategoryVisibilityResolved` in case if source tables does not
contain a record (default visibility setting was selected), then entity is not written to resolved tables.
For `CategoryVisibilityResolved` entity is not written to resolved table is case then source table 
(CategoryVisibility) contains record with "Config" value.

Each create/update/delete operation in source visibility entities automatically performs 
corresponding change to the resolved tables.

For forced visibility cache building on all 3 levels developer can run command: 
`product:visibility:cache:build`. This command also rebuilds product visibility cache.

Also each row in cache tables stores one on the data sources:
* SOURCE_STATIC - value is calculated based on selected option and fallback
* SOURCE_PARENT_CATEGORY - value is calculated based on related category, ID of the category also stored in DB

Here is a list of possible cases that require to update the cache:

#### Category Visibility to All
| `CategoryVisibilityResolved`     | **Parent Category**                          | **Config** | **Hidden**                                    | **Visible**                                  |
|----------------------------------|----------------------------------------------|------------|-----------------------------------------------|----------------------------------------------|
| **category (FK) (PK)**           | Get category from current category visibility|      X     | Get category from current category visibility | Get category from current category visibility|
| **scope (FK) (PK)**              |                                              |      X     |                                               |                                              |
| **sourceCategoryVisibility (FK)**|                   null                       |      X     | Current category visibility                   | Current category visibility                  |
| **visibility**                   | Get parent category visibility from cache    |      X     |             ::VISIBILITY_HIDDEN               |             ::VISIBILITY_VISIBLE             |
| **source**                       |           ::SOURCE_PARENT_CATEGORY           |      X     |               ::SOURCE_STATIC                 |               ::SOURCE_STATIC                |

#### Category Visibility to Customer Group
| `CustomerGroupCategoryVisibilityResolved` | **Visibility to All** | **Parent Category**                                              | **Hidden**                                                 | **Visible**                                                |
|------------------------------------------|-----------------------|------------------------------------------------------------------|------------------------------------------------------------|------------------------------------------------------------|
| **category (FK) (PK)**                   |          X            | Get category from current customer group category visibility      | Get category from current customer group category visibility| Get category from current customer group category visibility|
| **scope (FK) (PK)**                      |          X            |                                                                  |                                                            |                                                            |
| **sourceProductVisibility (FK)**         |          X            | Current customer group category visibility                        | Current customer group product visibility                   | Current customer group category visibility                  |
| **visibility**                           |          X            | Get parent category visibility from cache for this customer group |                     ::VISIBILITY_HIDDEN                    |                   ::VISIBILITY_VISIBLE                     |
| **source**                               |          X            |           ::SOURCE_PARENT_CATEGORY                               |                       ::SOURCE_STATIC                      |                     ::SOURCE_STATIC                        |

#### Category Visibility to Customer
| `CustomerCategoryVisibilityResolved`     | **Customer Group** | **Visibility to All**                                       | **Parent Category**                                        | **Hidden**                                           | **Visible**                                          |
|-----------------------------------------|-------------------|-------------------------------------------------------------|------------------------------------------------------------|------------------------------------------------------|------------------------------------------------------|
| **category (FK) (PK)**                  |         X         | Get category from current customer group category visibility | Get category from current customer category visibility      | Get category from current customer category visibility| Get category from current customer category visibility|
| **scope (FK) (PK)**                     |         X         |                                                             |                                                            |                                                      |                                                      |
| **sourceProductVisibility (FK)**        |         X         | Current customer category visibility                         | Current customer category visibility                        | Current customer product visibility                   | Current customer product visibility                   |
| **visibility**                          |         X         | Get category visibility to all from cache                   | Get parent category visibility from cache for this customer |                   ::VISIBILITY_HIDDEN                |                   ::VISIBILITY_VISIBLE               |
| **source**                              |         X         |                 ::SOURCE_STATIC                             |               ::SOURCE_PARENT_CATEGORY                     |                     ::SOURCE_STATIC                  |                       ::SOURCE_STATIC                |


All described cache tables contain information about visibility. 
There are following constant options to store this information:

* VISIBILITY_VISIBLE = 1
* VISIBILITY_HIDDEN = -1
* VISIBILITY_FALLBACK_TO_CONFIG = 0
* null

`VISIBILITY_FALLBACK_TO_CONFIG` is used if value referred to Category Visibility from System Configuration.    
For example:
```
Parent category:
    Category Visibility to All: Config
    Category Visibility to Customer Group 1: Visibility to All
    
Child category:
    Category Visibility to All: Config
    Category Visibility to Customer Group 1: Parent Category
```
In this case `CustomerGroupCategoryVisibility` for child category should be:

| **Field**                                | **Value**                                                        |
|------------------------------------------|------------------------------------------------------------------|
| **Id (PK)**                              |             CustomerGroupCategoryVisibilityId                     |
| **category (FK)**                        |                       ChildCategoryId                            |
| **scope (FK)**                           |                       Visibility Scope                           |
| **customer (FK)**                         |                       CustomerGroup1Id                            |
| **visibility**                           |                      ::PARENT_CATEGORY                           |

And `CustomerGroupCategoryVisibilityResolved` for child category should be:

| **Field**                                | **Value**                                                        |
|------------------------------------------|------------------------------------------------------------------|
| **category (FK) (PK)**                   |                       ChildCategoryId                            |
| **scope (FK) (PK)**                      |                       Scope                                      |
| **sourceProductVisibility (FK)**         |               CustomerGroupCategoryVisibilityId                   |
| **visibility**                           |               ::VISIBILITY_FALLBACK_TO_CONFIG                    |
| **source**                               |                  ::SOURCE_PARENT_CATEGORY                        |

    
#### Cache builders
To build category visibility cache there are cache builders similar to [product cache builders](./product-visibility.md#cache-builders).
To update the cache for all visibility levels developer should run command `product:visibility:cache:build`.
