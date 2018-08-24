@fixture-OroCustomerBundle:BuyerCustomerFixture.yml
Feature: Update customer user roles
  ToDo: BAP-16103 Add missing descriptions to the Behat features

  Scenario: Customer user able to update his roles
    Given I signed in as NancyJSallee@example.org on the store frontend
    And I click "Account"
    And I click "Users"
    And click Edit NancyJSallee@example.org in grid
    And I fill form with:
      | Buyer (Predefined) | true |
    And I click "Save"
    Then I should see "Customer User has been saved"

  Scenario: Customer user unable to update his roles
    Given I signed in as AmandaRCole@example.org on the store frontend
    And I click "Account"
    And I click "Users"
    And I should not see following actions for AmandaRCole@example.org in grid:
      | Edit |
