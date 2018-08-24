@ticket-BB-9877
@automatically-ticket-tagged
@fixture-OroFlatRateShippingBundle:FlatRateIntegration.yml
@fixture-OroPaymentTermBundle:PaymentTermIntegration.yml
@fixture-OroCheckoutBundle:Checkout.yml
Feature: Deep level of permissions for buyer allows to view customer user owner on orders
  ToDo: BAP-16103 Add missing descriptions to the Behat features
  Scenario: Checking that current permission wont let to see the Ordered By field
    Given I login as administrator and use in "first_session" as "Admin"
    And I login as AmandaRCole@example.org the "Buyer" at "second_session" session
    And I click "Orders"
    And I shouldn't see "Ordered By" column in "Open Orders Grid"

  Scenario: Adding Corporate (DEEP level) permission to Buyer role
    Given I operate as the Admin
    And I go to Customers/ Customer User Roles
    And I click edit Buyer in grid
    And select following permissions:
      | Checkout | View:Сorporate (All Levels) |
    And I save and close form
    And I operate as the Buyer
    And I click "Orders"
    And I should see "Ordered By" column in "Open Orders Grid"
