@regression
@ticket-BB-7716
@automatically-ticket-tagged
@fixture-OroCustomerBundle:BuyerCustomerFixture.yml
Feature: Price lists must be sortable in customerGroup create\view page
  ToDo: BAP-16103 Add missing descriptions to the Behat features

  Scenario: Changing Price List Priorities In Customers
    Given I login as administrator
    And I go to Customers/Customers
    And I click Edit first customer in grid
    Then I should not see "Priority" in "Price List" table
    And I should see drag-n-drop icon present in "Price List" table
    When I click "Add Price List"
    And I choose Price List "first price list" in 2 row
    And I choose a Price List "second price list" in 1 row
    And I drag 2 row to the top in "Price List" table
    And I save and close form
    Then I should see "Customer has been saved" flash message
    And I should see that "first price list" is in 1 row
