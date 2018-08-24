@regression
@fixture-OroFlatRateShippingBundle:FlatRateIntegration.yml
Feature: Shipping rules method configurations
  ToDo: BAP-16103 Add missing descriptions to the Behat features

  Scenario: Create one more Flat Rate integration
    Given I login as administrator
    And go to System/ Integrations/ Manage Integrations
    And click "Create Integration"
    And I fill "Integration Form" with:
      | Type  | Flat Rate Shipping |
      | Name  | Flat Rate 2        |
      | Label | Flat Rate 2        |
    When save and close form
    Then I should see "Integration saved" flash message

  Scenario: Add two shipping methods for one shipping rule
    Given I go to System/ Shipping Rules
    And click "Create Shipping Rule"
    And fill "Shipping Rule" with:
      | Enable     | true       |
      | Name       | Flat Rate  |
      | Sort Order | 1          |
      | Currency   | $          |
    And click "Add All"
    And fill "Flat Rate Shipping Rule Form" with:
      | Type          | Per Item  |
      | Price         | 1.5       |
      | Type1         | Per Order |
      | Price1        | 2         |
      | HandlingFee1  | 3         |
    When save and close form
    Then should see "Shipping rule has been saved" flash message

  Scenario: Disable first Flat Rate integration
    Given I go to System/ Integrations/ Manage Integrations
    And click deactivate "Flat Rate" in grid
    And I should see "Deactivate Integration"
    When click "Deactivate" in modal window
    Then should see "Integration has been deactivated successfully" flash message

  Scenario: Test shipping methods UI on shipping rule edit page
    Given I go to System/ Shipping Rules
    And click edit "Flat Rate" in grid
    Then I should see "Flat Rate Disabled"
    Then I should see "Price: $2.0000, Handling Fee: $3.0000, Type: Per Order"
    And fill "Flat Rate Shipping Rule Form" with:
      | HandlingFee |  |
    And I click on empty space
    And fill "Shipping Rule" with:
      | Currency | € |
    Then I should see "Price: €2.0000, Type: Per Order"
    And I click "Flat Rate Shipping Method Icon"
    Then I should not see "Flat Rate Shipping Method Body"
    When I save and close form
    Then I should see "Shipping rule has been saved" flash message

  Scenario: Enable first Flat Rate integration
    Given I go to System/ Integrations/ Manage Integrations
    When I click activate "Flat Rate" in grid
    Then should see "Integration has been activated successfully" flash message

  Scenario: Verify HTML tags
    Given I go to System/ Shipping Rules
    And I click "Create Shipping Rule"
    And I fill "Shipping Rule" with:
      | Enable     | true                      |
      | Name       | <script>alert(1)</script> |
      | Sort Order | 1                         |
      | Currency   | $                         |
    And I click "Add All"
    And I fill "Flat Rate Shipping Rule Form" with:
      | Type   | Per Item  |
      | Price  | 1.5       |
      | Type1  | Per Order |
      | Price1 | 2         |
    When I save and close form
    Then I should see "Shipping rule has been saved" flash message
    Then I should see Shipping Rule with:
      | Name       | alert(1) |
      | Enabled    | Yes      |
      | Sort Order | 1        |
      | Currency   | USD      |
