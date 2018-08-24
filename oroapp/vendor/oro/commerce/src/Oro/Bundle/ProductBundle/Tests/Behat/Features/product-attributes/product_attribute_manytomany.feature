@regression
@ticket-BB-9989
@fixture-OroProductBundle:ProductAttributesFixture.yml
Feature: Product attribute many-to-many
  In order to have custom attributes for Product entity
  As an Administrator
  I need to be able to add product attribute and have attribute data in search and filter

  Scenario: Create product attribute
    Given I login as administrator
    And I go to Products/ Product Attributes
    When I click "Create Attribute"
    And I fill form with:
      | Field Name | ManyToManyField |
      | Type       | Many to many    |
    And I click "Continue"
    Then I should see that "Product Attribute Frontend Options" contains "Searchable"
    And I should see that "Product Attribute Frontend Options" contains "Filterable"
    And I should see that "Product Attribute Frontend Options" does not contain "Sortable"

    When I fill form with:
      | Target entity              | Customer User          |
      | Related entity data fields | ID                     |
      | Related entity info title  | [First Name,Last Name] |
      | Related entity detailed    | [First Name,Last Name] |
      | Searchable                 | Yes                    |
      | Filterable                 | Yes                    |
    And I save and close form
    Then I should see "Attribute was successfully saved" flash message

    When I click update schema
    Then I should see "Schema updated" flash message

  Scenario: Update product family with new attribute
    Given I go to Products/ Product Families
    When I click "Edit" on row "default_family" in grid
    And I fill "Product Family Form" with:
      | Attributes | [ManyToManyField] |
    And I save and close form
    Then I should see "Successfully updated" flash message

  Scenario: Update product
    Given I go to Products/ Products
    When I click "Edit" on row "SKU123" in grid
    And I click "Add"
    And I select following records in grid:
      | Marlene Bradley |
    And I click "Select"
    And I save form
    Then I should see "Product has been saved" flash message
    And I should see "Marlene Bradley"

  Scenario: Check product grid search
    Given I login as AmandaRCole@example.org buyer
    When I type "Marlene Bradley" in "search"
    And I click "Search Button"
    Then I should see "SKU123" product
    And I should not see "SKU456" product

  Scenario: Check product grid filter
    Given I click "NewCategory"
    And I should see "SKU123" product
    And I should see "SKU456" product
    When I filter ManyToManyField as contains "Marlene Bradley"
    Then I should see "SKU123" product
    And I should not see "SKU456" product
