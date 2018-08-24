@regression
@ticket-BB-9989
@fixture-OroProductBundle:ProductAttributesFixture.yml
Feature: Product attribute text
  In order to have custom attributes for Product entity
  As an Administrator
  I need to be able to add product attribute and have attribute data in search and filter

  Scenario: Create product attribute
    Given I login as administrator
    And I go to Products/ Product Attributes
    When I click "Create Attribute"
    And I fill form with:
      | Field Name | TextField |
      | Type       | Text      |
    And I click "Continue"
    Then I should see that "Product Attribute Frontend Options" contains "Searchable"
    And I should see that "Product Attribute Frontend Options" contains "Filterable"
    And I should see that "Product Attribute Frontend Options" does not contain "Sortable"

    When I fill form with:
      | Searchable | Yes |
      | Filterable | Yes |
    And I save and close form
    Then I should see "Attribute was successfully saved" flash message

  Scenario: Update product family with new attribute
    Given I go to Products/ Product Families
    When I click "Edit" on row "default_family" in grid
    And I fill "Product Family Form" with:
      | Attributes | [TextField] |
    And I save and close form
    Then I should see "Successfully updated" flash message

  Scenario: Update product
    Given I go to Products/ Products
    When I click "Edit" on row "SKU123" in grid
    And I fill "Product Form" with:
      | TextField | TestTextDaTa |
    And I save and close form
    Then I should see "Product has been saved" flash message

  Scenario: Check product grid search
    Given I login as AmandaRCole@example.org buyer
    When I type "TestTextDaTa" in "search"
    And I click "Search Button"
    Then I should see "SKU123" product
    And I should not see "SKU456" product

  Scenario: Check product grid filter
    Given I click "NewCategory"
    And I should see "SKU123" product
    And I should see "SKU456" product
    When I filter TextField as is equal to "TestTextDaTa"
    Then I should see "SKU123" product
    And I should not see "SKU456" product
