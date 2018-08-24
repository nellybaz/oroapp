@regression
@fixture-OroProductBundle:product_collections_grids_pagination.yml
Feature: Product collection grid pagination
  In order to use pagination in product collection tab's grids
  As an Administrator
  I want to have ability to move between pages here

  Scenario Outline: Follow pagination control buttons
    Given I login as administrator
    And I am on Content Node page and added Product Collection variant
    And I have all products available in <tabName> tab, and focused on it
    Then I press next page button in grid "Active Grid"
    And Grid Pagination field should has 2 value
    Then I press next page button in grid "Active Grid"
    And Grid Pagination field should has 3 value
    Then I press previous page button in grid "Active Grid"
    And Grid Pagination field should has 2 value
    And I click "Cancel"
    Examples:
      |tabName       |
      |Manually Added|
      |Excluded      |

  Scenario: All Added Grid pagination follow after product collection save
    Given I am on Content Node page and added Product Collection variant
    And I click on "Advanced Filter"
    And I should see "DRAG TO SELECT"
    And I drag and drop "Field Condition" on "Drop condition here"
    And I click "Choose a field.."
    And I click on "SKU"
    And type "PSKU" in "value"
    And I click on "Preview Results"
    And I save form
    And I click "Content Variants"
    And Grid Pagination field should has 1 value
    Then I press next page button in grid "Active Grid"
    And Grid Pagination field should has 2 value
    Then I press next page button in grid "Active Grid"
    And Grid Pagination field should has 3 value
    Then I press previous page button in grid "Active Grid"
    And Grid Pagination field should has 2 value
    And I click "Cancel"
