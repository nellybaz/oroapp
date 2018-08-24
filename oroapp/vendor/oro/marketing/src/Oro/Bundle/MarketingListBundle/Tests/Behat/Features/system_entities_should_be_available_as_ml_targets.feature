@regression
Feature: System entities should be available as ML targets
  In order to manage marketing lists
  As administrator
  I need to be able to create marketing list based on system entities

  Scenario: Enable entities
    Given I login as administrator
    And I go to System/ Channels
    And I press "Create Channel"
    And I fill form with:
      | Name         | Sales Channel |
      | Channel Type | Sales         |
    And I fill in "Channel entities" with "Magento Customer"
    And click "Add"
    And I fill in "Channel entities" with "Magento Shopping Cart"
    And click "Add"
    And I fill in "Channel entities" with "Magento Newsletter Subscriber"
    And click "Add"
    And I save and close form

  Scenario Outline: Successful creating marketing list based on system entities
    And I go to Marketing/ Marketing Lists
    And I press "Create Marketing List"
    When I fill form with:
      | Name   | <Marketing List Name> |
      | Entity | <Entity Name>         |
      | Type   | Dynamic               |
    Then I should see that "Available contact information fields" contains "Contact Information"
    When I add the following columns:
      | Contact Information |
    And I save and close form
    Then I should see "Marketing list saved" flash message

    Examples:
      | Marketing List Name           | Entity Name                   |
      | Account                       | Account                       |
      | Order                         | Order                         |
      | Quote                         | Quote                         |
      | Shopping List                 | Shopping List                 |
      | Customer User                 | Customer User                 |
      | Contact                       | Contact                       |
      | Lead                          | Lead                          |
      | Business Customer             | Business Customer             |
      | Magento Customer              | Magento Customer              |
      | Magento Shopping Cart         | Magento Shopping Cart         |
      | Magento Newsletter Subscriber | Magento Newsletter Subscriber |
